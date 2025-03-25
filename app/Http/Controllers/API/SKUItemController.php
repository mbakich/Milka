<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\API\BaseController as BaseController;

class SKUItemController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index');
    }

    public function calculate()
    {
        return view('orders.index');
    }

}
