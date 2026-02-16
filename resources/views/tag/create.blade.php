<x-layout>
    <x-masthead title="Inserisci un nuovo tag"></x-masthead>
    <x-display-message />
    <x-display-errors />
    {{-- @dd($tags) --}}
    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class="rounded-4 shadow bg-secondary-subtle p-3" action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="tag" class="form-label">Inserisci una nuova categoria</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="tag">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input name="subtitle" type="text" value="{{old('subtitle')}}" class="form-control" id="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" class="form-control" id="body">{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        @foreach($tags as $tag)
                            <div class="form-check">
                                <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}" id="checkDefault">
                                <label class="form-check-label" for="checkDefault">{{$tag->name}}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Crea una nuova categoria</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>