@extends("addmin.base")
@section('title', 'vehicule')
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="nom">nom </label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder=""
                    value="{{ $vehicule->nom }}" disabled>
            </div>
            <div class="form-group">
                <label for="usage">usage</label>
                <input type="text" class="form-control" name="usage" id="usage" placeholder=" "
                    value="{{ $vehicule->usage }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="marque">marque</label>
                <input type="text" class="form-control" name="marque" id="marque" placeholder="  "
                    value="{{ $vehicule->marque }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="catégorie">catégorie</label>
                <input type="text" class="form-control" name="catégorie" id="catégorie" placeholder="  "
                    value="{{ $vehicule->catégorie }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="version">version</label>
                <input type="text" class="form-control" name="version" id="version" placeholder=" "
                    value="{{ $vehicule->version }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="typemine ">typemine</label>
                <input type="text" class="form-control" name="typemine" id="typemine" placeholder=" "
                    value="{{ $vehicule->typemine }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="immatriculation">immatriculation</label>
                <input type="text" class="form-control" name="immatriculation" id="immatriculation" placeholder=" "
                    value="{{ $vehicule->immatriculation }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="registration_date">code postale </label>
                <input type="text" class="form-control" name="registration_date" id="registration_date" placeholder=" "
                    value="{{ $vehicule->registration_date }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="expiration_date">expiration date</label>
                <input type="text" class="form-control" name="expiration_date" id="expiration_date" placeholder=" "
                    value="{{ $vehicule->expiration_date }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="status">status</label>
                <input type="text" class="form-control" name="status" id="status" placeholder=" "
                    value="{{ $vehicule->status }}" disabled>
            </div>
            
           
        </div>
    </form>
@endsection
