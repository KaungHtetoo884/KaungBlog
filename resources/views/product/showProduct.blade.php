<div class="container">
    <div class="row col-md-12">
        @foreach($users as $user)
            {{$user}}
        @endforeach
        @foreach($products as $product)
            <div class="card col-md-3 ml-5" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{substr($product->description,0,100)}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
