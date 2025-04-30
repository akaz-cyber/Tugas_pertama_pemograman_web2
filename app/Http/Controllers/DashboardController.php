<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function homedashboard(){
        return view('admin.dashboardadmin');
    }
}
