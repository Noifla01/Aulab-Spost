<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <div class="col-6">
                <th scope="row">{{ $article->id}}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article->subtitle }}</td>
                <td>{{ $article->category->name ?? 'Non categorizzato' }}</td>
                <td>{{$article->created_at->format('d/m/Y')}}</td>
                <td>  
                </div>
                
                
                <div class="col-6">
                    <a href="{{route('article.show', compact('article'))}}" class="btn button-30 btn-success w-75">Leggi l'articolo</a>
                    <a href="{{route('article.edit', compact('article'))}}" class="btn button-30 btn-secondary w-75">Modifica l'articolo</a>
                    <form action="{{route('article.destroy', compact('article'))}}" method="POST" class="d-line">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger button-30 w-75">Elimina l'articolo</button>
                    </form>  
                </div>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>