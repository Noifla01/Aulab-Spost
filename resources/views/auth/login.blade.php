<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="display-1">Accedi!</h1>
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
                        <input type="name" class="form-control" id="username" value="{{old('name')}}">
                        
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>

            </div>
        </div>
    </div>






</x-layout>