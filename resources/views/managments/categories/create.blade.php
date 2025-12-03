 @extends("addmin.base")


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <h3 class="mb-3" style="text-align: center;">
    <span class="badge px-3 py-2 d-inline-flex align-items-center"
          style="font-size: 0.95rem;
                 background: #8b5cf6;
                 color: #fff;
                 text-transform: uppercase;
                 letter-spacing: 0.08em;">
        
         Ajouter une catégorie             
    </span>
</h3>
                                
                                <form action="{{ route("categories.store") }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text" name="titre" id="titre"
                                            class="form-control"
                                            placeholder="Titre"
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
