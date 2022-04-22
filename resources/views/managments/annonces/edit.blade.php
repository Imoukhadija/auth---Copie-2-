@extends("addmin.base")


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-8">
                                <h3 class="text-secondary border-bottom mb-3 p-2">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>Modifier le annonce {{ $annonce->actor }}
                                </h3>
                                <form action="{{ route("annonces.update",$annonce->actor2) }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input
                                            type="text" name="actor" id="actor"
                                            class="form-control"
                                            placeholder="actor"
                                            value="{{ $annonce->actor }}"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                            name="anonce" id="anonce"
                                            rows="5"
                                            cols="30"
                                            class="form-control"
                                            placeholder="anonce"
                                        >{{  $annonce->anonce }}</textarea>
                                    </div>
                                 
                                  
                                    <div class="form-group">
                                        <input
                                            type="date" name="dates" id="dates"
                                            class="form-control"
                                            placeholder="dates"
                                            value="{{ $annonce->dates }}"
                                        >
                                    </div>
                                       
                                    
                                    <div class="form-group">
                                        <button class="btn btn-primary">
                                            Valider
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
