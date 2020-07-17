
<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>Home</title>

	<link href="/public/css/app.css" rel="stylesheet" />
	<link href="/public/css/style.css" rel="stylesheet" />
	<link href="/public/css/font-awesome.min.css" rel="stylesheet" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />




</head>
<body>


	<div class="wrapper">
		<!-- Sidebar  -->

		@include('includes.sidemenu')

		<div id="content">

			<div class="top-header-right">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div class="container-fluid">

						<button type="button" id="sidebarCollapse" class="btn btn-info">
							<i class="fa fa-align-left"></i>
							<span>
								Home Page
							</span>
						</button>




						<span onclick="logout();">Logout</span>


					</div>
				</nav>
			</div>





			<div class="container-in-body">
				<div class="pt-4">
					<div class="darkblack-area" style="color:#fff;">
						<div class="existing-area p-4">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="box-heading">
										<h4>Edit Projects</h4>
									</div>
								</div>
							</div>																																	   							 						  
						</div>

						<div class="sdsdsd" style="margin-left: 25px;margin-right: 25px">
							<div class="project-form mb-4">
								@if(count($projects) >0 )
                                    @foreach ( $projects as  $proj  )   
									 <div class="project-form-block">
									    						    
										   <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
											     <div class="form-group">
												    <label>Project Name</label>                                                                                                              
									  	<input type="text" class="form-control" id="ProjectName" name="ProjectName" value="{{$proj->projectName}}" />                                                                                                                                                                                                                                                                                                                                                                                    													
												 </div>
											  </div>											 
										   </div>


										 <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
											     <div class="form-group">
												    <label>Project Logo</label>                                                                                                              
                                                        <input type="text" class="form-control" id="Logo" name="Logo" value="">                                                                                                                                                                                                                                                                                                                                                                                    													
												 </div>
											  </div>											 
										   </div>


										 <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
											     <div class="form-group">
												    <label>Project Video</label>                                                                                                              
                                                        <input type="text" class="form-control" id="Video" name="Video" value="">                                                                                                                                                                                                                                                                                                                                                                                    													
												 </div>
											  </div>											 
										   </div>



										 <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
											     <div class="form-group">
												    <label>Price Per Share</label>                                                                                                              
                                                        <input type="text" class="form-control" id="PPShare" name="PPShare" value="">                                                                                                                                                                                                                                                                                                                                                                                    													
												 </div>
											  </div>											 
										   </div>


										  <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
											     <div class="form-group">
												    <label>Est Profit</label>                                                                                                              
                                                        <input type="text" class="form-control" id="estProfit" name="estProfit" value="">                                                                                                                                                                                                                                                                                                                                                                                    													
												 </div>
											  </div>											 
										   </div>


										  </div>
									@endforeach
								@endif


										   <div class="row">
										      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3">
											     <div class="form-group">
												     <div class="blue-bg-btn">

										 	<a href="/projects/">
										 		<button type="submit" class="btn btn-primary btn-lg">
										 			<-Back
										 		</button>
										 	</a>

													   <button type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#AddFavourite" >Save</button>
													 </div>

                                                    

												 </div>                                                  

											  </div>
										   </div>
										   <div class="required-fields">
										      
										   </div>
										
									 </div>
								  </div>
						</div>

						

					</div>



					


				</div>
			</div>




		</div>
		<!-- jQuery CDN - Slim version (=without AJAX) -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

		<script src="/public/js/popper.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/public/js/app.js"></script>

		<!-- Popper.JS -->



		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


		<script src="
			https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>

		<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
		<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-analytics.js"></script>

		<!-- Add Firebase products that you want to use -->
		<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>
		<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-firestore.js"></script>


		<script type="text/javascript">
			$(document).ready(function () {
				$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
				});
			});









			// Your web app's Firebase configuration
			var firebaseConfig = {
				apiKey: "AIzaSyA58qh7gA-k9ryfCiyq5-tAYWWUqhAHR2Y",
				authDomain: "shnell.firebaseapp.com",
				databaseURL: "https://shnell.firebaseio.com",
				projectId: "shnell",
				storageBucket: "shnell.appspot.com",
				messagingSenderId: "136235406790",
				appId: "1:136235406790:web:23a583f89682af24d98ec7",
				measurementId: "G-1E6KFDZ9Z0"
			};
			// Initialize Firebase
			firebase.initializeApp(firebaseConfig);
			firebase.analytics();



			function logout() {

				//if (firebase.auth().currentUser) {


				firebase.auth().signOut();
				window.location.replace("/");
				//}
			}
		</script>
</body>

</html>



					
										

