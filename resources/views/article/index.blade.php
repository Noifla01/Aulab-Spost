<x-layout>
    
    <div class="container h1-img mt-2">
        <div class="row justify-content-center text-center  py-5 ">
            <div class="col-12 col-md-6 ">
                <h1 class="display-5 fw-bold secondaryFont"> Tutti gli articoli </h1>
            </div>
        </div>
    </div>
    


    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
            <x-card
            :tags="$article->tags"
            title="{{ $article->title}}"
            subtitle="{{ $article->subtitle}}"
            image="{{ $article->image}}"
            category="{{ $article->category->name}}"
            data="{{ $article->created_at->format('d/m/Y')}}"
            user="{{ $article->user->name}}"
            url="{{route('article.show', compact('article'))}}"
            urlCategory="{{route('article.byCategory', ['category'=> $article->category->id])}}"  
            urlUser="{{route('article.byUser', ['user'=> $article->user->id])}}"
            readDuration="{{ $article->readDuration()}}"
            />
            </div>
            
            @endforeach
        </div>
    </div>

</x-layout>