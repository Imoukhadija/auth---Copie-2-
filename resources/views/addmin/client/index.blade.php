
    @extends("admin.base")
@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2> <b>client</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{route('indexcreate')}}" class="btn btn-secondary"><i class="material-icons"> <i class="fa-solid fa-plus"></i>
                        Ajouter un client   </a>					
                    </div>
                </div>
            </div>
            <table class="table">
  <thead class="thead-dark">
  <tr >
                      <th scope="col" >#</th>
                      <th scope="col" >Nature</th>  
                      <th scope="col" >CIN_RC_IF </th> 
                      <th scope="col" >civilite</th> 
                      <th scope="col" >Nom</th> 
                      <th scope="col" >Prenom</th> 
                        <th scope="col" >date  de naissance</th> 
                      <th scope="col" >genre</th> 
                      <th scope="col" >Situation familiale</th> 
                      <th scope="col" >adress</th> 
                      <th scope="col" >Ville</th> 
                      <th scope="col" >code postale</th> 
                      <th scope="col" >telephone fixe </th> 
                      <th scope="col" >telephone mobile </th>
                      <th scope="col" >email</th> 
                      <th scope="col" >lien avec le souscripteur</th> 
                      <th scope="col" >CSP</th> 
                      <th scope="col" >categorie de permis</th> 
                       <th scope="col" >date de permis </th> 
                      <th scope="col" >numero de permis</th> 
                      <th scope="col" >Status</th>
                      <th scope="col" >Action</th>

  </thead>
  <tbody>
    <tr>
      <td scope="row">1</th>
      <td>JFJLKSLKJKLJ </td> 
                        <td>JFJLKSLKJKLJ </td> 
                        <td>M.</td> 
                        <td>FATIMA</td> 
                        <td>LAKCHAOUI</td> 
                        <td>  22/10/2002</td> 
                        <td>FEMME</td> 
                        <td>CELEBATAIRE</td> 
                        <td>adress1</td> 
                        <td>TIZNIT</td> 
                        <td> 85000</td> 
                        <td> 0500000000</td> 
                        <td> 06000000 </td>
                        <td>email@GMAIL.COM</td> 
                        <td>OUI</td> 
                        <td>JFEKJLJLJL</td> 
                        <td>B</td> 
                         <td>10/03/2021 </td> 
                        <td>2123454646464</td> 
                        <td><span class="status text-success">•</span> active</td>
                        <td>
                        <a href=""> <i style="color: #03A9F4"  class="fa-solid fa-eye"></i></a>
                            <a href=" "><i  style="color:#ffc107" class="fa-solid fa-pen-to-square  "></i></a>
                           
                            <a href=""><i  style="color:#dc3545" class="fa-solid fa-trash"></i> </a>
                              </td>
    </tr>
    <tr>
    <td scope="row">1</th>
    <td>JFJLKSLKJKLJ </td> 
    <td>JFJLKSLKJKLJ </td> 
                        <td>M.</td> 
                        <td>FATIMA</td> 
                        <td>LAKCHAOUI</td> 
                        <td>  22/10/2002</td> 
                        <td>FEMME</td> 
                        <td>CELEBATAIRE</td> 
                        <td>adress1</td> 
                        <td>TIZNIT</td> 
                        <td> 85000</td> 
                        <td> 0500000000</td> 
                        <td> 06000000 </td>
                        <td>email@GMAIL.COM</td> 
                        <td>OUI</td> 
                        <td>JFEKJLJLJL</td> 
                        <td>B</td> 
                         <td>10/03/2021 </td> 
                        <td>2123454646464</td> 
                        <td><span class="status text-success">•</span> active</td>
                        <td>
                        <a href=""> <i style="color: #03A9F4"  class="fa-solid fa-eye"></i></a>
                            <a href=" "><i  style="color:#ffc107" class="fa-solid fa-pen-to-square  "></i></a>
                           
                            <a href=""><i  style="color:#dc3545" class="fa-solid fa-trash"></i> </a>
                              </td>
    </tr>
    <tr>
    <th scope="row">1</th>
    <td>JFJLKSLKJKLJ </td>    <td>JFJLKSLKJKLJ </td> 
                        <td>M.</td> 
                        <td>FATIMA</td> 
                        <td>LAKCHAOUI</td> 
                        <td>  22/10/2002</td> 
                        <td>FEMME</td> 
                        <td>CELEBATAIRE</td> 
                        <td>adress1</td> 
                        <td>TIZNIT</td> 
                        <td> 85000</td> 
                        <td> 0500000000</td> 
                        <td> 06000000 </td>
                        <td>email@GMAIL.COM</td> 
                        <td>OUI</td> 
                        <td>JFEKJLJLJL</td> 
                        <td>B</td> 
                         <td>10/03/2021 </td> 
                        <td>2123454646464</td> 
                        <td><span class="status text-success">•</span> active</td>
                        <td>
                        <a href=""> <i style="color: #03A9F4"  class="fa-solid fa-eye"></i></a>
                            <a href=" "><i  style="color:#ffc107" class="fa-solid fa-pen-to-square  "></i></a>
                           
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

@endsection
