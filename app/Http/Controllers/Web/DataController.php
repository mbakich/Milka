<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Web\Gramaza;
use App\Models\Web\Categories;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;

class DataController extends Controller
{

    public function index(){
        return view('data.index');
    }
}
