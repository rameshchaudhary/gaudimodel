<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
   <h1>Gaudi Models Signup</h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('signup/verify_signup'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <label for="userrole">User role:</label>
     <input type="text" size="20" id="userrole" name="userrole"/>
     <br/>
     <input type="submit" value="Submit"/>
   </form>
 </body>
</html>

