<?php 

	include( 'inc/Header.php' );
	include( 'lib/User.php' );

	$users = new User();

	if ( isset( $_POST['register'] )) {
		$userRegi = $users->addUser( $_POST );
	}
	$isAdmin = $users->isAdmin();
	if ( $isAdmin == false ) {
		$msg = print_r( "<h4>Only Admin can add user</h4>" );
		return ;
	}
?>
	<div class="row">
      <div class="col-md-6">
      	<?php 
      	if ( isset( $userRegi ) ) {	
      		echo $userRegi;
      	}
      	 ?>
      	<h1>User Registration</h1>
        <form action="" method="POST">
						<div class="form-group">
							<label for="RegInputName">Name</label>
							<input type="text" class="form-control" name="name" id="RegInputName" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label for="RegInputEmail1">Email address</label>
							<input type="email" class="form-control" id="RegInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="Regeditor_status">Select User Type</label>
							<select name="editor_status" class="form-control" id="Regeditor_status">
							<option value="1" selected>Editor</option>
							<option value="2">Admin</option>							
						</select>
						</div>
						<div class="form-group">
							<label for="RegPassword">Password</label>
							<input type="password" name="password" class="form-control" id="RegPassword" placeholder="Password">
						</div>
						
					<button type="submit" id="registration_btn" name="register" class="btn btn-primary">Submit</button>
        </form>
      </div>  
      <div class="col-md-6"></div>  
    </div>
  </div>
<?php 
include( 'inc/Footer.php' );
 ?>