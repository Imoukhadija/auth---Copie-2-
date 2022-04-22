
    @extends("addmin.base")
@section('content')

@foreach($clients as $client)
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2> <b>client</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons"> <i class="fa-solid fa-plus"></i>
                        Ajouter un client   </a>					
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom et Prenom</th>						
                        <th>Date</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$client -> Nom}}</td>
                        <td><a href="#"><img style="width=40px;height:40px ; border-radius: 50%;" src="/images/bg-1.jpg" class="avatar" alt="Avatar"> {{$client -> Prenom}}</a></td>
                        <td>{{$client -> date_naissance}}</td>                        
                        <td>{{$client -> genre}}</td>
                        <td><span class="status text-success">•</span> {{$client -> Situation_familiale}}</td>
                        <td>
                        <a href=""> <i style="color: #03A9F4"  class="fa-solid fa-eye"></i></a>
                            <a href="{{route('clientedit',[}}"><i  style="color:#ffc107" class="fa-solid fa-pen-to-square  "></i></a>
                           
                            <a href=""><i  style="color:#dc3545" class="fa-solid fa-trash"></i> </a>
                              </td>
                    </tr>
                   
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
