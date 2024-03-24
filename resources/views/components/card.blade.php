<div class="container my-3">
    <div class="row justify-content-center">
        <div class="card mb-3 cardBody px-0 bgcard">
            <img src="{{ Storage::url($image) }}" alt="" class="card-img">
            <div class="card-body">
                <h5 class="card-title primaryFont text-capitalize d-flex justify-content-center">{{ $title }}</h5>
                <p class="card-text primaryFont text-capitalize overflow-hidden"> {{ $subtitle }}</p>
                @if($category)
                    <span>
                        <a href="{{$urlCategory}}" class="small text-muted d-flex justify-content-center align-items-center"> {{$category}}</a>
                    </span>
                        
                    
                @else
                    <p class="small text-muted fst-italic text-capitalize">
                        Non categorizzato
                    </p>
                @endif
                
                <span class="text-muted small fst-italic">Tempo di lettura {{$readDuration}} min</span>

                @if ($tags)
                    <p class="fst-italic text-small-capitalize d-flex justify-content-center mt-2">
                        @foreach ($tags as $tag)
                            # {{ $tag->name }}
                        @endforeach
                    </p>
                @endif
        
            </div>
            
            <div class="card-footer px-0 ps-2 text-muted d-flex justify-content-around align-items-center"> Redatto il {{$data}} da <a class="text-muted text-capitalize" href="{{$urlUser}}">{{$user}}</a>
                <a href="{{$url}}" class="button-30 text-mywhite">Leggi</a>
            </div>
        </div>
        
    </div>
</div>