@extends('layouts.adminLayouts')


@section('content')
<div class="wrapper">
		


		<div class="main">
<main class="content">


     
      

		      <!-- Content wrapper -->
			  <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

            @if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="card">

    <h5 class="card-header" style="background-color: white !important;">
      <b>
        <span style="background-color: rgb(212, 184, 184) !important;  color: #A52A2A !important;font-size:large;">
          Gestion des motifs
        </span>
      </b>
      &nbsp;&nbsp;&nbsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <svg data-toggle="modal" data-target="#add"  style="margin-left:100px important;" xmlns="http://www.w3.org/2000/svg" width="35" height="30" fill="#A52A2A" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg>
                    
        <br>
        <style>
          .div1{
            display:flex;
            margin-left:40px;
            margin-top:10px;
          }
          .sidebar[data-color="purple"] li.active>a {
            margin: 10px 15px 0;
    border-radius: 3px;
    color: #3C4858;
    padding-left: 10px;
    padding-right: 10px;
    text-transform: capitalize;
    font-size: 13px;
    padding: 10px 15px;
}
sidebar .nav li a, .sidebar .nav li .dropdown-menu a {
    margin: 10px 15px 0;
    border-radius: 3px;
    color: #3C4858;
    padding-left: 10px;
    padding-right: 10px;
    text-transform: capitalize;
    font-size: 13px;
    padding: 10px 15px;
}               
        </style>
            
            <form action="/listMotifs" method="get">
              <div class="div1">
                     
                  
                    <div class="div2">
                        <div class="mb-3">
                        <div class="input-group input-group-merge">
                            <span style="background-color:white;" id="basic-icon-default-fullname2" class="input-group-text"
                              > <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #A52A2A;transform: ;msFilter:;"><path d="M3.433 17.325 3.079 19.8a1 1 0 0 0 1.131 1.131l2.475-.354C7.06 20.524 8 18 8 18s.472.405.665.466c.412.13.813-.274.948-.684L10 16.01s.577.292.786.335c.266.055.524-.109.707-.293a.988.988 0 0 0 .241-.391L12 14.01s.675.187.906.214c.263.03.519-.104.707-.293l1.138-1.137a5.502 5.502 0 0 0 5.581-1.338 5.507 5.507 0 0 0 0-7.778 5.507 5.507 0 0 0-7.778 0 5.5 5.5 0 0 0-1.338 5.581l-7.501 7.5a.994.994 0 0 0-.282.566zM18.504 5.506a2.919 2.919 0 0 1 0 4.122l-4.122-4.122a2.919 2.919 0 0 1 4.122 0z"></path></svg></span>
                            </span>
                            <input
                            style="width:270px"
                              type="search"
                              id="id"
                              class="form-control"
                             placeholder="chercher par id"
                              name="id"
                            />
                           </div>
                        </div>
                    </div>


                    &emsp;&emsp;&emsp;&emsp;


                    <div class="div3">
                        <div class="mb-3">
                          <div class="input-group input-group-merge">
                          <span style="background-color:white;" id="basic-icon-default-fullname2" class="input-group-text"
                              > <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:#A52A2A;transform: ;msFilter:;"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg>  </span>
                            <input
                            style="width:270px"
                              type="text"
                              id="nom"
                              class="form-control"
                             placeholder="chercher par nom"
                              name="nom"
                            />
                            </div>
                          </div>
                    </div>
                    
                    &emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&nbsp;
                        <div class="div4">
                          <button name="s1" type="submit" style="width: 30px;height:30px ;border:0;background-color: #A52A2A !important;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: white;transform: ;msFilter:;"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path><path d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z"></path></svg></button></span>
                         </div>
                      
               </div></form>
              
                  </h5>

                   <div class="table-responsive text-nowrap">
                      <table class="table">
                   
                  
                         <thead style="background-color: rgb(212, 184, 184) !important;" >
                           <tr>
                             <th >Id</th>
                             <th>Nom</th>
                             <th>Actions</th>
                           </tr>
                         </thead>
                  
                  
                           <tbody style="overflow-y:scroll ! important; height:300px ! important;" class="table-border-bottom-0">
                    
                           @foreach ($motifs as $motif)   
                           <tr>
                                <td>{{$motif['id']}}</td>
                                <td>{{$motif['nom']}}</td>
                                <td>

                                    <a  href="{{route('gestionMotifs.show', ['gestionMotif' => $motif->id])}}"> <svg   xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffab00" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                 <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                 <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                              </svg> 
                                              &nbsp;

                                               <a  href="{{route('gestionMotifs.edit', ['gestionMotif' => $motif->id])}}"> <svg   xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#03c3ec" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                               <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                              </svg></a> &nbsp;

                                                    <a href="">
                                              <form method="post" action="{{route('gestionMotifs.destroy', [ 'gestionMotif' => $motif->id])}}">
                                                 @method('DELETE')
                                                 @csrf
                                                 <button style="background-color:white;border:0" type="submit" class="btn btn-danger btn-sm">
                                                         <svg data-toggle="modal" data-target="#delete" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                 </svg></button>
                                                </form> </a>
                                               
                                </td>
                            </tr>
                            @endforeach
                            
                     
                      
                    </tbody>
                  </table>
                </div>
              </div>




              <!-- Modal add motif -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form action="{{route('gestionMotifs.store')}}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b style="background-color: rgb(212, 184, 184) !important;margin-left:20px;  color: #A52A2A !important;font-size:large;"> Ajouter un motifs </b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <input type="hidden" name="idc" value="kkkkkk">
      <div class="modal-body">

      
      <div class="mb-3">
                          <div class="input-group input-group-merge">
                            <span style="background-color: rgb(212, 184, 184)" id="basic-icon-default-fullname2" class="input-group-text"
                              ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:#A52A2A;transform: ;msFilter:;"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg></span>
                           
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Entrez le nom"
                          id="nom"
                          name="nom"
                          
                        />
                      </div>


                      <br>


                    
      <div class="mb-3">
                          <div class="input-group input-group-merge">
                            <span style="background-color: rgb(212, 184, 184)" id="basic-icon-default-fullname2" class="input-group-text"
                              ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill:#A52A2A;transform: ;msFilter:;"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg></span>
                           
                       <input
                          type="text"
                          class="form-control"
                          placeholder=" Entrez la description"
                          
                          id="description"
                          name="description"
                          
                        />
                      </div>


                      <br>
                      
                      
                                 
        			
      </div> 

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button  style="background-color: #A52A2A;border:0;" type="submit" value="Ajouter" name="btn-ajouter" class="btn btn-primary">Enregistrer</button>
      </div>
    
      @if ($errors->any())
                     
                     @foreach ($errors->all() as $error)
                            <center> <h4 style="color: red;">{{$error}}</h4></center>
                         
                     @endforeach
                     
                         
             @endif
    </form>
    </div>
  </div>
</div>
<!-- end model add motif -->


</div>
</div>

</div></div>


		</main>
@endsection
