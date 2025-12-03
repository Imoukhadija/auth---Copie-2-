@extends("addmin.base")


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-8">
                                <h3 class="mb-3" style="text-align: center;">
    <span class="badge px-3 py-2 d-inline-flex align-items-center"
          style="font-size: 0.95rem;
                 background: #8b5cf6;
                 color: #fff;
                 text-transform: uppercase;
                 letter-spacing: 0.08em;">
        
         Ajouter un garantie             
    </span>
</h3>
                                <form action="{{ route("garanties.store") }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text" name="titre" id="titre"
                                            class="form-control"
                                            placeholder="Titre"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                            name="description" id="description"
                                            rows="5"
                                            cols="30"
                                            class="form-control"
                                            placeholder="Description"
                                        ></textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                               DH
                                            </div>
                                        </div>
                                        <input type="number"
                                            name="prix"
                                            class="form-control"
                                            placeholder="Prix"
                                        >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                .00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Image
                                            </span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"
                                                name="image"
                                                class="custom-file-input"
                                            >
                                            <label class="custom-file-label">
                                                2mg max
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="categories_id" id="categories_id" class="form-control">
                                            <option value="" selected disabled>Choisir une catégorie</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->titre }}
                                                </option>
                                            @endforeach
                                        </select>
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
