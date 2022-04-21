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
</svg> Ajouter un client
                                </h3>
                                <form action="{{ route("clients.store") }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text" name="nom" id="nom"
                                            class="form-control"
                                            placeholder="Nom & Prénom"
                                        >
                                    </div>
                                    <div class="form-group">
            <label for="Nature">Nature</label> <br>
            <select name="Nature" id="Nature" class="form-control form-control-sm form-control-border" required="">
                        <option value="personne physique  ">personne physique  </option>
                        <option value="personne morale  ">personne morale  </option>
                       
                     
                    </select>
            
            </div>
                <div class="form-group">
                    <label for="CIN_RC_IF" class="control-label">CIN/RC/IF</label>
                    <input type="text" name="CIN_RC_IF" id="CIN_RC_IF" class="form-control form-control-sm form-control-border" placeholder="Enter CIN/RC/IF" value="" required="">
                </div>
                <div class="form-group">
            <label for="civilite">civilite</label> <br>
            <select name="civilite" id="civilite" class="form-control form-control-sm form-control-border" required="">
                        <option value="Mademoiselle ">Mademoiselle </option>
                        <option value="Madame ">Madame </option>
                        <option value="Monsieur ">Monsieur </option>
                        
                     
                    </select>
            
            </div>
               
                <div class="form-group">
                    <label for="date_naissance" class="control-label">Date de naissance </label>
                    <input type="date" name="date_naissance" id="date_naissance" class="form-control form-control-sm form-control-border" placeholder="Enterer date de naissance" value="" required="">
                </div> 
                <div class="form-group">
                <label for="email">Genre </label>
                <input type="radio" name="genre" value="homme"> Homme 
                <input type="radio" name="genre" value="femme"> Femme<br>
                   </div>
                   <div class="form-group">
            <label for="Situation_familiale">Situation familiale</label> <br>
            <select name="Situation_familiale" id="Situation_familiale" class="form-control form-control-sm form-control-border" required="">
                        <option value="célibataire ">célibataire </option>
                        <option value="marié ">marié </option>
                        <option value="divorcé ">divorcé </option>
                        <option value="veuf ">veuf</option>
                     
                    </select>
           
            </div>
           
                <div class="form-group">
                <select name="Ville" id="Ville" for="Ville"   class="form-control form-control-sm form-control-border" required="" >
                    <option value="">Toutes les villes</option>
                                            <option value="AGADIR">AGADIR</option>
                                            <option value="AïnElAouda">AïnElAouda</option>
                                            <option value="AïtMelloul">AïtMelloul</option>
                                            <option value="ALHOCEIMA">ALHOCEIMA</option>
                                            <option value="ASILAH">ASILAH</option>
                                            <option value="AZILAL">AZILAL</option>
                                            <option value="AZROU">AZROU</option>
                                            <option value="BENAHMED">BENAHMED</option>
                                            <option value="BENGUERIR">BENGUERIR</option>
                                            <option value="BENIMELLAL">BENIMELLAL</option>
                                            <option value="BENSLIMANE">BENSLIMANE</option>
                                            <option value="BERKANE">BERKANE</option>
                                            <option value="BERRECHID">BERRECHID</option>
                                            <option value="BirJ\'Did">BirJ\'Did</option>
                                            <option value="BOUARFA">BOUARFA</option>
                                            <option value="BOUJAAD">BOUJAAD</option>
                                            <option value="Boujad">Boujad</option>
                                            <option value="BOULMANE">BOULMANE</option>
                                            <option value="Bouznika">Bouznika</option>
                                            <option value="CASABLANCA">CASABLANCA</option>
                                            <option value="CHEFCHAOUEN">CHEFCHAOUEN</option>
                                            <option value="Chichaoua">Chichaoua</option>
                                            <option value="DAKHLA">DAKHLA</option>
                                            <option value="DarBouazza">DarBouazza</option>
                                            <option value="Dcheira">Dcheira</option>
                                            <option value="ELJADIDA">ELJADIDA</option>
                                            <option value="ElKelaâdesSraghna">ElKelaâdesSraghna</option>
                                            <option value="ERRACHIDIA">ERRACHIDIA</option>
                                            <option value="ES-SMARA">ES-SMARA</option>
                                            <option value="ESSAOUIRA">ESSAOUIRA</option>
                                            <option value="ESSMARA">ESSMARA</option>
                                            <option value="FES">FES</option>
                                            <option value="FkihBenSalah">FkihBenSalah</option>
                                            <option value="FKIHBENSALEH">FKIHBENSALEH</option>
                                            <option value="FKIHBENSALLAH">FKIHBENSALLAH</option>
                                            <option value="GUELMIM">GUELMIM</option>
                                            <option value="GUERCIF">GUERCIF</option>
                                            <option value="Ifrane">Ifrane</option>
                                            <option value="IMINTANOUTE">IMINTANOUTE</option>
                                            <option value="Inezgane">Inezgane</option>
                                            <option value="INZEGANE">INZEGANE</option>
                                            <option value="KALAA-SRAGHNA">KALAA-SRAGHNA</option>
                                            <option value="KASBATADLA">KASBATADLA</option>
                                            <option value="KELAASRAGHNA">KELAASRAGHNA</option>
                                            <option value="KENITRA">KENITRA</option>
                                            <option value="KHEMISSET">KHEMISSET</option>
                                            <option value="KHENIFRA">KHENIFRA</option>
                                            <option value="KHOURIBGA">KHOURIBGA</option>
                                            <option value="KsarElKébir">KsarElKébir</option>
                                            <option value="KSARKEBIR">KSARKEBIR</option>
                                            <option value="LAAYOUNE">LAAYOUNE</option>
                                            <option value="LARACHE">LARACHE</option>
                                            <option value="MARRAKECH">MARRAKECH</option>
                                            <option value="MEKNES">MEKNES</option>
                                            <option value="MIDELT">MIDELT</option>
                                            <option value="MISSOUR">MISSOUR</option>
                                            <option value="MOHAMEDIA">MOHAMEDIA</option>
                                            <option value="MOHAMMEDIA">MOHAMMEDIA</option>
                                            <option value="NADOR">NADOR</option>
                                            <option value="Nouasseur">Nouasseur</option>
                                            <option value="OUARZAZATE">OUARZAZATE</option>
                                            <option value="OUAZZANE">OUAZZANE</option>
                                            <option value="OUEDEDDAHAB(DAKHLA)">OUEDEDDAHAB(DAKHLA)</option>
                                            <option value="OUEDZEM">OUEDZEM</option>
                                            <option value="OUJDA">OUJDA</option>
                                            <option value="RABAT">RABAT</option>
                                            <option value="ROMANI">ROMANI</option>
                                            <option value="ROMMANI">ROMMANI</option>
                                            <option value="SAFI">SAFI</option>
                                            <option value="SALE">SALE</option>
                                            <option value="SEFROU">SEFROU</option>
                                            <option value="Selouane">Selouane</option>
                                            <option value="SETTAT">SETTAT</option>
                                            <option value="SIDIBENNOUR">SIDIBENNOUR</option>
                                            <option value="SIDIKACEM">SIDIKACEM</option>
                                            <option value="SIDISLIMANE">SIDISLIMANE</option>
                                            <option value="Skhirate">Skhirate</option>
                                            <option value="SOUKLARBAA">SOUKLARBAA</option>
                                            <option value="Tameslohte">Tameslohte</option>
                                            <option value="TANGER">TANGER</option>
                                            <option value="TANTAN">TANTAN</option>
                                            <option value="TAOUNAT">TAOUNAT</option>
                                            <option value="TAOUNATE">TAOUNATE</option>
                                            <option value="TAOURIRT">TAOURIRT</option>
                                            <option value="TAROUDANT">TAROUDANT</option>
                                            <option value="TAROUDANTE">TAROUDANTE</option>
                                            <option value="TATA">TATA</option>
                                            <option value="TAZA">TAZA</option>
                                            <option value="TEMARA">TEMARA</option>
                                            <option value="TETOUAN">TETOUAN</option>
                                            <option value="Tikiouine">Tikiouine</option>
                                            <option value="TitMellil">TitMellil</option>
                                            <option value="TIZNIT">TIZNIT</option>
                                            <option value="Tiztoutine">Tiztoutine</option>
                                            <option value="YOUSSOUFIA">YOUSSOUFIA</option>
                                            <option value="ZAGORA">ZAGORA</option>
                                        
                </select>
            </div>
            <div class="form-group">
                    <label for="code_postale" class="control-label">code_postale </label>
                    <input type="number" name="code_postale" id="code_postale" class="form-control form-control-sm form-control-border" placeholder="Enter code_postale #" value="" required="">
                </div>
               
               
            <div class="form-group">
                    <label for="telephone_fixe_mobile" class="control-label">telephone fixe  </label>
                    <div class="input-group">
                    
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text"  name="telephone_fixe_mobile" class="form-control" data-inputmask="&quot;mask&quot;: &quot;09-99-99-99-99&quot;" data-mask="" inputmode="text" placeholder="__-__-__-__-__">
                  </div>
                
                </div>
                <div class="form-group">
                    <label for="telephone_mobile" class="control-label">telephone mobile</label>
                    <div class="input-group">
                    
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text"  name="telephone_mobile" class="form-control" data-inputmask="&quot;mask&quot;: &quot;09-99-99-99-99&quot;" data-mask="" inputmode="text" placeholder="__-__-__-__-__">
                  </div>
                </div>
           
             
           
            
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control form-control-sm form-control-border" placeholder="Enter Email" value="" required="">
                </div>
               
                <div class="form-group">
                    <label for="lien_avec_le_souscripteur" class="control-label">lien avec le souscripteur</label>
                      <select name="lien_avec_le_souscripteur" id="lien_avec_le_souscripteur" class="form-control form-control-sm form-control-border" required="">
                        <option value="Oui ">Oui </option>
                        <option value="Non ">Non </option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="CSP" class="control-label">CSP</label>
                    <input type="text" name="CSP" id="CSP" class="form-control form-control-sm form-control-border" placeholder="Entrer CSP" value="" required="">
                </div>
                <div class="form-group">
                    <label for="numeropermi" class="control-label">numero de permi</label>
                    <input type="text" name="numeropermi" id="numeropermi" class="form-control form-control-sm form-control-border" placeholder="Entrer CSP" value="" required="">
                </div>
                <div class="form-group">
                    <label for="datepermis" class="control-label">Date de permis</label>
                    <input type="date" name="datepermis" id="datepermis" class="form-control form-control-sm form-control-border" placeholder="Entrer Date de permis" value="" required="">
                </div>
                <div class="form-group">
                    <label for="categoriepermi" class="control-label">categorie permi</label>
                    <select name="categoriepermi" id="categoriepermi" class="form-control form-control-sm form-control-border" required="">
                        <option value="B ">B </option>
                        <option value="EB ">EB </option>
                        <option value="C ">C </option>
                        <option value="EC ">EC</option>
                        <option value="D ">D </option>
                        <option value="ED">ED</option>
                    </select>
                </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="address" id="address"
                                            class="form-control"
                                            placeholder="Addresse"
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
