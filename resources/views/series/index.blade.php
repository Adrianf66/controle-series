<x-layout titulo="Lista animes">

    <div class="col-sm-6 mx-auto">
        @isset($mensagemSucesso)
            <div class="alert alert-success my-3">
                {{ $mensagemSucesso }}
            </div>
        @endisset
    </div>
    <div class="card col-sm-6 mx-auto " style="background-color: #FF4500">
        <div class="card-body col-sm-12">
            <ul class="list-group">
                @foreach($series as $serie)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('seasons.index', $serie->id) }}">{{ $serie->name_serie }} - {{ $serie->seasons->count() }} temporadas</a>
                         <div class="row">
                            <div class="col-sm-6">
                                <a title="{{ $serie->id }}" class="btn btn-info btn-sm" href="{{ route('series.edit', $serie->id) }}">Editar</a>
                            </div>
                            <div class="col-sm-6">
                                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">x</button>
                                </form>
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
