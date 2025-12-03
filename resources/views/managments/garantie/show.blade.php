@extends("addmin.base")
@section('title', 'garanties')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="mb-0 text-secondary text-uppercase" style="letter-spacing:.08em; font-size:1rem;">
                                Détail de la garantie
                            </h3>
                        </div>

                        <div class="text-center mb-4">
                            <img
                                src="{{ asset('images/garantie/'. $garanty->image) }}"
                                alt="{{ $garanty->titre }}"
                                class="img-fluid rounded-circle shadow"
                                style="width: 220px; height: 220px; object-fit: cover;"
                            >
                        </div>

                        <form>
                            <div class="form-group">
                                <label for="titre">Titre</label>
                                <input type="text" class="form-control form-control-lg" name="titre" id="titre" placeholder="Enter titre"
                                    value="{{ $garanty->titre }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DH</span>
                                    </div>
                                    <input type="number" class="form-control form-control-lg" name="prix" id="prix" placeholder="Enter prix"
                                        value="{{ $garanty->prix }}" disabled>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="categorie">Catégorie</label>
                                <input type="text" class="form-control form-control-lg" name="categorie" id="categorie" placeholder="Catégorie"
                                    value="{{ $garanty->category->titre }}" disabled>
                            </div>

                            <div class="form-group mb-0">
                                <label for="description">Description</label>
                                <textarea class="form-control form-control-lg" name="description" id="description" rows="4" disabled>{{ substr($garanty->description,0,100) }}</textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
