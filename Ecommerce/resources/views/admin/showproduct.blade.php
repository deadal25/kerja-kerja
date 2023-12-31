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
  </head>
  <body>
    
      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')

        <!-- partial -->
        <div style=padding-bottom:30px;" class="container-fluid page-body-wrapper">
            <div class= "container" align="center"> 

                
                @if(session()->has('message'))
     
                <div class="alert alert-success">
         
                    
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
                    
                </div>
                   
                @endif 
                
            <table>
                <tr style="background-color: grey;">
                    <td style="padding: 20px;">Title</td >
                        <td style="padding: 20px;">Description</td >
                            <td style="padding: 20px;">Quantity</td >
                                <td style="padding: 20px;">Category</td >
                                    <td style="padding: 20px;">Price</td >
                                        <td style="padding: 20px;">Diskon Price</td >
                                    <td style="padding: 20px;">Image</td>
                                    <td style="padding: 20px;">Edit</td>
                                    <td style="padding: 20px;">Delete</td>

                
                </tr>

                @foreach($data as $product)
                    
                
                <tr align="center" style="background-color: black;" >
                    <td style="padding: 20px;">{{ $product->title }}</td >
                        <td style="padding: 20px;">{{ $product->description }}</td >
                            <td style="padding: 20px;">{{ $product->quantity }}</td >
                                <td style="padding: 20px;">{{ $product->category }}</td >
                                <td style="padding: 20px;">{{ $product->price }}</td >
                                        <td style="padding: 20px;">{{ $product->discount_price }}</td >
                                    <td style="padding: 20px;">
                                        <img height="100px" width="100px" src="/productimage/{{ $product->image }}" >
                                        </td>

                                        <td>
                                            <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Edit</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" onclick="return confirm('Are yous Sure?')" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
                                        </td>
                                    
                                    
                                </tr>
                                
                                @endforeach



            </table>
            
            
            </div>


            
        </div>
        {{-- @include('admin.body') --}}
          <!-- partial -->
        @include('admin.script')
  </body>
</html>