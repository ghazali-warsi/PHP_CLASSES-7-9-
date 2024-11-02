<?php 
// session_start();

include "./basic/startlinks.php";
include "./basic/header.php";
include "./config.php";




?>


 <!-- login -->
 <div class="container login">
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">

                <div class="mt-3">
                    <label for="e">Email</label>
                    <input type="email" name="useremail" id="e" placeholder="Enter Email" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="p">Password</label>
                    <input type="password" name="userpass" id="p" placeholder="Enter Password" class="form-control" required>
                </div>

                <div class="mt-3">
                   <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
            </form>
            </div>
        </div>
            </div>
        <!-- login -->

        <?php 
        
        if(isset($_REQUEST['login']))
{
     $email = $_REQUEST['useremail'];
     $password = $_REQUEST['userpass'];

    $fetch = $conn->prepare("SELECT * FROM signup WHERE email = '$email' ");
    $fetch->execute();
    $row = $fetch->fetch();
    
    $signEmail =  $row['email'];
    $signPass =  $row['password'];

    // $_SESSION['username'] = $row['name'];

    // $verifyPass = password_verify();
    
    if($email == $signEmail && password_verify($password , $signPass))
    {
        // header("Location: index.php");
        // echo "login successfull";
?>
        <script>
        window.location.href = ("./index.php");
        </script>
<?php  
}
    else
    {
    echo "password or email not correct";
    }

}


        
        ?>

        <?php 
        
        include "./basic/endlinks.php";
        include "./basic/footer.php";
        ?>