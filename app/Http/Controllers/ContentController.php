<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use Datatables;
class ContentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Content::select('*');
            $data = DB::table('contents')->where('user_id', Auth::user()->id);
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btnView    = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"><i class="far fa-delete"></i>View</a>';
                    $btnEdit    = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm mr-2" onclick="edit('.$row->id.')"><i class="fa fa-pen-square"></i></a>';
                    $btnDelete  = '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm mr-2" onclick="delete_data('.$row->id.')"><i class="fa fa-trash-alt"></i></a>';

                    return $btnEdit.$btnDelete;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.content.list');
    }
    public function save(Request $req, $id = "")
    {
        $status = false;
        $message = '';
        $req->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        if($id):
            #CARA I
            // $data = User::find($id)->update($user); 

            $Content = Content::findOrFail($id);
            $data = $Content->update([
                'title'    => $req->title,
                'category_id'    => $req->category_id,
                'content' => $req->content
            ]);
            $message = 'Success edit data';
        else:
            $content = new Content;
            $content->title = $req->title;
            $content->user_id = Auth::user()->id;
            $content->category_id = $req->category_id;
            $content->content = $req->content;
            $data = $content->save();
            // $data = User::create($req->all());
            $message = 'Success save data';
        endif;
        if ($data) :
            $status = true;
        endif;
        echo json_encode(array("status" => $status, "data" => $data, "message"=>$message));
    }
    public function edit($id){
        $status = false;
        $Content = Content::find($id);
        if ($Content) :
            $status = true;
        endif;
        echo json_encode(array("status" => $status, "data" => $Content));
    }
    public function delete($id){
        $status = false;
        $data = '';
        $message = '';
        $Content = Content::where('id',$id)->delete();
        if($Content):
            $status = true;
            $message = 'Success delete data with id = '.$id;
        endif;
        echo json_encode(array("status" => $status, "data" => $Content, "message"=> $message));
    }
    public function listCategory(){
        $Category = Category::all();
        echo json_encode(array("data" => $Category));
    }
}
