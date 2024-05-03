<x-layout titulo="Novo Anime">
    <div class="card col-sm-4 mx-auto">
        <div class="card-body col-sm-12 mx-auto">
            <form method="post" action="{{ route('series.store') }}">
                @csrf
                <div class="input-group">
                    <label class="input-group-text" for="name_serie">Nome:</label>
                    <input type="text" id="name_serie" name="name_serie" class="form-control">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mt-3 col-sm-2">
                            <label for="episodes" class="input-group-text">Episódios</label>
                            <input type="number" id="episodes" name="total_episode" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mt-3 col-sm-2">
                            <label for="temporadas" class="input-group-text">Temporadas</label>
                            <input type="number" id="temporadas" name="temporadas" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-3" style="text-align: right">
                    <a href="{{route('series.index')}}" class="btn btn-danger">Voltar</a>
                    <button type="submit" class="btn btn-success">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
