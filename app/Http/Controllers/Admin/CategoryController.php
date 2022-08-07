<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$data=DB::table('categories')->get(); // query builder

        //model 
        $data=Category::all(); // eloquent ORM    

        //return response()->json($data);
        return view('admin.category.category.index',compact('data'));
    }

public function store(Request $request)
{
    $validInteractiveModes= $request->validate([
    'category_name' =>'required|unique:categories|max:55',
    ]);

    //query builder
    // $data=array();
    // $data['category_name']=$request->category_name;
    // $data['category_slug']=Str::slug($request->category_name,'-');
    // //dd($data);
    // DB::table('categories')->insert($data);

    // Eloquent ORM
    Category::insert([
        'category_name'=>$request->category_name,
        'category_slug'=>Str::slug($request->category_name,'-')
    ]);

    $notification=array('messege'=>'New Category Inseted','alert-type'=>'success');
    return redirect()->back()->with($notification);

    
}











}
