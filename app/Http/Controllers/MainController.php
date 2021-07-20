<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Content;
use Session;

class MainController extends Controller
{
    public function index()
    {
        $data = Content::join('users', 'users.id', '=', 'contents.user_id')
        ->join('categories', 'categories.id', '=', 'contents.category_id')
        ->select(['contents.title','categories.name as category','users.name as creator'])
        ->paginate(5);
        return view('frontend.layouts.home',compact('data'));
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
