@extends("addmin.base")


@section("content")
    <div class="container-fluid px-0 settings-page">

        {{-- HERO HEADER --}}
        <div class="settings-hero">
            <div class="settings-hero-overlay"></div>
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <h1 class="settings-hero-title mb-2">Paramètres de profil</h1>
                        <p class="settings-hero-subtitle mb-3">
                            Gérez l'identité visuelle, les coordonnées et les informations principales de votre plateforme.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- SETTINGS CARD --}}
        <div class="container settings-card-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card settings-card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span class="settings-badge-icon mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.836.246.836 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.836-1.428.836-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 9.83l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 5.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </span>
                                <h5 class="mb-0">Paramètres généraux</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ url("admin/settings") }}" method="post" enctype='multipart/form-data'>
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nom du site</label>
                                            <input
                                                type="text" name="name" id="name"
                                                class="form-control" @if($setting) value="{{$setting->name}}" @endif
                                                placeholder="Entrer le nom du site"
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input
                                                type="text" name="description" id="description"
                                                class="form-control" @if($setting) value="{{$setting->description}}" @endif
                                                placeholder="Entrer une courte description"
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="localisation">Localisation</label>
                                            <input
                                                type="text" name="localisation" id="localisation"
                                                class="form-control" @if($setting) value="{{$setting->localisation}}" @endif
                                                placeholder="Entrer votre localisation"
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input
                                                type="email" name="email" id="email"
                                                class="form-control" @if($setting) value="{{$setting->email}}" @endif
                                                placeholder="Entrer votre email"
                                            >
                                        </div>

                                        <div class="form-group mb-0">
                                            <label for="telephon" class="control-label">Téléphone</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" name="telephon" class="form-control" data-inputmask="&quot;mask&quot;: &quot;09-99-99-99-99&quot;" data-mask="" @if($setting) value="{{$setting->telephon}}" @endif inputmode="text" placeholder="__-__-__-__-__">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input
                                                type="file" name="logo" id="logo"
                                                class="form-control"
                                            >
                                            @if ($setting)
                                                <div class="settings-image-preview text-center mt-3">
                                                    <img src="{{ asset('public/images/'.$setting->logo) }}" width="80" height="80" alt="logo" class="settings-image-circle mb-1">
                                                    <div><small class="text-muted">Logo actuel</small></div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="favicon">Favicon</label>
                                            <input
                                                type="file" name="favicon" id="favicon"
                                                class="form-control"
                                            >
                                            @if ($setting)
                                                <div class="settings-image-preview text-center mt-3">
                                                    <img src="{{ asset('public/images/'.$setting->favicon) }}" width="64" height="64" alt="favicon" class="settings-image-circle mb-1">
                                                    <div><small class="text-muted">Favicon actuel</small></div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="d-flex justify-content-end mt-4">
                                            <button class="btn btn-primary btn-lg px-4">
                                                Enregistrer les modifications
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
