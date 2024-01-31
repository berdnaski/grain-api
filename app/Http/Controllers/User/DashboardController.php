<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//de00582cbf18746bd97fd3dc98760f950d5b6103021baf5720c9cc1433c5c464

class DashboardController extends Controller

{
    public function index()
    {
        return response()->json(['message' => 'Authorized'], 200);
    }
}
