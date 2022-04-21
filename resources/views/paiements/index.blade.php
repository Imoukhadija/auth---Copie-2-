@extends("admin.base")


@section("content")
    <div class="container">
        <form id="add-vente" action="{{ route("ventes.store") }}" method="post">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <!-- retournea la page home-->
                                <a href="/home" class="btn btn-outline-secondary">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="my-2 col-md-3">
                        <!--data maintenant-->
                            <h3 class="text-muted border-bottom">
                                {{ Carbon\Carbon::now() }}
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <a href="{{ route("ventes.index") }}" class="btn btn-outline-secondary float-right">
                                    Toutes les ventes
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style=".col-md-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 50%;
}">
                        <div class="card-body">
                            <div class="row">
                            
                                @foreach ($vehicules as $vehicule)
                                    <div class="col-md-3" style="max-width: 50%;">
                                        <div class="card p-2 mb-2 d-flex
                                                    flex-column justify-content-center
                                                    align-items-center
                                                    list-group-item-action">
                                            <div class="align-self-end">
                                                <input type="checkbox" name="vehicule_id[]"
                                                    id="vehicule"
                                                    value="{{ $vehicule->id }}"
                                                >
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="60" height="60" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"/></svg>
                                            <span class="mt-2 text-muted font-weight-bold">
                                                {{ $vehicule->nom }}
                                            </span>
                                            <div class="d-flex
                                                    flex-column justify-content-between
                                                    align-items-center">
                                                <a href="{{ route("vehicules.edit",$vehicule->titre2) }}" class="btn btn-sm btn-warning">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
</svg>
                                                </a>
                                            </div>
                                            <hr>
                                            @foreach ($vehicule->ventes as $vente)
                                                @if ($vente->created_at >= Carbon\Carbon::today())
                                                    <div style="border : dashed black" class="mb-2 mt-2 shadow w-100" id="{{ $vente->id }}">
                                                        <div class="card">
                                                            <div class="card-body d-flex
                                                                    flex-column justify-content-center
                                                                    align-items-center">
                    </div>
                                                                    <div class="card"> <h1  style="text-aligne:center">SAHAM ASSURANCE BAHMOU<h1></div>
                    <div class="card-body">
                        <h3 class="card-title">   Nom et prénom  : {{ $vente->client->nom }}</h5>
                        <p class="card-text"></p>
                     
                    </div>
                   
                </div>
                <div class="card bg-primary text-light">
                    <div class="card-body" style="text-aligh:center;">
                        <h3 class="card-title ">Liste des garanties</h5>
                        <p class="card-text">
                         @foreach ($vente->garanties()->where("ventes_id",$vente->id)->get() as $garanty)
                                                                    <h5 class="font-weight-bold mt-2 text-dark" style="font-size:30px">
                                                                        {{ $garanty->titre }}
                                                                    </h5>
                                                                    <span class="text-light">
                                                                        {{ $garanty->prix }} DH
                                                                    </span>
                                                                @endforeach</p>
                    </div>
                </div>
                <div class="card">
                   
                </div>
                <div class="card bg-warning">
                    <div class="card-header">Les fraits</div>
                    <div class="card-body">
                        <h3 class="card-title"></h5>
                        <p class="card-text"> franchaise : {{ $vente->quantite }}.</p>
                         <div class="cafer"> Prix : {{ $vente->prix_total }} DH</div>
                          <div class="cader"> Total : {{ $vente->total_recu }} DH </div>
                    <div class="boy">  Reste : {{ $vente->change }} DH</div>
                    </div>
                    <h5 class="font-weight-bold mt-2">
                                                                    <span class="badge badge-light">
                                                                        Type de paiement :
                                                                        {{ $vente->paiement_type === "cash" ?
                                                                             "Espéce" : "Carte bancaire" }}
                                                                    </span>
                                                                </h5>
                                                                <h5 class="font-weight-bold mt-2">
                                                                    <span class="badge badge-light">
                                                                        Etat de paiement :
                                                                        {{ $vente->paiement_status === "paid" ?
                                                                             "Payé" : "Impayé" }}
                                                                    </span>
                                                                </h5>
                </div>
                
                <div class="card">
                  
                </div>
                <div class="card">
                    <img style="
  width: 400px;
  height: 300px;
  display: block;
  margin-left: auto;
  margin-right: auto;
