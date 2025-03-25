<?php

namespace App\Http\Controllers\Web\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UsersDataTableController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index_dt');
    }
}
