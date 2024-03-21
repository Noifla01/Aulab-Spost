<x-layout>
    <div class="container h1-img mt-1">
        <div class="row justify-content-center text-center py-5">
            <h1 class="display-5 fw-bold secondaryFont">
                {{$article->title}}
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-6 ps-0">
                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid mb-2">
            </div>
            <div class="col-12 col-md-6">
                <h2 class="text-capitalize fw-bold"> {{$article->subtitle}} </h2>
                <p class="fs-5"> {{$article->body}} </p>
            </div>
            <hr class="mt-2">
            <div class="text-center">
                <div class="my-1 text-muted fst-italic">
                    <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}} </p>
                </div>
            </div>
            
            
            
            
            
            <div class="text-center"> 
                @if(str_contains(url()->previous(),"user"))
                <a href="{{route('article.byUser', ['user'=>$article->user])}}" class="btn btn-info text-white my-5">Torna indietro</a>
                @elseif(str_contains(url()->previous(),"category"))
                <a href="{{route('article.byCategory', ['category'=>$article->category])}}" class="btn btn-info text-white my-5">Torna indietro</a>
                @else
                <a href="{{route('homepage')}}" class="btn button-30 btn-secondary">Torna indietro</a>
                @endif
            </div>
            <div class="d-flex justify-content-between">
                @if (Auth::user() && Auth::user()->is_revisor)
                <form action="{{route('revisor.acceptArticle', compact('article'))}}" method="POST" >
                    @csrf
                    <button class="btn btn-success button-30">Accetta Articolo</button>
                </form>
                <form action="{{route('revisor.rejectArticle', compact('article'))}}" method="POST" >
                    @csrf
                    <button class="btn btn-danger button-30">Rifiuta articolo</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>

</x-layout>