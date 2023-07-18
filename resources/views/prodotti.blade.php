<x-layout>
    <x-navbar></x-navbar>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="display-1">
                    I nostri Prodotti
                </h2>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
                @foreach ($products as $product)
                <div class="col-12 col-md-3">
                    <x-card
                        name="{{$product['name']}}"
                        brand="{{$product['brand']}}"
                        price="{{$product['price']}}"
                        category="{{$product['category']}}"
                        id="{{$product['id']}}"
                        route="dettaglio-prodotto"
                    />
                </div>
                </div>



                @endforeach
        </div>
    </div>



</x-layout>