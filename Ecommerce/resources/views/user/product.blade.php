<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
          
        <form action="{{ url('search') }}" method="get" class="form-inline" style="float: right; padding: 10px;">

            @csrf

            <input class="form-control" type="search" name="Search" placeholder="search">

            <input type="submit" value="search" class="btn btn-success">   

        </form>
        
        
        
        </div>
        </div>
       
       
       
        {{-- <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Tittle goes here</h4></a>
              <h6>$25.75</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (24)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Tittle goes here</h4></a>
              <h6>$30.25</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (21)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Tittle goes here</h4></a>
              <h6>$20.45</h6>
              <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (36)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Tittle goes here</h4></a>
              <h6>$15.25</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (48)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>Tittle goes here</h4></a>
              <h6>$12.50</h6>
              <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (16)</span>
            </div>
          </div>
        </div> --}}

        @foreach($data as $product )
            
        
        <div class="col-md-4">
            <div class="product-item">
                <a href="#"><img height="300" width="150" src="/productimage/{{ $product->image }}"></a>
                <div class="down-content">
                    <a href="#"><h4>{{ $product->title }}</h4></a>
                    <h6>{{ $product->discount_price }}%</h6>
                    <h7>Rp. {{ $product->price }}</h7>
                    <p>{{ $product->description }}</p>

                    <form action="{{url('addcart', $product->id)}}" method="POST" >

                        @csrf

                        <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="quantity">

                        <br>

                        <input class="btn btn-primary" type="submit" value="Add Cart">





                    </form>
                    
                    {{-- <a class="btn btn-primary" href="#">Add Cart</a> --}}
                    {{-- <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>Reviews (32)</span> --}}
                </div>
            </div>
        </div>

        @endforeach

        @if(method_exists($data, 'links'))
    
        <div class="d-flex justify-content-center">

            {!! $data->links()!!}

        </div>

        @endif

    </div>
    </div>
  </div>