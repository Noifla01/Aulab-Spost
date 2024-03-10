<x-layout>
    
    <div class="container">
        <div class="row justify-content-center text-center bg-secondary py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold"> The Aulab Post </h1>
            </div>
        </div>
    </div>
    
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message')}}
        </div>
    @endif

</x-layout>