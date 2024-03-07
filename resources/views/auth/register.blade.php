<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-1">Registrati!</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
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

                <form class="card p-5 shadow" action="{{route('register')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input name="name" type="text" class="form-control" id="username" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="Password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label"> Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>
                    <p class="small mt-2">Già registrato? <a href="{{route('login')}}">Clicca qui!</a></p>
                </form>

            </div>
        </div>
    </div>






</x-layout>
