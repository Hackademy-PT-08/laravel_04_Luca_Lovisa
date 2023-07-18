<x-layout>
    <x-navbar></x-navbar>

    <div class="container  my-5">
        <div class="row">
            <div class="col-12 text-center">
           <p class="display-2 my-5"> 
            {{$product['brand']}} {{$product['name']}} 
           </p>
            </div>
        <div class="col-6 mt-5 ps-3 py-5 prodotto">
            <img class="img-fluid" src="https://picsum.photos/400/400" alt="">
        </div>
        <div class="col-6 mt-5 pe-3 py-5 prodotto">
            <div class="col-12">
                <h3 class="dysplay-4">Descrizione</h3>
               <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptates itaque ex. </p>
            </div>
            <div class="col-12">
               <p class="display-4 my-5"> 
                Categoria = {{$product['category']}}
               </p>
               <p class="display-4 my-5">
                Prezzo = {{$product['price']}} euro
               </p>
               <p class="display-4 my-5">
                Quantità disponibile = {{$product['stock']}}
               </p>

            </div>
        </div>
        </div>
    </div>










    <x-footer></x-footer>
</x-layout>