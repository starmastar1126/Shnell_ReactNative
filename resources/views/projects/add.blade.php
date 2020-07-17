<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ trans('home.title') }}</title>
    <link rel='shortcut icon' href='/public/web/assets/images/apple-icon.png' type='image/x-icon' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/dash/assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="/public/dash/assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/public/dash/assets/libs/css/style.css" />
    <link rel="stylesheet" href="/public/dash/assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />

	   <link rel="stylesheet" href="/public/dash/assets/vendor/multi-select/css/multi-select.css">
	


	

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />





    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />


    <style>
        .dataTables_scrollBody {
            overflow-x: hidden !important;
        }

        .table-responsive {
            overflow-x: hidden !important;
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('backend.includes.topnav')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('backend.includes.sidenav')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->




        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content" style="min-height:1012px;">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <!-- <h2 class="pageheader-title">Home Page </h2> -->
                            <h2 class="pageheader-title">Buy Page </h2>
                            <p></p>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#" class="breadcrumb-link">{{ trans('home.dashboard')}}</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Buy Page</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->



                {!! Form::open(['action' => 'DashboardController@buy_Post','method'=>'POST']) !!}
                @csrf

                <div class="row">


                    <!-- ============================================================== -->
                    <!-- basic Tabs  -->
                    <!-- ============================================================== -->



                    
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"></div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            
                            <button type="submit" style="float:right;" class="btn btn-primary" name="Submit">Save</button>
                            
                        </div>

                    


                 
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card" >

                            

                             <div class="row" style="margin-top: 21px;">
                                    

                             @if(count($MatchDatas) >0 )
                                @foreach($MatchDatas as $MatchDa)

                                 <div class="col ml-3" >From: {{$MatchDa->from}}</div>
                                 <div class="col">To: {{$MatchDa->to}}</div>
                                 <div class="col">Time: {{$MatchDa->timeofmatch}}</div>



                                  <input type="hidden" id="hidteam_team" name="hidteam_team" value="{{$MatchDa->site}}" />
                                  <input type="hidden" id="hidteam_team_from" name="hidteam_team_from" value="{{$MatchDa->from}}" />
                                  <input type="hidden" id="hidteam_team_to" name="hidteam_team_to" value="{{$MatchDa->to}}" />
                                 <input type="hidden" id="hidteam_team_time" name="hidteam_team_time" value="{{$MatchDa->timeofmatch}}" />


                                @endforeach
                            @endif

                                 </div>
                            <hr />

                            <div class="card-body">


                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Seat Location</label>
                                            <input id="inputText3" type="text" class="form-control" style="display:none" />

											<?php
											
											if ($MatchDa->site=="Atleticode")
											{?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">
                                                  <option value=""></option>
                                                  <option value="premiumplus">Premium Plus</option>
												  <option value="premium">Premium</option>												  
                                                  <option value="cat1plus">Cat 1 Plus</option>
												  <option value="cat1">Cat 1</option>
                                                  <option value="cat2">Cat 2</option>
                                                  <option value="cat3">Cat 3</option>
												  <option value="cat4">Cat 4</option>
                                                  													
                                                </select>
                                            <?php } ?>

											<?php
											
											if ($MatchDa->site=="liverpool")
											{?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">
                                                  <option value=""></option>
                                                  <option value="premiumplus">Premium Plus</option>
												  <option value="premium">Premium</option>												  
                                                  <option value="cat1plus">Cat 1 Plus</option>
                                                  <option value="hospitalty">Hospitalty</option>
                                                  <option value="long">Long</option>
												  <option value="short">Short</option>
                                                  <option value="away">Away</option>
													
                                                </select>
                                            <?php } ?>

											<?php
											if ($MatchDa->site=="Arsenal")
											{?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">

												  <option value=""></option>
                                                  <option value="premiumplus">Premium Plus</option>
												  <option value="premium">Premium</option>
												  <option value="executive">Executive</option>
                                                  <option value="cat1plus">Cat 1 Plus</option>
												  <option value="cat1">Cat 1</option>
												  <option value="cat2">Cat 2</option>
                                                  <option value="clublevel">Club Level</option>                                                  
                                                  <option value="away">Away</option>
													
                                                </select>
                                            <?php } ?>


											 <?php											
											 if ($MatchDa->site=="FCBarcelonaLassa")
											 {?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">

													<option value=""></option>
												  <option value="cat1plus">Cat 1 Plus</option>
												  <option value="cat1">Cat 1</option>
                                                  <option value="cat2">Cat 2</option>
                                                  <option value="cat3">Cat 3</option>												  
                                                  <option value="cat4">Cat 4</option>
												  
                                                  
                                                </select>
                                            <?php } ?>


											 <?php
											 
											 if ($MatchDa->site=="realmadrid")
											 {?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">
													<option value=""></option>
                                                  <option value="premium">Premium</option>
                                                  <option value="premiumplus">Premium Plus</option>
												  <option value="premiumplatinum">Premium Platinum</option>
                                                  <option value="cat1">Cat 1</option>
                                                  <option value="cat2">Cat 2</option>
                                                  <option value="cat3">Cat 3</option>
												  <option value="cat3plus">Cat 3 Plus</option>
                                                  <option value="cat4">Cat 4</option>
												  <option value="cat4plus">Cat 4 Plus</option>
                                                  <option value="cat5">Cat 5</option>
                                                </select>
                                            <?php } ?>

                                            <?php
                                            if ($MatchDa->site=="tottenhamhotspur")
                                            {?>
                                                <select class="form-control" id="seatLocation" name="seatLocation">

													<option value=""></option>
                                                  <option value="cat2">Cat2</option>
                                                  <option value="club level">Club level</option>
                                                  <option value="cat1">Cat1</option>
                                                  <option value="premium">Premium</option>
                                                  <option value="cat1 plus">Cat1 plus</option>
                                                  <option value="premium plus">Premium plus</option>
                                                  <option value="away">Away</option>
                                                </select>
                                            <?php } ?>

                                             <?php
                                            if ($MatchDa->site=="FCBarcelona")
                                            { ?>
                                                 <select class="form-control" id="seatLocation" name="seatLocation">

													 <option value=""></option>
                                                  <option value="premium plus">Premium Plus</option>
                                                  <option value="premium">Premium</option>
                                                  <option value="cat1 plus">Cat1 plus</option>                                                  
                                                  <option value="cat1">Cat1</option>
                                                  <option value="cat2">Cat2</option>
                                                  <option value="cat3">Cat3</option>
                                                  <option value="cat3 plus">Cat3 plus</option>
                                                  <option value="cat4">Cat4</option>
                                                  <option value="cat5 plus">Cat5 plus</option>
                                                  <option value="cat5">Cat5</option>                                                  
                                                </select>
                                           <?php }
                                           ?>
                                            


                                        </div>
                                    </div>


                                   
                                                                
                                </div>


                                <div class="row">
                                   
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Total No Tickets</label>
                                            <input id="TotalNoTickets" name="TotalNoTickets" type="number" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Groups of (e.g. 2)</label>
                                            <input id="Groups" name="Groups" type="number" class="form-control" />
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="NonPaired"  name="NonPaired" />
                                            <label class="form-check-label" for="exampleCheck1">Non Paired</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="Anywhere" name="Anywhere" />
                                            <label class="form-check-label" for="exampleCheck1">Buy Anywhere</label>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>

                        <div class="card">

                            <h5 class="card-header">Price</h5>
                            <div class="card-body">


                           
                              

                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price Min</label>
                                            <input id="MinPrice" name="MinPrice"  type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price Max</label>
                                            <input id="MaxPrice" name="MaxPrice" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>



                               



                              




                            </div>
                        </div>

                        <div class="card">

                            <h5 class="card-header">Membership</h5>
                            <div class="card-body">

                                                                                                                                                      

                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Membership ID</label>
                                            <input id="MembershipID" name="MembershipID" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Membership Password</label>
                                            <input id="MembershipPass" name="MembershipPass" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>


								<!-- Multiselect -->
								<div class="col-12" style="margin-left: -13px;">
									 <div class="form-group">
                            <div class="card">
                                <h5 class="card-header">Membership Selection</h5>
                                <div class="card-body">


									<select multiple="multiple" id="my-select" name="my-select[]">

										 @if(count($CardsData) >0 )
                                                @foreach($MembershipData as $MembershipDat)

									  <option value='{{$MembershipDat->membership_id}}'>{{$MembershipDat->firstname}} {{$MembershipDat->lastname}}</option>

										 @endforeach
                                                @endif

									 
									</select>
							<!-- Multiselect -->


									 </div>

                                </div>
                            </div>
                        </div>




                            </div>
                        </div>


                        <div class="card">

                            <h5 class="card-header">Credit Card</h5>
                            <div class="card-body">

                                   <?php
                                   function getTruncatedCCNumber($ccNum){
                                       return str_replace(range(0,9), "*", substr($ccNum, 0, -4)) .  substr($ccNum, -4);
                                   }
                                   ?>                                                                                                                    

                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" id="creditCard" name="creditCard">

                                                <option value="">Select</option>
                                                @if(count($CardsData) >0 )
                                                @foreach($CardsData as $CardsDa)
                                                  <option value="{{$CardsDa->bot_cards_id}}"><?php echo getTruncatedCCNumber($CardsDa->cardnumber); ?></option>
                                                 
                                                @endforeach
                                                @endif

                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>



                        <div class="card">

                            <h5 class="card-header">User Details</h5>
                            <div class="card-body">



                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">First Name</label>
                                            <input id="FirstName" name="FirstName" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Last Name</label>
                                            <input id="LastName" name="LastName" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="row">


                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Email Address</label>
                                            <input id="emailaddress" name="emailaddress" type="email" class="form-control" />
                                        </div>
                                    </div>

                                    
                                </div>


                                <div class="row">


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Address1</label>
                                            <input id="Address1" name="Address1"  type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Address2</label>
                                            <input id="Address2" name="Address2" type="text" class="form-control" />
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">City</label>
                                            <input id="city" name="city" type="text" class="form-control" />
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Postcode</label>
                                            <input id="Postcode"  name="Postcode" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Country</label>
                                            <input id="Country" name="Country" type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Mobile No</label>
                                            <input id="Mobile" name="Mobile"  type="text" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">ID Card</label>
                                            <input id="IDCard" name="IDCard" type="text" class="form-control" />
                                        </div>
                                    </div>


                                     <input type="hidden" id="hidteam_id" name="hidteam_id" value="{{ Request::segment(3) }}" />

                                   


                                </div>





                            </div>
                        </div>


						   <div class="card">

                            <h5 class="card-header">Alert Email</h5>
                            <div class="card-body">
                                                                                                                                              

                                <div class="row">


                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Alert Email</label>
                                            <input id="AlertEmail" name="AlertEmail" type="text" class="form-control" value="davidprice35@hotmail.com, david@ticketnetonline.com, yossi@ticketnetonline.com" />
                                        </div>
                                    </div>

                                   
                                </div>





                            </div>
                        </div>


                    </div>


                    <!-- ============================================================== -->
                    <!-- end basic Tabs  -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>


               

                {!! Form::close() !!}



            </div>






			  








            @include('backend.includes.footer')




            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

	
					   <script src="/public/dash/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="/public/dash/assets/vendor/multi-select/js/jquery.multi-select.js"></script>



			<script>

				$('#my-select').multiSelect()

			</script>

</body>

</html>
