{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">

        .title{
            color:white; 
            padding-top:25px; 
            font-size:25px;
            text-align: center;
        }
        
        label{
            display: inline-block;
            width: 200px;
        }

    </style>
  </head>
  <body>
    
      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class= "container" align="center"> 

        <h1 class="title"> Add Product </h1>

        
        @if(session()->has('message'))
     
        <div class="alert alert-success">
 
            
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{session()->get('message')}}
            
        </div>
           
        @endif 


        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data"  >

            @csrf

        <div style="padding:15px;">
            <label >Product title</label>

            <input style="color: black" type="text" name="title" placeholder="Give a Product Ttile" required="">

        </div>
        <div style="padding:15px;">
            <label >Price</label>

            <input style="color: black" type="number" name="price" placeholder="Give a Price" required="">

        </div>
        <div style="padding:15px;">
            <label >Description</label>

            <input style="color: black" type="text" name="description" placeholder="Give a Description" required="">

        </div>
        <div style="padding:15px;">
            <label >Quantity</label>

            <input style="color: black" type="number" min="0" name="quantity" placeholder="Product Quantity" required="">

        </div>

        <div style="padding:15px;">
            <label >Category</label>
            <select style="color: black;" name="category" required="" >
                <option value="" selected=''>Add a Category here</option>
                
                @foreach($category as $category)
                    
                <option value="{{ $category->category_name }}"> {{ $category->category_name }}</option>

                @endforeach
            </select>

            {{-- <input style="color: black" type="text" min="0" name="quantity" placeholder="Product Quantity" required=""> --}}

        </div>

        <div style="padding:15px;">
            <label >Discount Price</label>

            <input style="color: black" type="number" min="0" name="dis_price" placeholder="Write a Discount" required="">

        </div>

        <div style="padding:15px;">
            {{-- <label >Gambar</label> --}}

            <input type="file" name="file" >

        </div>

        <div style="padding:15px;">
        
            <input class="btn btn-success" type="submit" value="Add Product" >

        </div>

    </form>


    </div>
        {{-- @include('admin.body') --}}
          <!-- partial -->
        @include('admin.script')
  </body>
</html>