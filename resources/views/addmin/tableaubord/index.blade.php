@extends("addmin.base")
@section('content')
<div class="row">
  <div class="col-lg-3 col-6 mb-4">
    <div class="stat-card cyan">
      <div class="stat-content">
        <p>Total des clients</p>
        <h3>{{ $clientsc}}</h3>
      </div>
      <div class="stat-icon bg-cyan-gradient">
        <i class="ion ion-person"></i>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-6 mb-4">
    <div class="stat-card green">
      <div class="stat-content">
        <p>Total des garanties</p>
        <h3>{{$garantiesc}}</h3>
      </div>
      <div class="stat-icon bg-green-gradient">
        <i class="fa-solid fa-clipboard-list"></i>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-6 mb-4">
    <div class="stat-card orange">
      <div class="stat-content">
        <p>Total des ventes</p>
        <h3>{{$ventesc }}</h3>
      </div>
      <div class="stat-icon bg-orange-gradient">
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-6 mb-4">
    <div class="stat-card red">
      <div class="stat-content">
        <p>Total des categories</p>
        <h3>{{$categoriesc}}</h3>
      </div>
      <div class="stat-icon bg-red-gradient">
        <i class="fa-solid fa-rectangle-list"></i>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-6 mb-4">
    <div class="stat-card purple">
      <div class="stat-content">
        <p>Total des vehicules</p>
        <h3>{{$vehiculesc}}</h3>
      </div>
      <div class="stat-icon bg-purple-gradient">
        <i class="fa-solid fa-car"></i>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <img src="{{ asset('dist/img/allinsurance.jpeg') }}" alt="Website Cover" class="img-fluid border w-100" id="website-cover">
  </div>
</div>

@endsection