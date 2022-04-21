@extends('admin.base')


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="d-flex flex-row justify-content-between align-items-center border-bottom pb-1">
                                    <h3 class="text-secondary">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
</svg> Rapports
                                    </h3>
                                    <a href="{{ route("home") }}" class="btn btn-outline-secondary">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
</svg>
                                    </a>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div  class="col-sm-11 shadow mx-auto p-2">
                                                <form action="{{ route("rapport.genere") }}" method="post">
                                                    @csrf
                                                    
                                                    <div class="form-group">
                                                        <input type="date" name="from" placeholder="Date Début" class="form-control">
                                                       <input type="date" name="to" placeholder="Date Fin" class="form-control">

                                                    </div>
                                                    
                                                    <div class="form-group">
                                                    <button  class="btn btn-block btn-outline-danger btn-xs">   Afficher le rapport</button>
                                                      
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @isset($total)
                                    <h4 class="text-primary mt-4 mb-2 font-weight-bold">
                                        Rapport de {{ $DateDebut  }} à {{ $Datefin }}
                                    </h4>
                                    <table class="table table-hover table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>garanties</th>
                                                <th>vehicules</th>
                                                <th>Sérveur</th>
                                                <th>Quantité</th>
                                                <th>Total</th>
                                                <th>Type de paiement</th>
                                                <th>Etat de paiement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ventes as $vente)
                                                <tr>
                                                    <td>
                                                        {{ $vente->id }}
                                                    </td>
                                                    <td>
                                                        @foreach($vente->garanties()->where("ventes_id",$vente->id)->get() as $garantie)
                                                            <div class="col-md-4 mb-2">
                                                                <div class="h-100">
                                                                    <div class="d-flex
                                                                    flex-column justify-content-center
                                                                    align-items-center">
                                                                        <h5 class="font-weight-bold mt-2">
                                                                            {{ $garantie->titre }}
                                                                        </h5>
                                                                        <h5 class="text-muted">
                                                                            {{ $garantie->prix }} DH
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach($vente->vehicules()->where("ventes_id",$vente->id)->get() as $vehicule)
                                                            <div class="col-md-4 mb-2">
                                                                <div class="h-100">
                                                                    <div class="d-flex
                                                                    flex-column justify-content-center
                                                                    align-items-center">
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome    - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"></path></svg>                                                                        <h5 class="text-muted mt-2">
                                                                            {{ $vehicule->nom }}
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        {{ $vente->client->nom}}
                                                    </td>
                                                    <td>
                                                        {{ $vente->quantite}}
                                                    </td>
                                                    <td>
                                                        {{ $vente->total_recu}}
                                                    </td>
                                                    <td>
                                                        {{ $vente->paiement_type === "cash" ? "Espéce" : "Carte bancaire"}}
                                                    </td>
                                                    <td>
                                                        {{ $vente->paiement_status === "paid" ? "Payé" : "Impayé"}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <p class="text-danger text-center font-weight-bold">
                                        <span class="btn btn-block btn-outline-primary btn-xs">
                                            Total : {{ $total }} DH
                                        </span>
                                    </p>
                                    
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
