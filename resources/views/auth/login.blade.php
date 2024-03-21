<x-layout>

    <div class="container h1-img mt-1">
        <div class="row justify-content-center text-center py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold secondaryFont">Accedi!</h1>
            </div>
        </div>
    </div>

    <div class="container vh-100 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 mt-5 ">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card px-5 form-box" action="{{route('login')}}" method="post">
                    @csrf

                    <div class="mb-3 pb-4 inputbox">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3 pb-4 inputbox">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input name="password" type="password" class="form-control" id="Password">
                    </div>

                    <button type="submit" class="btn button-30 bg-secondary">Accedi</button>
                    <p class="small mt-3">Non sei registrato?<a href="{{route('register')}}">Clicca qui!</a></p>
                </form>

            </div>
        </div>
    </div>






</x-layout>
