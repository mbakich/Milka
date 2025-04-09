<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role_id;

        if($role < 3) {
            return view('dashboard.index');
        }else{
            Auth::guard('web')->logout();

//            $request->session()->invalidate();
//
//            $request->session()->regenerateToken();

            return redirect('/');
        }
    }

    public function showChart()
    {

        $start = Carbon::parse(User::min("created_at"));
        $end = Carbon::now();
        $period = CarbonPeriod::create($start, "1 week", $end);

        $usersPerMonth = collect($period)->map(function ($date) {
            $endDate = $date->copy()->endOfWeek();

            return [
                "count" => User::where("created_at", "<=", $endDate)->count(),
                "month" => $endDate->format("Y-m-d")
            ];
        });

        $data = $usersPerMonth->pluck("count")->toArray();
        $labels = $usersPerMonth->pluck("weeks")->toArray();

        $chart = Chartjs::build()
            ->name("UserRegistrationsChart")
            ->type("line")
            ->size(["width" => 170, "height" => 60])
            ->labels($labels)
            ->datasets([
                [
                    "label" => "User Registrations",
                    "backgroundColor" => "rgba(233, 150, 122, 0.31)",
                    "borderColor" => "rgba(233, 150, 122, 0.7)",
                    "data" => $data
                ]
            ])
            ->options([
                'scales' => [
                    'x' => [
                        'type' => 'time',
                        'time' => [
                            'unit' => 'week'
                        ],
                        'min' => $start->format("Y-m-d"),
                    ]
                ],
                'plugins' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Monthly User Registrations'
                    ]
                ]
            ]);

        return view("dashboard.user_registration_chart", compact("chart"));

    }
}
