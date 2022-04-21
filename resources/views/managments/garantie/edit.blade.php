@extends("admin.base")


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
</svg>Modifier le garantie {{ $garanty->titre }}
                                </h3>
                                <form action="{{ route("garanties.update",$garanty->titre2) }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input
                                            type="text" name="titre" id="titre"
                                            class="form-control"
                                            placeholder="Titre"
                                            value="{{ $garanty->titre }}"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                            name="description" id="description"
                                            rows="5"
                                            cols="30"
                                            class="form-control"
                                            placeholder="Description"
                                        >{{  $garanty->description }}</textarea>
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
                                            value="{{ $garanty->prix }}"
                                        >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                .00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-2">
                                        <img src="{{ asset("images/garantie/".$garanty->image) }}"
                                            width="200"
                                            height="200"
                                            class="img-fluid"
                                            alt="{{ $garanty->titre }}">
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
                                                <option
                                                    {{ $category->id === $garanty->category->id ? "selected" : ""}}
                                                    value="{{ $category->id }}">
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
