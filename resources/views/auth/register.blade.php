<x-layout>

    <div class="container h1-img mt-1">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold secondaryFont">Registrati!</h1>
            </div>
        </div>
    </div>

    <div class="container vh-100">
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 form-box" action="{{route('register')}}" method="post">
                    @csrf

                    <div class="inputbox mb-3 pt-4">
                        <label for="username" class="form-label fs-5">Username</label>
                        <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                    </div>

                    <div class="inputbox mb-3 pt-3">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>

                    <div class="inputbox mb-3 pt-3">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input name="password" type="password" class="form-control" id="Password">
                    </div>

                    <div class="inputbox mb-3 pt-3">
                        <label for="password_confirmation" class="form-label fs-5"> Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn button-30 bg-secondary mt-2 py-3">Registrati</button>
                    <p class="small mt-3">Già registrato? <a href="{{route('login')}}">Clicca qui!</a></p>
                </form>

            </div>
        </div>
    </div>






</x-layout>
