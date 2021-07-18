<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Datatables;
// use Yajra\Datatables\Facades\Datatables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::all();
        // dd($category);
        if ($request->ajax()) {
            $data = Category::select('*');
            return datatables()->of(Category::select('*'))
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btnView    = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm"><i class="far fa-delete"></i>View</a>';
                    $btnEdit    = '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm" onclick="edit('.$row->id.')"><i class="fa fa-pen-square"></i></a>';
                    $btnDelete  = '<a href="javascript:void(0)" class="edit btn btn-danger btn-sm" onclick="delete_data('.$row->id.')"><i class="fa fa-trash-alt"></i></a>';

                    return $btnEdit.$btnDelete;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.category.list');
    }
    public function save(Request $req, $id = "")
    {
        $status = false;
        $message = '';
        $req->validate([
            'name' => 'required',
        ]);
        if($id):
            $data = Category::find($id)->update($req->all()); 
            $message = 'Success edit data';
        else:
            $data = Category::create($req->all());
            $message = 'Success save data';
        endif;
        if ($data) :
            $status = true;
        endif;
        echo json_encode(array("status" => $status, "data" => $data, "message"=>$message));
    }
    public function edit($id){
        $status = false;
        $Category = Category::find($id);
        if ($Category) :
            $status = true;
        endif;
        echo json_encode(array("status" => $status, "data" => $Category));
    }
    public function delete($id){
        $status = false;
        $data = '';
        $message = '';
        $category = Category::where('id',$id)->delete();
        if($category):
            $status = true;
            $message = 'Success delete data with id ='.$id;
        endif;
        echo json_encode(array("status" => $status, "data" => $category, "message"=> $message));
    }
}
