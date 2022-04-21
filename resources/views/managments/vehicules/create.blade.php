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
</svg> Ajouter une vehicules
                                </h3>
                                <form action="{{ route("vehicules.store") }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text" name="nom" id="nom"
                                            class="form-control"
                                            placeholder="Nom"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <select name="usage" class="form-control"   placeholder="Usage" >
                                             
                                            <option value="Tourisme">Tourisme</option>
                                            <option value="divers">divers</option>
                                             <option value="Commerce">Commerce</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="marque" class="form-control"   placeholder="marque" >
                                             
                                            <option value="Dacia"> Dacia </option>
                                            <option value="Renault"> Renault </option>

                                            <option value="Ford"> Ford </option>
                                            <option value="Volkswagen"> Volkswagen </option>
                                            <option value="Peugeot">  Peugeot </option>
                                            <option value="Hyundai"> Hyundai </option>
                                            <option value="Nissan"> Nissan </option>
                                            <option value="Fiat"> Fiat </option>
                                            <option value="Citroën"> Citroën </option>
                                            <option value="Toyota"> Toyota </option>
                                        </select>
                                    </div>
                                     <div class="form-group">
                                        <select name="catégorie" class="form-control"   placeholder="catégorie" >
                                             
                                            <option value="Tourisme">Tourisme</option>
                                            <option value="divers">divers</option>
                                             <option value="Commerce">Commerce</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="version" class="form-control"   placeholder="version" >
                                             
                                            <option value="dist">dist</option>
                                            <option value="essence">essence</option>
                                             <option value="moteur">moteur</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="typemine" id="typemine"
                                            class="form-control"
                                            placeholder="type mine"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="immatriculation" id="immatriculation"
                                            class="form-control"
                                            placeholder="immatriculation"
                                        >
                                    </div>
                                    <div class="form-group">
                    <label for="registration_date" class="control-label">date de registration</label>
                    <input type="date" name="registration_date" id="registration_date" class="form-control form-control-sm form-control-border" placeholder="Entrer Date de  registration" value="" required="">
                </div>
                
                                    <div class="form-group">
                    <label for="expiration_date" class="control-label">date d'expiration</label>
                    <input type="date" name="expiration_date" id="expiration_date" class="form-control form-control-sm form-control-border" placeholder="Entrer Date d'expiration" value="" required="">
                </div>
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="" selected disabled>
                                                Disponible
                                            </option>
                                            <option value="1">Oui</option>
                                            <option value="0">Non</option>
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
