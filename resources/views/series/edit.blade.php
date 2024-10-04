<x-layout titulo="Editar anime">
   <div class="card col-sm-4 mx-auto" style="background-color: #FF4500">
       <div class="card-head text-center mt-2">
           <h5>Editando anime: {{ $serie->name_serie }} - id {{ $serie->id }}</h5>
       </div>

       <div class="card-body col-sm-12">
           <form action="{{ route('series.update', $serie->id) }}" method="post">
               @csrf
               @method('PUT')
               <div class="input-group">
                   <label for="anime" class="input-group-text">Anime</label>
                   <input type="text" class="form-control" name="name_serie" id="anime" value="{{ $serie->name_serie }}">
               </div>
               <div class="row  mt-3">
                   <div class="col-sm-6">
                       <div class="input-group col-sm-2">
                           <label for="number_season" class="input-group-text">Temporadas</label>
                           <input type="number" class="form-control" id="number_season" name="number_season" value="{{ $serie->seasons }}">
                       </div>
                   </div>
                   <div class="col-sm-6">
                       <div class="input-group col-sm-2">
                           <label for="number_episodes" class="input-group-text">Episódios</label>
                           <input type="number" name="number_episodes" id="number_episodes" class="form-control" value="{{ $serie->total_episode }}">
                       </div>
                   </div>
               </div>
               <div class="modal-footer mt-3">
                   <a href="{{ route('series.index') }}" class="btn btn-danger">Voltar</a>
                   <button type="submit" class="btn btn-success" style="margin-left: 0.313rem">Atualizar</button>
               </div>
           </form>
       </div>
   </div>
</x-layout>
