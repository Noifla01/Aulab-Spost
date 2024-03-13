<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                {{$article->title}}
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid my-3">
                <div class="text-center">
                    <h2> {{$article->user->name}} </h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}} </p>
                    </div>
                </div>

                <p> {{$article->subtitle}} </p>
                <hr>
                
                <p> {{$article->body}} </p>
                <div class="text-center"> 
                    @if(str_contains(url()->previous(),"user"))
                    <a href="{{route('article.byUser', ['user'=>$article->user])}}" class="btn btn-info text-white my-5">Torna indietro</a>
                    @elseif(str_contains(url()->previous(),"category"))
                    <a href="{{route('article.byCategory', ['category'=>$article->category])}}" class="btn btn-info text-white my-5">Torna indietro</a>
                    @else
                    <a href="{{route('homepage')}}" class="btn btn-info text-white my-5">Torna indietro</a>
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <form action="{{route('revisor.acceptArticle', compact('article'))}}" method="POST" >
                        @csrf
                            <button class="btn btn-success text-white">Accetta Articolo</button>
                        </form>
                        <form action="{{route('revisor.rejectArticle', compact('article'))}}" method="POST" >
                            @csrf
                                <button class="btn btn-danger text-white">Rifiuta articolo</button>
                            </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-layout>