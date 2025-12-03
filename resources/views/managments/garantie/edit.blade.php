@extends("addmin.base")


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-4 d-flex justify-content-center">
                                <h3 class="mb-0 text-center w-100">
                                    <span class="badge text-center px-3 py-2 d-inline-flex align-items-center"
                                          style="font-size: 0.95rem;
                                                 background: #8b5cf6;
                                                 color: #fff;
                                                 text-transform: uppercase;
                                                 letter-spacing: 0.08em;">
                                        Modifier la garantie {{ $garanty->titre }}
                                    </span>
                                </h3>
                            </div>

                            <div class="col-md-8 mx-auto">
                                <form action="{{ route("garanties.update",$garanty->titre2) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")

                                    <div class="form-group">
                                        <input
                                            type="text" name="titre" id="titre"
                                            class="form-control form-control-lg"
                                            placeholder="Titre"
                                            value="{{ $garanty->titre }}"
                                        >
                                    </div>

                                    <div class="form-group">
                                        <textarea
                                            name="description" id="description"
                                            rows="5"
                                            class="form-control form-control-lg"
                                            placeholder="Description"
                                        >{{ $garanty->description }}</textarea>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                DH
                                            </div>
                                        </div>
                                        <input type="number"
                                            name="prix"
                                            class="form-control form-control-lg"
                                            placeholder="Prix"
                                            value="{{ $garanty->prix }}"
                                        >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                .00
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3 text-center">
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
                                        <select name="categories_id" id="categories_id" class="form-control" style="height: 50px;">
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
