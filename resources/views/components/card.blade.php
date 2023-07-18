<div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$brand}} {{$name}}</h5>
                    <p class="card-text">Categoria = {{$category}}</p>
                    <p class="card-text">Prezzo = {{$price}} euro</p>
                    <a href="{{ route($route, ['id' => $id]) }}"  class="btn btn-primary">Dettaglio Prodotto</a>
                </div>
