
<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

   <link href="public/css/app.css" rel="stylesheet">
   <link href="public/css/style.css" rel="stylesheet">
   <link href="public/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
	


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
                   



					<a href="logout"<span>Logout</span></a>

                     
                </div>
             </nav>
		   </div>
		



<div class="container-in-body">
	<div class="welcome-plastic mt-2">
		<div class="welcome-container">
			<div class="welcome-title mt-5 mb-5">
				<h2>Shnell DashBoard</h2>
			</div>
			
			<div class="new-selection">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
						

							<div class="selection-section darkblack-btn">
								<span style="font-size:50px;">

									7

								</span>
								<h3>Sign ups </h3>
							</div>
						</a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
						<a href="/projectview/">
							<div class="selection-section darkblack-btn">
								<span style="font-size:50px;">

									10

								</span>
								<h3>Existing Project</h3>
							</div>
						</a>
					</div>
				</div>
			</div>

			

		</div>
	</div>
</div>
</div>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
	<script src="public/js/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/app.js"></script>
	
    <!-- Popper.JS -->

				<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-app.js"></script>

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


