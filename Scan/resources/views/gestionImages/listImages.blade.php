@extends('layouts.adminLayouts')


@section('content')
<div class="wrapper">
	 <div class="main">
        <main class="content">

			<div class="content-wrapper">
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
                       Gestion des images
                     </span>
                   </b>
                    &nbsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
            
            
              
                  </h5>

                   <div class="table-responsive text-nowrap">
                      <table class="table">
                   
                  
                         <thead style="background-color: rgb(212, 184, 184) !important;" >
                           <tr>
                             <th >Id</th>
                             <th>Image</th>
                             <th>Actions</th>
                           </tr>
                         </thead>
                  
                  
                           <tbody style="overflow-y:scroll ! important; height:300px ! important;" class="table-border-bottom-0">
                    
                           @foreach ($images as $image)   
                           <tr>
                                <td>{{$image['id']}}</td>
                                
                                <td><img src="{{url('imagesMotifs/'.$image['image'])}}"  alt=""></td>
                                <td>

                                  

                                               <a  href="{{route('gestionImages.edit', ['gestionImage' => $image->id])}}"> <svg   xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#03c3ec" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                               <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                              </svg></a> &nbsp;

                                                    <a href="">
                                              <form method="post" action="{{route('gestionImages.destroy', [ 'gestionImage' => $image->id])}}">
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
     <form action="{{route('gestionImages.store')}}" method="POST" enctype="multipart/form-data">
     @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b style="background-color: rgb(212, 184, 184) !important;margin-left:20px;  color: #A52A2A !important;font-size:large;"> Ajouter un motifs </b></h5>
        
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
    
  <div class="mb-3">
                          

                      
                   <div  class="input-group">
                        <input  type="file" class="form-control" id="image" name="image"  />
                        <label style="background-color: #e8fadf;color:#71dd37;" class="input-group-text" for="image">Télecharger</label>
                      </div>
</div> 

                      <div class="mb-3">
                        
                        <select name="motif_id" >
                          @foreach(App\Models\Motif::all() as $motif)
                    
                            <option value="{{$motif['id']}}">{{$motif['nom']}}</option>
                        @endforeach
                         </select>
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
