<section style="background-color:#e5e5e5; padding:20px;">
<div class="container">
    <h4>Create an Account</h4>
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Creat a Account</a></li>
        <p class=" page-info"></p>
        <em class="muted">feel free to call us</em>
        <i class="fa fa-phone"></i> +91.33.26789234 
        <i class="fa fa-envelope"></i> 
		email@yourdomain.com
        
    </ul>
    
    
    </div>
</section>

<div class=" container" style="margin-top:40px; margin-bottom:40px;">
<div class="col-md-9 column">
<h1 class="text-center">
<i class="fa fa-facebook"></i>
</h1>
<div class=" hr-title hr-full">
<abbr> or </abbr>
</div>
 <?php echo validation_errors(); ?>
<p>Registering for this site is easy. Just fill in the fields below, and we'll get a new account set up for you in no time.</p>

<?php echo form_open('signup/verify_signup'); ?>
	<div style="float:left; width:340px; margin-right:70px">
	  <div class="form-group">
	  <h3>Account Details</h3>
		<label for="exampleInputEmail1">Username (required)</label>
		<input type="text" class="form-control" name="username" id="exampleInputEmail1" >
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Email Address (required)</label>
		<input type="email" class="form-control" name="email" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Choose a Password (required)</label>
		<input type="password" class="form-control" name="password" id="exampleInputPassword1">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Confirm Password (required))</label>
		<input type="password" class="form-control" name="password_check" id="exampleInputPassword1" >
	  </div>
	</div>

	<div style="float:left; width:340px;">
	  <div class="form-group">
	  <h3>Profile Details</h3>
		<label for="exampleInputEmail1">Name (required)</label>
		<input type="text" class="form-control" name="name" id="exampleInputEmail1">
	  </div>
	  <div class="form-group">
		<p>This field can be seen by: <b>Everyone</b></p>
		<label for="exampleInputPassword1">My Quote </label>
		<input type="text" class="form-control" name="quote" id="exampleInputPassword1" ><br/>
		 <p>This field can be seen by: <b> Everyone Change</b></p>
		
	  </div>
	  <button type="Submit" class=" btn-defaultregister">Complete Sing Up</button>
	 </div> 
  
</form>


</div>
<div class="col-md-3 column">
<h1 class="text-center">
<i class="fa fa-facebook"></i>
</h1>
<div class=" hr-title hr-full">
<abbr> or </abbr>
</div>
<p>User: demo Password: demo</p>
<form role="form">
  <div class="form-group">
	<h3 class="signin">Sign in</h3>
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember Me
    </label>
  </div>
  <button type="submit" class="btn-defaultregister">Sign in</button> 
</form><br/>
</div>
</div>
