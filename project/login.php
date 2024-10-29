<?php 
include "./basic/startlinks.php";
include "./basic/header.php";

?>


 <!-- login -->
 <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Hello Friend!</h3>
                    <p>Create New Account</p>
                    <div id="btn"><a href="signup.html">Sign up</a></div>
                </div>
                <div class="col-md-8" id="side2">
                    <h3>Login Account</h3>
                    <div class="inp">
                        <input type="text" placeholder="User Name" required>
                        <input type="text" placeholder="Password" required>
                    </div>
                    <p>Forgot Your Password</p>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div id="login"><button>LOG IN</button></div>
                </div>
            </div>
        </div>
        <!-- login -->


        <?php 
        
        include "./basic/endlinks.php";
        include "./basic/footer.php";
        ?>