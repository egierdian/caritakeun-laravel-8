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
    public function content(){
        $data = Content::join('users', 'users.id', '=', 'contents.user_id')
        ->join('categories', 'categories.id', '=', 'contents.category_id')
        ->select(['contents.id','contents.title','categories.name as category','users.name as creator'])
        ->orderBy('contents.created_at','desc')
        ->paginate(5);
        return view('frontend.content',compact('data'));
    }
    public function detail($id = "") {
        // $data = Content::findOrFail($id)
        $data = '';
        $data = Content::join('categories', 'categories.id', '=', 'contents.category_id')
        ->join('users', 'users.id', '=', 'contents.user_id')
        ->select('contents.title','contents.content','categories.name as category','users.name as creator')
        ->where('contents.id',$id)->first();
        if(!$data):
            return $this->content();
        endif;
        return view('frontend.detail',compact('data'));
    }
}
