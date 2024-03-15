<div class="container  my-3">
    <div class="row ">
        <div class="card px-0 cardBody">
            <img src="{{ Storage::url($image) }}" alt="" class="card-image cardBody">
            <div class="card-body">
                <h5 class="card-title primaryFont text-capitalize">{{ $title }}</h5>
                <p class="card-text primaryFont text-capitalize"> {{ $subtitle }}</p>
                <a href="{{$urlCategory}}" class="small text-muted text-capitalize d-flex justify-content-center align-items-center"> {{$category}} </a>
                @if ($tags)
            <p class="small fst-italic text-small-capitalize">
                @foreach ($tags as $tag)
                    # {{ $tag->name }}
                @endforeach
            </p>
        @endif
        
    </div>
            
            <div class="card-footer px-0 ps-2 text-muted d-flex justify-content-around align-items-center"> Redatto il {{$data}} da <a class="text-muted text-capitalize" href="{{$urlUser}}">{{$user}}</a>
                <a href="{{$url}}" class="btn card-btn text-secondary">Leggi</a>
            </div>
        </div>
        
    </div>
</div>