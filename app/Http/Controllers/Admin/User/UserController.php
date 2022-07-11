<?php

namespace App\Http\Controllers\Admin\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use DataTables;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function ajaxList(user $users, Request $request) {
        //dd($request->all());
        $sortingColumn = "users.id";
        $sortingOrder = "ASC";
        if ($request->sort != "") {
            $sortingColumn = ($request->sort);
        }
        if ($request->order != "") {
            $sortingOrder = ($request->order);
        }
        $users = $users->select("users.*");

        if ($sortingColumn == "uploaded_by") {
            $users = $users->join('users', 'users.id', '=', 'users.created_by');

            $sortingColumn = "users.name";
        }
        $users = $users->orderBy($sortingColumn, $sortingOrder);


        $totalRecords = $users->count();
        if (!empty($request->offset) && !empty($request->limit)) {
            $users = $users->skip(($request->offset))->take(($request->limit));
        }
        $users = $users->get();
        //dd($pushNotifyFiles->toArray());
        $response = [
            "total" => $totalRecords,
            "rows" => $users,
        ];
        return response()->json($response);

    }

	/**
	 */


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $users = user::get();
    //     //dd($users);
    //     if ($request->ajax()){
    //         $alldata = dataTables::of($users)
    //         ->addIndexcolumn()
    //         ->addcolumn('action',function($row){

    //             $btn = '<a href="javascript:void(0)"data-toggle="tool-tip" data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editusers">EDIT</a>';
    //             $btn .= '<a href="javascript:void(0)"data-toggle="tool-tip" data-id="'.$row->id.'" data-original-title="Delete" class="delete btn btn-danger btn-sm deleteusers">Delete</a>';
    //             return $btn;

    //         })
    //         ->rawColumns(['action'])
    //         ->make(true);
    //         return $alldata;


    //     }
    //     return view('admin.users.index',compact('users'));
   // }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required|min:6',
            'gender' => 'required',
            'domain'=>'required',
            'image' => 'required',
            'intake' => 'required',


        ]);
        $user->email=$request->email;



        $user->image = $request->file('images');

        user::create ($request->all());

        return redirect()->route('admin.users.index')
                        ->with('success','user created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {


        return view ('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required',
            'gender'=> 'required',
            'domain'=>'required',
            'image' => 'required',
            'intake' => 'required',




        ]);

        $user->image = $request->file('images');



        $user->email=$request->email;

        $user->update($request->all());

        return redirect()->route('admin.users.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
                        ->with('success','user deleted successfully');
    }
}
