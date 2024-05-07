<?php include_once 'helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="assets/css/reg.css">
<?php
if(isset($_GET['error'])) {
    if($_GET['error'] === 'invalidemail') {
        echo '<script>alert("Invalid email")</script>';
    } else if($_GET['error'] === 'pwdnotmatch') {
        echo '<script>alert("Passwords do not match")</script>';
    } else if($_GET['error'] === 'sqlerror') {
        echo"<script>alert('Database error')</script>";
    } else if($_GET['error'] === 'usernameexists') {
        echo"<script>alert('Username already exists')</script>";
    } else if($_GET['error'] === 'emailexists') {
        echo"<script>alert('Email already exists')</script>";
    }
}
?>
<link rel="stylesheet" href="assets/css/form.css">
<main>
<div class="container-fluid mt-0 register">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 register-right">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h3 class="register-heading text-secondary">PASSENGER REGISTRATION</h3>
                <div class="register-form">
                <form method="POST" action="includes/register.inc.php">
                    <div class="conrainer-fluid">
                    <div class="row">
                        <div class="col-1 p-0">
                            <i class="fa fa-user text-secondary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>
                        <div class="col-md">
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" required />                                
                            </div>  
                        </div>
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-envelope text-secondary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                    
                        <div class="col-md">
                            <div class="input-group">
                                <label for="email_id">Email</label>
                                <input type="text" name="email_id" id="email_id"
                                        required>                                         
                            </div>                                     
                        </div>                        
                    </div>
                    <div class="form-row">
                    <div class="col-1 p-0">
                            <i class="fa fa-lock text-secondary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                        
                        <div class="col-md">
                            <div class="input-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"            
                                required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number and one uppercase and lowercase letter,
                                and at least 8 or more characters" />                                        
                            </div>                                     

                        </div>
                        <div class="col-1 p-0 mr-2">
                            <i class="fa fa-lock text-secondary" 
                                style="float: right;margin-top:35px;"></i>
                        </div>                        
                        <div class="col-md">
                            <div class="input-group">
                                <label for="password_repeat">Confirm password</label>
                                <input type="password" name="password_repeat" 
                                    id="password_repeat" required>
                            </div>                                     
                        </div>                                                                                                  
                    </div>
                    <div class="text-center">
                        <button name="signup_submit" type="submit" 
                            class="btn btn-info mt-5 rounded-pill px-4">
                            <div>
                            <i class="fa fa-lg fa-arrow-right"></i> Complete  
                            </div>
                        </button>                            
                    </div>
                    </div>
                </form>
                </div>                        
            </div>
        </div>
    </div> 
    <div class="col-md-1"></div>          
</div>
</div>

<?php subview('footer.php'); ?>
<script>
$(document).ready(function(){
  $('.input-group input').focus(function(){
    me = $(this) ;
    $("label[for='"+me.attr('id')+"']").addClass("animate-label");
  }) ;
  $('.input-group input').blur(function(){
    me = $(this) ;
    if ( me.val() == ""){
      $("label[for='"+me.attr('id')+"']").removeClass("animate-label");
    }
  }) ;
});    
</script>
 
</main>