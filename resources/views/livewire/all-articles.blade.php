<div>
    <table class="table">

        
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azione</th>
            </tr>
        </thead>
        
        @forelse ($articles as $article)

            <tbody>

                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>
                        <button class="btn btn-danger"  wire:click="destroy({{$article->id}})">Cancella!</button>
                    </td>
                    <td>
                        <a href="{{route('edit', $article)}}">Modifica</a>
                    </td>
                </tr>

            </tbody>
            
        @empty

            <h4 class="text-center mb-5">Non ci sono articoli</h4>

        @endforelse

    </table>
</div>