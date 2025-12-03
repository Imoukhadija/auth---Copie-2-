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
        
         Ajouter une vehicules             
    </span>
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
                    <input type="date" name="registration_date" id="registration_date" class="form-control form-control-lg form-control-border" placeholder="Entrer Date de  registration" value="" required="">
                </div>
                
                                    <div class="form-group">
                    <label for="expiration_date" class="control-label">date d'expiration</label>
                    <input type="date" name="expiration_date" id="expiration_date" class="form-control form-control-lg form-control-border" placeholder="Entrer Date d'expiration" value="" required="">
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
