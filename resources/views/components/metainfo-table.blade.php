<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col" class="text-center">Quantità articoli collegati</th>
            <th scope="col" class="d-flex justify-content-end pe-5">Aggiorna</th>
            <th scope="col" class="ps-4">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
            <tr>
                <th scope="row">{{ $metaInfo->id }}</th>
                <td>{{$metaInfo->name}}</td>
                <td> {{ count($metaInfo->articles)}} </td>
                @if ($metaType == 'tags')
                <td>
                    <form action="{{route('admin.editTag',['tag'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                        <button type="submit" class="btn button-30 bg-secondary">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteTag',['tag'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        
                        <button type="submit" class="btn button-30 bg-secondary">Cancella</button>
                    </form>
                </td>
                    @else 
                        <td>
                    <form action="{{route('admin.editCategory',['category'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline mx-5">
                        <button type="submit" class="btn button-30 bg-secondary ms-5">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteTag',['tag'=> $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        
                        <button type="submit" class="btn button-30 bg-secondary me-5">Cancella</button>
                    </form>
                </td>
                    
                @endif
            </tr>
        @endforeach
    </tbody>
</table>