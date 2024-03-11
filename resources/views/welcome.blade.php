<x-layout>
    
    <div class="container">
        <div class="row justify-content-center text-center bg-secondary py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold"> The Aulab sPost </h1>
            </div>
        </div>
    </div>
    
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card
            title="{{ $article->title}}"
            subtitle="{{ $article->subtitle}}"
            image="{{ $article->image}}"
            category="{{ $article->category->name}}"
            data="{{ $article->created_at->format('d/m/Y')}}"
            user="{{ $article->user->name}}"
            url="{{route('article.show', compact('article'))}}"
            urlCategory="{{route('article.byCategory', ['category'=> $article->category->id])}}"
            urlUser="{{route('article.byUser', ['user'=> $article->user->id])}}"
            />
            </div>
            
            @endforeach
        </div>
    </div>

</x-layout>