@extends('addmin.base')


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card rapport-card-layout">
                    <div class="row no-gutters">

                        <!-- Left colored panel -->
                        <div class="col-md-4 rapport-card-side">
                            <div class="rapport-side-inner">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <button class="rapport-menu-btn" type="button">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                    <a href="{{ route('home') }}" class="rapport-back-link">
                                      
                                    </a>
                                </div>

                                <p class="rapport-label mb-1">Rapport</p>
                                <h2 class="rapport-day mb-1">{{ \Carbon\Carbon::now()->format('l') }}</h2>
                                <p class="rapport-date mb-4">{{ \Carbon\Carbon::now()->format('j F Y') }}</p>

                                @isset($total)
                                    <div class="rapport-total-box mt-auto">
                                        <span>Période</span>
                                        <strong>{{ $DateDebut }} &rarr; {{ $Datefin }}</strong>
                                        <div class="rapport-total-amount mt-2">
                                            Total : {{ $total }} DH
                                        </div>
                                    </div>
                                @endisset
                            </div>
                        </div>

                        <!-- Right calendar / filter panel -->
                        <div class="col-md-8 rapport-card-main">
                            <div class="rapport-main-inner">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="mb-0 text-muted">Filtrer les rapports</h5>
                                </div>

                                <form action="{{ route("rapport.genere") }}" method="post" class="rapport-filter-form mb-3">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <label class="small text-muted mb-1">Date début</label>
                                            <input type="date" name="from" placeholder="Date Début" class="form-control form-control-lg">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label class="small text-muted mb-1">Date fin</label>
                                            <input type="date" name="to" placeholder="Date Fin" class="form-control form-control-lg">
                                        </div>
                                    </div>

                                    <div class="text-right mt-3">
                                        <button class="btn btn-primary btn-lg px-4">Afficher le rapport</button>
                                    </div>
                                </form>

                                @isset($total)
                                    <h5 class="text-primary mt-2 mb-2 font-weight-bold">
                                        Rapport de {{ $DateDebut  }} à {{ $Datefin }}
                                    </h5>
                                    <table class="table table-hover table-responsive-sm rapport-table">
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
                                @endisset
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
