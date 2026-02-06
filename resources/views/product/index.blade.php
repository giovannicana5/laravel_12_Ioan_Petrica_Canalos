<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">I miei prodotti</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row m-5">
            {{-- @dd($products) --}}
            @foreach($products as $product)
            <div class="col-12 col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="Immagine qualsiasi">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->price}} €</h6>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>