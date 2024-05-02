<?php
$title = "login";
include("init.php");
?>
<!-- form  -->
<div class="login-form">
    <div class="container">
        <form action="" class="login" method="">
            <!---------------User Name-------------------->
            <input type="text" 
                   class="form-control" 
                   name="user" 
                   autocomplete="off" 
                   placeholder="username"/>
            <!---------------Password-------------------->
            <input type="password" 
                   class="form-control" 
                   name="pass" 
                   autocomplete="off" 
                   placeholder="password"/>
            <!---------------Button-------------------->
            <input type="submit" class="btn btn-primary" value="login"/>
        </form>
    </div>
</div>

<?php
include('include/template/footer.php');
?>
