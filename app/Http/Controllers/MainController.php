<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.home');
    }
    public function dashboard()
    {
        return view('backend.home');
    }
    public function data_dashboard()
    {
        $count_user = DB::table('users')->count();
        $count_content = DB::table('contents')->count();
        echo json_encode(array("count_user" => $count_user, "count_content" => $count_content));
    }
}
