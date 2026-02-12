<x-layout>
    <x-masthead title="Inserisci un nuovo prodotto"></x-masthead>
    <x-display-message />
    <x-display-errors />
    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class="rounded-4 shadow bg-secondary-subtle p-3" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome del prodotto</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione del prodotto</label>
                        <textarea name="description" class="form-control" id="description">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo del prodotto</label>
                        <div class="d-flex">
                            <input name="price" type="text" value="{{old('price')}}" class="form-control" id="price"><span class="ms-2 fs-3">€</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>     
                    <button type="submit" class="btn btn-primary">Crea un nuovo prodotto</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>