<!DOCTYPE html>
<html>
<head>
	<title>AddEmployee</title>
	
		<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css">
        <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link href="https://clashfragrances.com/wp-content/themes/savoy/css/font-icons/pe-icon-7-filled/css/pe-icon-7-filled.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
        <link href="http://fechazo.com/js/dropdown/css/cs-skin-elastic.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?php echo URLROOT; ?>css/style.css">

</head>
<body class="add-employee-body">

	<main>
        <form action="<?php echo URLROOT; ?>MinorStaffDetailsController/editEmployeeDetails" method="post" class="userform" id="editEmployeeForm" >
					
					<div class="content-form pb-0">
						<div class="animated fadeIn">
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header"><h2>Edit Employee Form<h2></div>
									<div class="card-body card-block">
									<form method="post">

                                            <div  id="hideField">
                                                <label for="">Name</label>
                                                <input id="edit0" type="text" class="form-control" value="" name="id">
                                            </div>
										
											<div class="form-group">
												<label class=" form-control-label">Name</label>
												<input type="text"  id="edit1" name="full_name" placeholder="Enter full name" class="form-control" required>
												<small id="name_error">Please Enter Full Name</small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">NIC</label>
												<input type="text"  id="edit2" name="nic" placeholder="Enter national identity card number" class="form-control" required>
												<small id="nic_error">Please Enter National Identity Card Number</small>
											</div>
											<div class="form-group">
												<label class=" form-control-label">Address</label>
												<input type="text" id="edit3"  name="address" placeholder="Enter address" class="form-control" required>
												<small id="address_error">Please Enter Address</small>
											</div>

											<div class="form-group">
												<label class=" form-control-label">Telephone Number</label>
												<input type="text" id="edit4" name="telephone" placeholder="Enter telephone number" class="form-control" required>
												<small id="telephone_error">Please Enter Telephone Number</small>
											</div>
											
										<!--	<div class="form-group">
												<option value="">Select gender</option>
												<div class="radio-group">
													<div class="radio_male">
														<input type="radio" value="male" class="radio_m" name="gender">Male</input>
													</div>
													<div class="radio_female">
														<input type="radio" value="male" class="radio_f" name="gender">Female</input>
													</div>

												</div>
											</div>-->
                                            <div class="form-group">
												<label class=" form-control-label">Gender</label>
												<input id="edit5" type="text" class="form-control" value="" name="gender">
											</div>

											
											
											<label class=" form-control-label"><b>Date of Appoinment</b></label>

											<div class="form-group">
												<div class="form-label">
													<label class=" form-control-label">Date of first come</label>
													<input type="date" id="edit6" oninput='checkFirstDate(this.value)' value="<?php echo $date_1?>" name="date_1"  class="form-control" required>
												</div>
											</div>
											
											<div class="form-group">
												<div class="form-label">
													<label class=" form-control-label">Date of registered</label>
													<input type="date" id="edit7" oninput='checkRegDate(this.value)' value="<?php echo $date_2?>" name="date_2"  class="form-control" required>
													<small id="regDay_error">Registerd day cannot be smaller than first day</small>
												</div>
											</div>

											<div class="form-group">
												<div class="form-label" id="perDay">
													<label class=" form-control-label">Date of permenent the appoinment</label>
													<input type="date" id="edit8" oninput='checkPermanentDate(this.value)' value="<?php echo $date_3?>" name="date_3"  class="form-control" required>
													<small id="perDay_error">Permanent day cannot be smaller than first day</small>
												</div>
											</div>

											<div class="form-group">
												<label class=" form-control-label">Post</label>
												<select name='carrier' id="edit9"  class="form-control">
													<option>job-state</option>
													<option value="replacement">Replacement</option>
													<option value="not replacement">Not Replacement</option>
												</select>
											</div>
											
											<div class="form-group">
												<label class=" form-control-label">If replacement post</label>
												<select name='reg' id="edit10"  class="form-control">
													<option>reg</option>
													<option value="registered">Registered</option>
													<option value="not registered">Not Registered</option>
												</select>
											</div>

                                            <div class="form-group">
												<label class=" form-control-label">User</label>
                                                <input id="edit11"type="text" class="form-control" value="" name="user">
											</div>

										<button  id="minorStaffSave" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
											<span id="payment-button-amount">Submit</span>
										</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>

					
					
					
			</form>
			
		

    </main>
    
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="<?php echo URLROOT; ?>js/editEmployee.js"></script>
	<script src="<?php echo URLROOT; ?>js/minorStaff.js"></script>

</body>
</html>
