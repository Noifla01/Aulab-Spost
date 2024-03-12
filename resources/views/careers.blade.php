<x-layout>
    <div class="container">
        <div class="row justify-content-center text-center bg-secondary py-5">
            <div class="col-12 col-md-6">
                <h1 class="display-5 fw-bold"> Lavora con noi !</h1>
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="row justify-content-center align-items-center border rounded p-2 shadow">
        <div class="col-12 col-md-6">
            <h2 class="text-danger">Lavora come amministratore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eligendi delectus ratione cum ullam vel vitae dolor voluptas voluptatibus dolorem quibusdam nulla, sint, veritatis non, enim eius asperiores? Quos, odit!</p>
            <h2 class="text-danger">Lavora come revisore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eligendi delectus ratione cum ullam vel vitae dolor voluptas voluptatibus dolorem quibusdam nulla, sint, veritatis non, enim eius asperiores? Quos, odit!</p>
            <h2 class="text-danger">Lavora come redattore</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eligendi delectus ratione cum ullam vel vitae dolor voluptas voluptatibus dolorem quibusdam nulla, sint, veritatis non, enim eius asperiores? Quos, odit!</p>
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
                    <label for="role" class="text-danger form-label">Per quale ruoto ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">Scegli qui</option>
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Redattore</option>
                    </select>
                </div>
                <div class="mb-3"> 
                    <label for="email" class="text-danger form-label">Email</label>
                    <input type="email" name="email" class="text-danger form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                </div>
                <div class="mb-3"> 
                    <label for="message" class="text-danger form-label">Parlaci di te</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"> {{old('message')}} </textarea>

                </div>

                <div class="mt-3">
                    <button class="btn btn-success text-white">Invia la tua candidatura</button>
                </div>
                
            </form>
        </div>
    </div>

</div>





</x-layout>