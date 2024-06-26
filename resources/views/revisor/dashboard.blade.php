<x-layout>
    <div class="container h1-img mt-1">
        <div class="row justify-content-center text-center py-5">
            <h1 class="display-5 fw-bold secondaryFont">
                Bentornato Revisore!
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-center">
            <div class="col-12 shadow">
                <h2>Articoli da revisionare</h2>
                <x-articles-table :articles="$unrevisionedArticles" />
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-center">
            <div class="col-12 shadow">
                <h2>Articoli pubblicati</h2>
                <x-articles-table :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-center">
            <div class="col-12 shadow">
                <h2>Articoli respinti</h2>
                <x-articles-table :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>



</x-layout>