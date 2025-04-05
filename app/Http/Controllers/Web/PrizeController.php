<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Web\Prize;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\Prizes\PrizeStoreRequest;
use App\Http\Requests\Prizes\PrizeUpdateRequest;

class PrizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $prizes = Prize::latest()->paginate(10);
//
//        return view('prizes.index', compact('prizes'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
        $prizes = Prize::all();

        return view('prizes.index', compact('prizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PrizeStoreRequest $request)
    {
        Prize::create($request->validated());

        return redirect()->route('prizes.index')
            ->with('success', 'Prize created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prize $prize): View
    {
        return view('prizes.show',compact('prize'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prize $prize)
    {
        return view('prizes.edit',compact('prize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PrizeUpdateRequest $request, Prize $prize)
    {
        $prize->update($request->validated());

        return redirect()->route('prizes.index')
            ->with('success','Prize updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prize $prize)
    {
        $prize->delete();

        return redirect()->route('prizes.index')
            ->with('success','Prize deleted successfully');
    }
}
