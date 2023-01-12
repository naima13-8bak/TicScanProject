<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
   <link rel="stylesheet" href="{{url('profile.css')}}">
</head>

<body class="profile-page">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="" target="_blank">Votre Profile </a>   
            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                   
      				
      				<li class="nav-item">
      					<a class="nav-link" href="https://twitter.com/CreativeTim" target="_blank">
      						<i class="fa fa-twitter"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="https://www.facebook.com/CreativeTim" target="_blank">
      						<i class="fa fa-facebook-square"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link"  href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
      						<i class="fa fa-instagram"></i>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </nav>
    <?php $image = Auth::user()->image; ?>
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
      <!-- ---------------------------------------- -->
            <div class="container">

                <div class="row">

	                <div class="col-md-6 ml-auto mr-auto">
        	          <div class="profile">
                      <!-- -------------------- -->
	                        <div class="avatar">
	                            <img src="{{url('img/'.$image)}}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
                      <!-- ---------------------- -->

	                        <div class="name">
                            <br />
                            <br />
							           </div>
                      <!-- --------------------- -->

	                  </div>
    	            </div>
                </div>
<!-- ------------------------------------------------- -->
<form action="{{route('editProfile.update', [ 'editProfile' => $user->id ])}}" method="post" class="formm">
   @csrf
   @method('PUT')
              <div class="description text-center">


                <div class="input-group form-group">
                   <div class="input-group-prepend">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                         <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                       </svg>
                      </span>
                    </div>
                    <input id="nom" type="text" class="form-control" name="name" value="{{old('name',$user->name)}}"required>
                </div>


                <div class="input-group form-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg>
                    </span>
                  </div>
                  <input id="email" type="text" class="form-control" name="email" value="{{old('email',$user->email)}}" required>
                </div>

              </div>
<!-- ************************************* -->
				    <div class="row">
					    <div class="col-md-6 ml-auto mr-auto">
                <div class="profile-tabs">
                  <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg><br>
                      </a>
                    </li>                          
                  </ul>
                </div>
    	    	 </div>
            </div></form>
<!-- **************************************** -->
        
          <div class="tab-content tab-space">
            <div class="tab-pane active text-center gallery" id="studio">
  				<div class="row">
  				</div>
  			</div>
            <div class="tab-pane text-center gallery" id="works">
      			
  			</div>

            <div class="tab-pane text-center gallery" id="favorite">
      			<div class="row">
      				
      				 
      			</div>
      		</div>
          </div>

        
            </div>
        </div>
	</div>
	
	<footer class="footer text-center ">
        <p><img style="width:100; height:100;" src="{{url('logo.png')}}" alt=""> TicScan</p>
    </footer>
 
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


   

</body>