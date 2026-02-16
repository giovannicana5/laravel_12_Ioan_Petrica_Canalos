<x-layout>
    <x-masthead title="I miei articoli"></x-masthead>
    <x-display-message />
    <div class="container">
        <div class="row my-5">
            {{-- @dd($products) --}}
            @foreach($articles as $article)
            {{-- @dd($article->tags) --}}
            <div class="col-12 col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-subtitle">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->body}}</p>
                        @if($article->tags->isNotEmpty())
                        <div class="mb-3">
                            @foreach($article->tags as $tag)
                                <a href="{{route('tag.index')}}" target="_blank" class="badge text-bg-primary">#{{$tag->name}}</a>
                            @endforeach
                        </div>
                        @endif
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary d-block">Dettaglio dell'articolo</a>
                        @auth
                            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica l'articolo</a>
                            <form action="{{route('article.destroy', compact('article'))}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Elimina l'articolo</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>