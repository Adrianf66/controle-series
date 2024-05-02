<x-layout titulo="Nova Série">
    <div class="card col-sm-4 mx-auto">
        <div class="card-body col-sm-12 mx-auto">
            <form method="post" action="{{ route('series.store') }}">
                @csrf
                <div class="input-group">
                    <label class="input-group-text" for="name-serie">Nome:</label>
                    <input type="text" id="name-serie" name="name-serie" class="form-control">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group mt-3 col-sm-2">
                            <label for="total-episode" class="input-group-text">Episódios</label>
                            <input type="number" id="total-episode" name="total-episode" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mt-3 col-sm-2">
                            <label for="total-temporadas" class="input-group-text">Temporadas</label>
                            <input type="number" id="total-temporadas" name="total-temporadas" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mt-3" style="text-align: right">
                    <button type="submit" class="btn btn-success">
                        Salvar
                    </button>
                    <a href="{{route('series.index')}}" class="btn btn-danger">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
