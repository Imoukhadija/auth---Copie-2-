@extends("addmin.base")
@section('content')
<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $clientsc}} </h3>

                <p>Total des clients</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$garantiesc}}</h3>

                <p>Total des garanties</p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-clipboard-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$ventesc }}</h3>

                <p>Total des ventes</p>
              </div>
              <div class="icon">
             <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$categoriesc}}</h3>

                <p>Total des categories</p>
              </div>
              <div class="icon">
              
              <i class="fa-solid fa-rectangle-list"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$vehiculesc}}</h3>

                <p>Total des vehicules  </p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-car"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          
        </div>
        <div class="row">
    <div class="col-md-12">
        <img src="{{ asset('dist/img/allinsurance.jpeg') }}" alt="Website Cover" class="img-fluid border w-100" id="website-cover">
    </div>
</div>
     
@endsection
