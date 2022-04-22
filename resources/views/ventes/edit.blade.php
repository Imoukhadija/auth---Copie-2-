@extends("addmin.base")


@section("content")
    <div class="container">
        <form id="add-vente" action="{{ route("ventes.update",$ventes->id) }}" method="post">
            @csrf
            @method("PUT")
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <a href="/paiements" class="btn btn-outline-secondary">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($vehicules as $vehicule)
                                    <div class="col-md-3">
                                        <div class="card p-2 mb-2 d-flex
                                                    flex-column justify-content-center
                                                    align-items-center
                                                    list-group-item-action">
                                            <div class="align-self-end">
                                                <input type="checkbox" name="vehicules_id[]"
                                                    id="vehicule"
                                                    checked
                                                    value="{{ $vehicule->id }}"
                                                >
                                            </div>
                                            <i class="fa fa-chair fa-5x"></i>
                                            <span class="mt-2 text-muted font-weight-bold">
                                                {{ $vehicule->nom }}
                                            </span>
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-md-12 card p-3">
                    <div class="row">
                        @foreach($garanties as $garantie)
                            <div class="col-md-4 mb-2">
                                <div class="card h-100">
                                    <div class="card-body d-flex
                                    flex-column justify-content-center
                                    align-items-center">
                                        <div class="align-self-end">
                                            <input type="checkbox" name="garantie_id[]"
                                                id="garnties_id"
                                                checked
                                                value="{{ $garantie->id }}"
                                            >
                                        </div>
                                        <img
                                            src="{{ asset("images/garantie/". $garantie->image) }}" alt="{{ $garantie->titre}}"
                                            class="img-fluid rounded-circle"
                                            width="100"
                                            height="100"
                                        >
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
                    </div>
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="form-group">
                                <select name="client_id" class="form-control">
                                    <option value="" selected disabled>
                                        client
                                    </option>
                                    @foreach ($clients as $client)
                                        <option
                                            {{ $client->id === $vente->client_id ? "selected" : "" }}
                                            value="{{ $client->id }}">
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
                                    value="{{ $vente->quantite }}"
                                >
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        DH
                                    </div>
                                </div>
                                <input disabled type="number"
                                    name="total_price"
                                    class="form-control"
                                    placeholder="Prix"
                                     value="{{ $vente->prix_total}}"
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
                                        $
                                    </div>
                                </div>
                                <input disabled type="number"
                                    name="total_received"
                                    class="form-control"
                                    placeholder="Total"
                                     value="{{ $vente->total_recu}}"
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
                                <input disabled  type="number"
                                    name="change"
                                    class="form-control"
                                    placeholder="Reste"
                                     value="{{ $vente->change }}"
                                >
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        .00
                                    </div>
                                </div>
                            </div>
                            <div  disabled class="form-group">
                                <select name="paiement_type" class="form-control">
                                    <option value="" selected disabled>
                                        Type de paiement
                                    </option>
                                    <option value="cash"
                                        {{ $vente->paiement_type === "cash" ? "selected" : ""}}
                                        >
                                        Espéce
                                    </option>
                                    <option value="card"
                                    {{ $vente->paiement_type === "card" ? "selected" : ""}}
                                    >
                                        Carte bancaire
                                    </option>
                                </select>
                            </div>
                              <div  disabled class="form-group">
                                <select name="paiement_type" class="form-control">
                                    <option value="" selected disabled>
                                        Type de paiement
                                    </option>
                                    <option value="cash"
                                        {{ $vente->paiement_type === "cash" ? "selected" : ""}}
                                        >
                                        Espéce
                                    </option>
                                    <option value="card"
                                    {{ $vente->paiement_type === "card" ? "selected" : ""}}
                                    >
                                        Carte bancaire
                                    </option>
                                </select>
                            </div>
                            <div disabled  class="form-group">
                                <select name="paiement_status" class="form-control">
                                    <option value="" selected disabled>
                                        Etat de paiement
                                    </option>
                                    <option value="paid" {{ $vente->paiement_status === "paid" ? "selected" : ""}}>
                                        Payé
                                    </option>
                                    <option value="unpaid" {{ $vente->paiement_status === "unpaid" ? "selected" : ""}}>
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
