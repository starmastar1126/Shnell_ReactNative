
<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home</title>

   <link href="/public/css/app.css" rel="stylesheet">
   <link href="/public/css/style.css" rel="stylesheet">
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css' />
	
	<style>

    .dataTables_filter{
        float:right;



    }

     .fa{
            color: #b1822c;
        }


     .dataTables_info{

             padding-left: 25px;
    padding-top: 12px;
     }

     .table-responsive
     {
          overflow: hidden;
     }

     .dataTableMargin .ui-datatable-tablewrapper {
    overflow: hidden;
}


	</style>

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
		
			<!--Main Body-->
			{!! Form::open(['action' => 'DashController@projectsPost','method'=>'POST']) !!}
				<div class="container-in-body">
				<div class="pt-4">
					<div class="darkblack-area" style="color:#fff;">
						<div class="existing-area p-4">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="box-heading">
										<h4>Existing Projects</h4>
									</div>
								</div>								
							</div>


							<script>


								function deleteItem() {
									$('#deleteModalCenter').modal('show');
								}

							</script>



							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-3" style="top: 35px;left: -19px;">
								<div class="btn-list-inline float-right">
									<ul class="list-inline share-pupup-section">
										<li class="list-inline-item ">
											<div class="select-delete" id="deletedItems">

												<button type="button" style="    margin-bottom: 13px;" onclick="deleteItem();" class="default-btn darkblack-btn" data-toggle="modal" id="itemDeletedButton">
													<span>
														<i class="fa fa-trash" title="Edit"></i>
													</span> Delete
												</button>
												
												<label id="itemDeleted"> 0 Items Deleted</label>
											</div>
										</li>
									</ul>
								</div>
							</div>






						</div>

						<script>


							$(document).ready(function () {



								$('.styled-checkbox').change(function () {
									var myIDX = 0;

									$('.styled-checkbox').each(function () {

										if ($(this).is(":checked")) {

											var myID = this.id;

											if (myID.toLowerCase().indexOf("styled") > 0) {
												myIDX++;
											}


										}



									});

									//0 Items Deleted
									$("#itemDeleted")[0].textContent = " " + myIDX + " Items Deleted";


								});
							});

						</script>

						<div class="exiting-table-grid pb-4">
							<div class="table-responsive">

								<div id="projects_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
									<div class="row">
										<div class="col-sm-12 col-md-6"></div>
										<div class="col-sm-12 col-md-6">											
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<table width="100%" border="0" bordercolor="#3b484f" id="projects" class="dataTable no-footer" role="grid" aria-describedby="projects_info" style="width: 100%;">
												<thead>
													<tr role="row">
														<th class="sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Last Modified: activate to sort column ascending" style="width: 87px;">Last Modified</th>														
														<th class="sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Project Name: activate to sort column ascending" style="width: 108px;">Project Name</th>
														<th class="sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Customer Company: activate to sort column ascending" style="width: 111px;">Amount Needed</th>
														<th class="sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Engineer Name: activate to sort column ascending" style="width: 167px;">Est Profit</th>
														<th class="sorting" tabindex="0" aria-controls="projects" rowspan="1" colspan="1" aria-label="Engineer Name: activate to sort column ascending" style="width: 167px;">Action</th>
														
													</tr>
												</thead>
												<tbody>

													@if(count($projects) >0 )
                                      @foreach ( $projects as  $proj  )   
																									   													 												  												  												 											   																																	   											 										  										  										 									   																											   									 								  								  								 							   															
													<tr role="row" class="odd">
														<td>

															<span>
																<input class="styled-checkbox" id="Astyled-checkbox-19" type="checkbox" name="Astyled-checkbox-19" value="19" />
																<label for="Astyled-checkbox-19"></label>
															</span>

															<a href="/project/fan-options/19">{{$proj->updated_at}} </a>
														</td>
														<td class="sorting_1">{{$proj->projectName}}</td>
														<td>{{$proj->amount_needed}}</td>
														<td>{{$proj->est_profit}}</td>
														<td>

															
															<button type="submit" style="margin-bottom: 13px;" class="default-btn darkblack-btn" name="edit" value="{{$proj->projectsid}}">
																<span>
																	<i class="fa fa-edit" title="Edit"></i>
																</span> Edit
															</button>

														</td>
													</tr>


													@endforeach
                                  @endif
													
												</tbody>
											</table>
										</div>
									</div>
									
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
			{!! Form::close() !!}
			<!--Main Body-->



</div>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
	<script src="/public/js/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/public/js/app.js"></script>
	
    <!-- Popper.JS -->



		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

			<script>
    $(document).ready(function () {

           function deleteItem() {
       $('#deleteModalCenter').modal('show');
    }


           $("#projects").DataTable({

               "order": [[ 1, "desc" ]],
               "paging": false,
               language: {
                   search: "",                 
                "searchPlaceholder": "search"
               }

           });
            });




        </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
		


		



    </script>
</body>
  
</html>


