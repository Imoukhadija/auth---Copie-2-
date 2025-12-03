@extends("addmin.base")

@section("content")

<div class="container">

    {{-- FORM ADD PAIEMENT --}}
    <form id="add-vente" action="{{ route('paiements.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-md-12">
                <a href="/home" class="btn btn-outline-secondary">
                    <i class="fa fa-chevron-left"></i>
                </a>
                  <a href="{{ route('ventes.index') }}" class="btn btn-outline-secondary float-right">
                Toutes les ventes
            </a>
            </div>
               
        </div>

        <h3 class="text-muted border-bottom mb-4">
            {{ Carbon\Carbon::now() }}
        </h3>

     

        {{-- VEHICULES --}}
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">

                    @foreach ($vehicules as $vehicule)
                    <div class="col-md-3">
                        <div class="card p-3 mb-3">
                            <div class="align-self-end">
                                <input type="checkbox" name="vehicule_id[]" value="{{ $vehicule->id }}">
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --> <path d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z" /> </svg>

                            <span class="mt-2 text-muted font-weight-bold">
                                {{ $vehicule->nom }}
                            </span>

                            <a href="{{ route("vehicules.edit",$vehicule->titre2) }}"
                               class="btn btn-sm btn-warning mt-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <hr>

                            {{-- GUARANTIES BY VEHICULE --}}
                            @foreach ($vehicule->ventes as $vente)
                            @endforeach
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


        {{-- SELECT GARANTIES --}}
        <div class="card p-3 mb-4">
            <div class="row">

                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach($categories as $index => $category)
                            @php($tabId = 'cat-' . $category->id)
                            <li class="nav-item">
                                <a href="#{{ $tabId }}"
                                   class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                   data-toggle="pill">
                                    {{ $category->titre }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="tab-content">
                        @foreach($categories as $index => $category)
                        @php($tabId = 'cat-' . $category->id)

                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                             id="{{ $tabId }}">
                            <div class="row">
                                @foreach($category->garanties as $garanty)
                                <div class="col-md-4 mb-3">
                                    <div class="card garantie-card h-100 text-center p-3">

                                        <div class="align-self-end">
                                            <input type="checkbox"
                                                name="garantie_id[]"
                                                value="{{ $garanty->id }}">
                                        </div>

                                        @if($garanty->image && file_exists(public_path('images/garantie/' . $garanty->image)))
                                            <img src="{{ asset('images/garantie/'. $garanty->image) }}"
                                                 class="img-fluid rounded-circle mb-2" width="100">
                                        @else
                                            <div class="rounded-circle bg-light d-flex
                                                        align-items-center justify-content-center mb-2"
                                                 style="width:100px;height:100px;">
                                                <i class="fas fa-shield-alt fa-3x text-muted"></i>
                                            </div>
                                        @endif

                                        <h5 class="font-weight-bold">{{ $garanty->titre }}</h5>
                                        <h6 class="text-muted">{{ $garanty->prix }} DH</h6>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
       
            <div class="col-md-6 mx-auto">

                <select name="client_id" class="form-control mb-4" style="height: 50px;">
                    <option disabled selected>Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->nom }}</option>
                    @endforeach
                </select>

                <div class="input-group mb-4">
                    <span class="input-group-text">Franchise</span>
                    <input type="number" name="quantite" class="form-control">
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text">DH</span>
                    <input type="number" name="prix_total" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">DH</span>
                    <input type="number" name="total_recu" class="form-control">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">DH</span>
                    <input type="number" name="change" class="form-control">
                </div>

                <select name="paiement_type" class="form-control mb-3"  style="height: 50px;">
                    <option disabled selected>Type de paiement</option>
                    <option value="cash">Espèces</option>
                    <option value="card">Carte</option>
                </select>

                <select name="paiement_status" class="form-control mb-3" style="height: 50px;">
                    <option disabled selected>État paiement</option>
                    <option value="paid">Payé</option>
                    <option value="unpaid">Impayé</option>
                </select>

                <button onclick="document.getElementById('add-vente').submit();"
                        class="btn btn-primary btn-lg w-100">
                    Valider
                </button>

            </div>
        </div>

    </form>


    {{-- LISTE DES PAIEMENTS --}}
    <hr class="my-4">

    <h3 class="mb-3">Liste des paiements</h3>

    @foreach ($vehicules as $vehicule)
        @foreach ($vehicule->ventes as $vente)

            <div id="payment-{{ $vente->id }}" class="invoice-card mb-4">
                <div class="invoice-header d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <h5 class="mb-1 text-uppercase">Facture #{{ $vente->id }}</h5>
                        <br>
                        <h3>CLIENT :</h3>
                        <small> {{ $vente->client->nom }} </small>
                    </div>
                   
                </div>

                <div class="invoice-meta mb-3">
                    <div>
                        <small>Date</small>
                        <div>{{ $vente->created_at->format('d/m/Y') }}</div>
                    </div>
                    <div class="text-right">
                        <small>Véhicule</small>
                        <div>
                            @foreach($vente->vehicules()->where('ventes_id',$vente->id)->get() as $veh)
                                {{ $veh->nom }}@if(!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                <table class="table table-borderless table-sm mb-3 invoice-table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th class="text-right">Prix</th>
                            <th class="text-center">Qté</th>
                            <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vente->garanties()->where('ventes_id',$vente->id)->get() as $garanty)
                            <tr style="color: white">
                                <td style="color: white">{{ $garanty->titre }}</td>
                                <td style="color: white"  color="white"  class="text-right">{{ number_format($garanty->prix, 2) }} DH</td>
                                <td style="color: white" class="text-center">1</td>
                                <td style="color: white" class="text-right">{{ number_format($garanty->prix, 2) }} DH</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="invoice-totals mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Franchise</span>
                        <span>{{ $vente->quantite }}</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Sous-total</span>
                        <span>{{ number_format($vente->prix_total, 2) }} DH</span>
                    </div>
                    <div class="d-flex justify-content-between total-line">
                        <strong>Total</strong>
                        <strong>{{ number_format($vente->total_recu, 2) }} DH</strong>
                    </div>
                </div>

                <div class="invoice-footer d-flex justify-content-between align-items-center">
                    <div>
                        <small>Type de paiement</small><br>
                        <span class="text-capitalize">
                            {{ $vente->paiement_type == 'cash' ? 'Espèces' : 'Carte bancaire' }}
                        </span>
                    </div>
                    <div>
                        <small>Statut</small><br>
                        <span class="{{ $vente->paiement_status == 'paid' ? 'text-success' : 'text-warning' }}">
                            {{ $vente->paiement_status == 'paid' ? 'Payé' : 'Impayé' }}
                        </span>
                    </div>
                    <button type="button"
                            onclick="print('payment-{{ $vente->id }}')"
                            class="btn btn-outline-light btn-sm">
                        <i class="fas fa-print"></i>
                    </button>
                </div>
            </div>

        @endforeach
    @endforeach

</div>

@endsection


@section("print")
<script>
function print(id){
    let page = document.body.innerHTML;
    let content = document.getElementById(id).innerHTML;
    document.body.innerHTML = content;
    window.print();
    document.body.innerHTML = page;
}
</script>
@endsection
