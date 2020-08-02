<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;
use DataTables;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if($request->ajax()){
            $data = Post::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="/post/'.$row->id.'/edit" 
                                    data-toggle="tooltip"  
                                    data-id="'.$row->id.'" 
                                    data-original-title="Edit" 
                                    class="edit btn btn-primary btn-sm btn-flat editUser">
                                    Edit</a>';
                        

                        $btn = $btn.' <a href="/post/'.$row->slug.'" 
                                        data-toggle="tooltip"  data-id="'.$row->id.'" 
                                        data-original-title="View" 
                                        class="btn btn-success btn-sm btn-flat viewUser">
                                        view</a>';

                        
                            $btn = $btn.' <a href="javascript:void(0)" 
                                            data-toggle="tooltip"  data-id="'.$row->id.'" 
                                            data-original-title="Delete" 
                                            class="btn btn-danger btn-sm btn-flat deletePost">
                                            Delete</a>';
                     
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('home.dashboard');
    }
}
