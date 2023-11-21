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
        <div class="container-fluid page-body-wrapper">
            <div class= "container" align="center"> 

                @if(session()->has('message'))
     
            <div class="alert alert-success">
     
                
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
                
            </div>
               
            @endif 

                <table>
                    <tr style="background-color: grey;">
                        <td style="padding:20px;">Customer Name</td>
                        <td style="padding:20px;" >Phone </td>
                        <td style="padding:20px;">Address</td>
                        <td style="padding:20px;">Product Title</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Quantity</td>
                        <td style="padding:20px;">Status</td>
                        <td style="padding:20px;">Action</td>

                    </tr>

                    @foreach($order as $orders)
                        
                    <tr align="center" style="background-color:black;">
                        <td style="padding:20px;">{{ $orders->name }}</td>
                        <td style="padding:20px;">{{ $orders->phone }}</td>
                        <td style="padding:20px;">{{ $orders->address }}</td>
                        <td style="padding:20px;">{{ $orders->product_name }}</td>
                        <td style="padding:20px;">{{ $orders->price }}</td>
                        <td style="padding:20px;">{{ $orders->quantity }}</td>
                        <td style="padding:20px;">{{ $orders->status }}</td>
                        <td style="padding:20px;"><a class="btn btn-success" href="{{ url('updatestatus',$orders->id) }}">Delivered</a></td>
                    </tr>

                    @endforeach


                </table>


                </div>

          <!-- partial -->
        @include('admin.script')
  </body>
</html>