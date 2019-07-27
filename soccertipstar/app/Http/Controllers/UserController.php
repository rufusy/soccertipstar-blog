<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        if($request->ajax()){
            $data = User::latest()->get();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" 
                                    data-toggle="tooltip"  
                                    data-id="'.$row->id.'" 
                                    data-original-title="Edit" 
                                    class="edit btn btn-primary btn-sm btn-flat editUser">
                                    Edit</a>';

                        $btn = $btn.' <a href="javascript:void(0)" 
                                        data-toggle="tooltip"  data-id="'.$row->id.'" 
                                        data-original-title="Delete" 
                                        class="btn btn-danger btn-sm btn-flat deleteUser">
                                        Delete</a>';
                        
                        $btn = $btn.' <a href="user/'.$row->id.'" 
                                        data-toggle="tooltip"  data-id="'.$row->id.'" 
                                        data-original-title="View" 
                                        class="btn btn-danger btn-sm btn-flat deleteUser">
                                        view</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home.users.index');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->user_id)){
            $data = request()->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users'
            ]);
            // generate random password 10 chars long
            $length = 10;
            $keyspace = '23456789abcdefghjkmnpqrstuvWxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $password = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i=0; $i<$length; $i++)
                $password .= $keyspace[random_int(0, $max)];
                
            $extra_data = [
                            'password' => Hash::make($password),
                        ];
            $final_data = array_merge($data, $extra_data);
        
            User::Create([
                'first_name' => $final_data['first_name'],
                'last_name' => $final_data['last_name'],
                'email' => $final_data['email'],
                'password' => $final_data['password']
            ]);
            return response()->json(['success'=>'user saved successfully.']);
        
        }
        else
        {
            $id = $request->user_id;
            $data = request()->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users,email,'.$id
            ]);
            $user = User::findOrFail($id);
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->email=$data['email'];
            if($user->save())
                return response()->json(['success'=>'user saved successfully.']);
        }
        
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('home.users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success'=>'User deleted successfully.']);
    }
}
