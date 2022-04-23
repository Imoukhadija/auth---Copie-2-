@extends("addmin.base")


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
</svg> setting  <!--'name','logo','favicon','description'-->
                                </h3>
                                <form action="{{ url("admin/settings") }}" method="post" enctype='multipart/form-data'>
                                    @csrf
                                    <div class="form-group">
                                    <label for="name">nom</label> <br>
                                        <input
                                            type="text" name="name" id="name"
                                            class="form-control"@if($setting) value="{{$setting->name}}" @endif
                                            placeholder="entrer votre nom"
                                        >
                                    </div>
                                <div class="form-group">
                                <label for="logo">logo</label> <br>
                                        <input
                                            type="file" name="logo" id="logo"
                                            class="form-control" 
                                            placeholder="logo"
                                        >
                                         @if ($setting)  <img src="{{asset('public/images/'.$setting->logo)}}" width="70px" height="70px" alt="logo">
                                         @endif
                                    </div>
                                    <div class="form-group">
                                <label for="favicon">favicon</label> <br>
                                        <input
                                            type="file" name="favicon" id="favicon"
                                            class="form-control" 
                                            placeholder="logo"
                                        >
                                         @if   ($setting) 
                                         <img src="{{asset('public/images/'.$setting->favicon)}}" width="70px" height='70px' alt="logo">
                                         @endif
                                    </div>
                                    
                                  
                                    <div class="form-group">
                                    <label for="description">description</label> <br>
                                        <input
                                            type="text" name="description" id="description"
                                            class="form-control" @if($setting) value="{{$setting->description}}"@endif
                                            placeholder="entrer votre description"
                                        >
                                    </div>
                                   <div class="form-group">

                                     <label for="localisation">localisation</label> <br>
                                        <input
                                            type="text" name="localisation" id="localisation"
                                            class="form-control" @if($setting) value="{{$setting->localisation}}"@endif
                                            placeholder="entrer votre localisation"
                                        >
                                    </div>
                                   <div class="form-group">

                                     <label for="email">email</label> <br>
                                        <input
                                            type="email" name="email" id="description"
                                            class="form-control" @if($setting) value="{{$setting->email}}"@endif
                                            placeholder="entrer votre email"
                                        >
                                    </div>
                                                                      
                                    <div class="form-group">
                    <label for="telephon" class="control-label">telephone   </label>
                    <div class="input-group">
                    
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text"  name="telephon" class="form-control" data-inputmask="&quot;mask&quot;: &quot;09-99-99-99-99&quot;" data-mask="" @if($setting) value="{{$setting->telephon}}"@endif inputmode="text" placeholder="__-__-__-__-__">
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
