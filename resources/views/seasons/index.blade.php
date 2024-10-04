<x-layout titulo="Lista animes">
    <div class="card col-sm-6 mx-auto " style="background-color: #FF4500">
        <div class="card-body col-sm-12">
            <ul class="list-group">
                @foreach($serie->seasons as $season)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="">
                            <p>Temporada <strong>{{ $season->number_season }}</strong></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="btn btn-info btn-sm">{{ $season->episodes->count() }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-3" style="text-align: right">
                <a href="{{ route('series.create') }}" class="btn btn-primary text-right">Adicionar</a>
            </div>
        </div>
    </div>
</x-layout>
