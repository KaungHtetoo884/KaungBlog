@extends("layout.master")
@section("title","Home")
@section("content")
    @foreach($products as $product)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <a href="#" class="card-link">{{$product->price}}</a>
                <a href="{{url('delete/'.$product->id)}}" class="card-link text-white bg-danger p-2">Delete</a>
            </div>
        </div>
    @endforeach
@endsection
