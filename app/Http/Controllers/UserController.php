<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use Session;
use Datatables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $category = User::all();
        if ($request->ajax()) {
            $data = User::select('*');
            return datatables()->of(User::select('*'))
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
        return view('backend.user.list');
    }
    public function save(Request $req, $id = "")
    {
        $status = false;
        $message = '';
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ]);
        if($id):
            #CARA I
            // $data = User::find($id)->update($user); 

            $User = User::findOrFail($id);
            $data = $User->update([
                'name'     => ucwords(strtolower($req->name)),
                'email'    => strtolower($req->email),
                'password' => Hash::make($req->password)
            ]);
            $message = 'Success edit data';
        else:
            $user = new User;
            $user->name = ucwords(strtolower($req->name));
            $user->email = strtolower($req->email);
            $user->password = Hash::make($req->password);
            $user->email_verified_at = \Carbon\Carbon::now();
            $data = $user->save();
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
        $User = User::find($id);
        if ($User) :
            $status = true;
        endif;
        echo json_encode(array("status" => $status, "data" => $User));
    }
    public function delete($id){
        $status = false;
        $data = '';
        $message = '';
        $User = User::where('id',$id)->delete();
        if($User):
            $status = true;
            $message = 'Success delete data with id ='.$id;
        endif;
        echo json_encode(array("status" => $status, "data" => $User, "message"=> $message));
    }
}