@extends("addmin.base")
@section('title', 'CLIENTS')
@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="nom">nom et prenom </label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder=""
                    value="{{ $client->nom }}" disabled>
            </div>
            <div class="form-group">
                <label for="Nature">Nature</label>
                <input type="text" class="form-control" name="Nature" id="Nature" placeholder=" "
                    value="{{ $client->Nature }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="CIN_RC_IF">CIN_RC_IF</label>
                <input type="text" class="form-control" name="CIN_RC_IF" id="CIN_RC_IF" placeholder="  "
                    value="{{ $client->CIN_RC_IF }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="civilite">civilite</label>
                <input type="text" class="form-control" name="civilite" id="civilite" placeholder="  "
                    value="{{ $client->civilite }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="genre">genre</label>
                <input type="text" class="form-control" name="genre" id="genre" placeholder=" "
                    value="{{ $client->genre }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="Situation_familiale ">Situation familiale</label>
                <input type="text" class="form-control" name="Situation_familiale" id="Situation_familiale" placeholder=" "
                    value="{{ $client->Situation_familiale }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="Ville">Ville</label>
                <input type="text" class="form-control" name="Ville" id="Ville" placeholder=" "
                    value="{{ $client->Ville }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="code_postale">code postale </label>
                <input type="text" class="form-control" name="code_postale" id="code_postale" placeholder=" "
                    value="{{ $client->code_postale }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="telephone_fixe_mobile">telephone fixe</label>
                <input type="text" class="form-control" name="telephone_fixe_mobile" id="telephone_fixe_mobile" placeholder=" "
                    value="{{ $client->telephone_fixe_mobile }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="telephone_mobile">telephone mobile</label>
                <input type="text" class="form-control" name="telephone_mobile" id="telephone_mobile" placeholder=" "
                    value="{{ $client->telephone_mobile }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder=" "
                    value="{{ $client->email }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="lien_avec_le_souscripteur">lien avec le souscripteur</label>
                <input type="text" class="form-control" name="lien_avec_le_souscripteur" id="lien_avec_le_souscripteur" placeholder=" "
                    value="{{ $client->lien_avec_le_souscripteur }} " disabled>
            </div>
            
            <div class="form-group">
                <label for="CSP">CSP</label>
                <input type="text" class="form-control" name="CSP" id="CSP" placeholder=" "
                    value="{{ $client->CSP }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="numeropermi">numero de permis</label>
                <input type="text" class="form-control" name="numeropermi" id="numeropermi" placeholder=" "
                    value="{{ $client->numeropermi }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="datepermis">date de permis</label>
                <input type="text" class="form-control" name="datepermis" id="datepermis" placeholder=" "
                    value="{{ $client->datepermis }}" disabled>
            </div>
            
            <div class="form-group">
                <label for="address">address</label>
                <input type="text" class="form-control" name="address" id="address " placeholder=" "
                    value="{{ $client->address }}" disabled>
            </div>
            
           
        </div>
    </form>
@endsection
