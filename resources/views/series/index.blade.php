<x-layout titulo="Séries">

    <div class="card col-sm-6 mx-auto bg-secondary">
        <div class="card-body col-sm-12">
            <ul class="list-group">
                @foreach($series as $serie)
                    <li class="list-group-item">{{ $serie->name_serie }} - {{ $serie->total_episode }} episódios</li>
                @endforeach
            </ul>
            <div class="mt-3" style="text-align: right">
                <a href="{{route('series.create')}}" class="btn btn-primary text-right">Adicionar</a>
            </div>
        </div>
    </div>
</x-layout>
