<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    public function product(){

        if(Auth::id()){

            if(Auth::user()->usertype=='1'){

                $category=category::all();

                return view('admin.product',compact('category'));
            } 
            else{
                return redirect()->back();
            }

        }
        else{
            return redirect('login');
        }

    }

    public function uploadproduct(Request $request){

        $data=new product;

        $category=category::all();
       
        $image=$request->file;
       
        $imagename=time().'.'.$image->getClientOriginalExtension();
       
        $request->file->move('productimage', $imagename);
       
        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->category=$request->category;

        $data->discount_price=$request->dis_price;
        
        $data->description=$request->description;
        
        $data->quantity=$request->quantity;

        $data->save();

        // return redirect()->back()->with('message','Product Added Successfully');;
        return redirect()->back()->with('message', 'Product Added Successfully');

    }

    public function showproduct(){
        
        $data =product::all();
        
        
        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id){

        $data =product::find($id);

        $data->delete();

        // return redirect()->back()->with('message','Product Deleted Successfully');;
        return redirect()->back()->with('message', 'Product Deleted Successfully');

        // return view('admin.deleteproduct',compact('data'));

    }

    public function updateview($id){

        $data =product::find($id);
        $category=category::all();


        // $data =product::all();

        return view('admin.updateview',compact('data','category'));

    }

    public function updateproduct(Request $request , $id){

        $data =product::find($id);
        $category=category::all();

        // $data=new product;
       
        $image=$request->file;

        if($image){

        }
       
        $imagename=time().'.'.$image->getClientOriginalExtension();
       
        $request->file->move('productimage', $imagename);
       
        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;
        
        $data->category=$request->category;

        $data->discount_price=$request->dis_price;
        
        $data->description=$request->description;
        
        $data->quantity=$request->quantity;

        $data->save();

        // return redirect()->back()->with('message','Product Updated Successfully');
        return redirect()->back()->with('message', 'Product Updated Successfully');

        
        // $data =product::all();

        // return view('admin.updateview',compact('data'));

    }

    public function showorder(){

        $order=order::all();

        return view('admin.showorder',compact(('order')));
    }

    public function updatestatus($id){

        $order=order::find($id);

        $order->status='delivered';

        $order->save();

        return redirect()->back()->with('message', 'Product Delivered Successfully');


    }

    public function view_category(){

        $data=category::all();

        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data=new category;

        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');;

    }

    public function delete_category($id){

        $data =category::find($id);

        $data->delete();

        // return redirect()->back()->with('message','Product Deleted Successfully');;
        return redirect()->back()->with('message', 'Category Deleted Successfully');

        // return view('admin.deleteproduct',compact('data'));

    }

    public function view_product(){

        if(Auth::id()){

            if(Auth::user()->usertype=='1'){

                $category=category::all();
                return view('admin.product',compact('category'));
            } 
            else{
                return redirect()->back();
            }

        }
        else{
            return redirect('login');
        }

    }



}