border-radius: 20%;"src="images/bg-4.png" s="slide-items">
				
                   
                </div>
               
                                                               
                                                           
                                                                <hr>
                                                                <div class="d-flex
                                                                    flex-column justify-content-center
                                                                    align-items-center">
                                                                    <span class="font-weight-bold">
                                                                       Assurance Bahmou Groupe Fikri
                                                                    </span>
                                                                    <span style="text-align:center">
                                                                       n°4, bloc C - Amicale des fonctionaires 85000 Tiznit
                                                                    </span>
                                                                    <span>
                                                                       assurances.bahmou@sahamassurance.com
                                                                    </span>
                                                                    <span>
                                                                       05286-00303
                                                                    </span>
                                                                    <br>
                                                                     <div class="mt-2 d-flex justify-content-center">
                                                       
                                                        <a href="#" target="_blank" class="btn btn-sm btn-primary"
                                                            onclick="print({{ $vente->id }})"
                                                            >
                                                            <i class="fas fa-print"></i>
                                                        </a>
                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                   
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
          
            <div class="row justify-content-center mt-2">
                <div class="col-md-12 card p-3">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a href="#{{ $category->titre2 }}"
                                    class="nav-link mr-1 {{ $category->titre2 === "salades-marocaines" ? "active" : "" }}"
                                    id="{{ $category->titre2 }}-tab"
                                    data-toggle="pill"
                                    role="tab"
                                    aria-controls="{{ $category->titre2 }}"
                                    aria-selected="true"
                                >
                                    {{ $category->titre }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="pills-tabcontent">
                        @foreach ($categories as $category)
                            <div class="tab-pane fade {{ $category->titre2 === "salades-marocaines" ? "show active" : "" }}"
                                id="{{ $category->titre2 }}"
                                role="tabpanel"
                                aria-labelledby="pills-home-tab"
                                >
                                <div class="row">
                                    @foreach($category->garanties as $garanty)
                                        <div class="col-md-4 mb-2">
                                            <div class="card h-100">
                                                <div class="card-body d-flex
                                                flex-column justify-content-center
                                                align-items-center">
                                                    <div class="align-self-end">
                                                        <input type="checkbox" name="garantie_id[]"
                                                            id="garantie_id"
                                                            value="{{ $garanty->id }}"
                                                        >
                                                    </div>
                                                    <img
                                                        src="{{ asset("images/garantie/". $garanty->image) }}" alt="{{ $garanty->titre}}"
                                                        class="img-fluid rounded-circle"
                                                        width="100"
                                                        height="100"
                                                    >
                                                    <h5 class="font-weight-bold mt-2">
                                                        {{ $garanty->titre }}
                                                    </h5>
                                                    <h5 class="text-muted">
                                                        {{ $garanty->prix }} DH
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <select name="client_id" class="form-control">
                                    <option value="" selected disabled>
                                        Client
                                    </option>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">
                                            {{ $client->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        Total de franchaise 
                                    </div>
                                </div>
                                <input type="number"
                                    name="quantite"
                                    class="form-control"
                                    placeholder="Total de franchaise "
                                >
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        DH
                                    </div>
                                </div>
                                <input type="number"
                                    name="prix_total"
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
                                    <div class="input-group-text">
                                        DH
                                    </div>
                                </div>
                                <input type="number"
                                    name="total_recu"
                                    class="form-control"
                                    placeholder="Total"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        DH
                                    </div>
                                </div>
                                <input type="number"
                                    name="change"
                                    class="form-control"
                                    placeholder="Reste"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="paiement_type" class="form-control">
                                    <option value="" selected disabled>
                                        Type de paiement
                                    </option>
                                    <option value="cash">
                                        Espéce
                                    </option>
                                   

                                    <option value="card">
                                        Carte bancaire
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="paiement_status" class="form-control">
                                    <option value="" selected disabled>
                                        Etat de paiement
                                    </option>
                                    <option value="paid">
                                        Payé
                                    </option>
                                    <option value="unpaid">
                                        Impayé
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button
                                    onclick="event.preventDefault();
                                        document.getElementById("add-vente").submit();
                                    "
                                    class="btn btn-primary"
                                >
                                    Valider
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section("print")
    <script>
        function print(element){
            const page = document.body.innerHTML;
            const content = document.getElementById(element).innerHTML;
            document.body.innerHTML = content;
            window.print();
            document.body.innerHTML = page;
        }
    </script>
@endsection
