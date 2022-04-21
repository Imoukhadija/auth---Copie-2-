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
</svg> Modifier la vehicule {{ $vehicule->nom }}
                                </h3>
                                <form action="{{ route("vehicules.update", $vehicule->titre2) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input
                                            type="text" name="nom" id="nom"
                                            class="form-control"
                                            placeholder="Nom"
                                            value="{{  $vehicule->nom }}"
                                        >
                                    </div>
                                       <div class="form-group">
                                        <select name="usage" class="form-control"   placeholder="Usage" >
                                               <option value=" {{ $vehicule->usage}}"> {{ $vehicule->usage}}</option>
                                            <option value="Tourisme">Tourisme</option>
                                            <option value="divers">divers</option>
                                             <option value="Commerce">Commerce</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="marque" class="form-control"   placeholder="marque" >
                                            
                                              <option value=" {{ $vehicule->marque}}">  {{ $vehicule->marque}} </option>
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
                                             <option value="{{ $vehicule->catégorie}}">{{ $vehicule->catégorie}}</option>
                                            <option value="Tourisme">Tourisme</option>
                                            <option value="divers">divers</option>
                                             <option value="Commerce">Commerce</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="version" class="form-control"   placeholder="version" >
                                            <option value="{{ $vehicule->version}}">{{ $vehicule->version}}</option>
                                              <option value="dist">dist</option>
                                            <option value="essence">essence</option>
                                             <option value="moteur">moteur</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="typemine" id="typemine"
                                            class="form-control" value="{{ $vehicule->typemine}}"
                                            placeholder="type mine" 
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="immatriculation" id="immatriculation"
                                            class="form-control" value="{{ $vehicule->immatriculation}}"
                                            placeholder="immatriculation"
                                        >
                                    </div>
                                    <div class="form-group">
                    <label for="registration_date" class="control-label">date de registration</label>
                    <input type="date" name="registration_date" id="registration_date" class="form-control form-control-sm form-control-border" placeholder="Entrer Date de  registration" value="{{ $vehicule->registration_date}}" required="">
                </div>
                
                                    <div class="form-group">
                    <label for="expiration_date" class="control-label">date d'expiration</label>
                    <input type="date" name="expiration_date" id="expiration_date" class="form-control form-control-sm form-control-border" placeholder="Entrer Date d'expiration" value="{{ $vehicule->expiration_date}}"required="">
                </div>
                                    <div class="form-group">
                                        <select name="status" class="form-control">
                                            <option value="" disabled>
                                                Disponible
                                            </option>
                                            <option {{ $vehicule->status === 1 ? "selected" : "" }} value="1">Oui</option>
                                            <option {{ $vehicule->status === 0 ? "selected" : "" }} value="0">Non</option>
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
