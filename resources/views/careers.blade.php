<x-layout>
    <div class="container h1-img mt-1">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold secondaryFont"> Lavora con noi !</h1>
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="row justify-content-center align-items-center p-2">
        <div class="col-12 col-md-6">
            <h2 class="text-dark fs-1 fw-bold">Candidati come amministratore</h2>
            <p class="fs-5">
                Sei un individuo dinamico e appassionato, desideroso di fare la differenza nel mondo del giornalismo? Sei tu quello che ritiene che dietro ogni grande giornale ci sia una solida strategia di gestione? Se la risposta è sì, allora sei la persona che stiamo cercando!
            </p>
            <h2 class="text-dark fs-1 fw-bold">Candidati come revisore</h2>
            <p class="fs-5">
                Sei uno di quegli individui che leggono un articolo e non riescono a trattenersi dal correggere un errore ortografico o grammaticale? Ti ritrovi a scrutare attentamente le frasi, cercando sempre di migliorarle? Se la risposta è sì, allora potresti essere la persona che stiamo cercando!
            </p>
            <h2 class="text-dark fs-1 fw-bold">Candidati come redattore</h2>
            <p class="fs-5">Sei uno di quegli individui che non riescono a trattenere la voglia di condividere storie intriganti e informazioni interessanti con il mondo? Hai la passione per la scrittura e l'abilità di trasformare anche le notizie più comuni in racconti coinvolgenti? Se la risposta è sì, allora sei la persona che stiamo cercando!!</p>
        </div>
        <div class="col-12 col-md-6">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('careers.submit')}}" method="POST" class="p-5">
                @csrf
                <div class="mb-3">
                    <label for="role" class="text-dark fs-4 form-label">Per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3"> 
                    <label for="email" class="text-dark fs-4 form-label">Email</label>
                    <input type="email" name="email" class="text-dark fs-5 form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3"> 
                    <label for="message" class="text-dark fs-4 form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"> {{old('message')}} </textarea>

                </div>

                <div class="mt-3">
                    <button class="btn btn-success button-30">Invia la tua candidatura</button>
                </div>
                
            </form>
        </div>
    </div>

</div>





</x-layout>