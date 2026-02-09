<x-layout>
    {{-- @dd($article) --}}
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center">Modifica un articolo: {{$article->title}}</h1>
                </div>
            </div>
        </div>
    </header>
    <x-display-message />
    <x-display-errors />
    <div class="container">
        <div class="row mt-5 justify-content-center my-5">
            <div class="col-12 col-md-6 justify-content-center">
                <form class="rounded-4 shadow bg-secondary-subtle p-3" action="{{route('article.update', compact('article'))}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo</label>
                        <input name="title" type="text" value="{{$article->title}}" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input name="subtitle" type="text" value="{{$article->subtitle}}" class="form-control" id="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" class="form-control" id="body">{{$article->body}}</textarea>
                    </div>
                    <div class="mb-3">
                        <span class="form-label">Immagine attuale</span>
                        <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" width="400" height="200">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input name="img" type="file" class="form-control d-flex me-3" id="img">
                    </div>       
                    <button type="submit" class="btn btn-primary">Modifica un articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>