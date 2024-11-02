
<?php 
include "./basic/startlinks.php";
include "./basic/header.php";
include "./config.php";

if(isset($_REQUEST['add']))
{
    $name  = $_REQUEST['username'];
    $email  = $_REQUEST['useremail'];
    $pass  = $_REQUEST['userpass'];
     
    $encrypt = password_hash($pass , PASSWORD_BCRYPT);
    // echo $encrypt;
    
    $email_check = $conn->prepare("SELECT * FROM signup WHERE email = '$email'");
    $email_check->execute();
    $data = $email_check->fetchAll();
    if(count($data) > 0)
    {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Email Already Exist. Change your Email</strong>.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    else
    {
        $sign = $conn->prepare("INSERT INTO signup (username , email , password)
        VALUES('$name', '$email', '$encrypt')");
        $sign->execute();
        if($sign)
        {
    //         echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    //   <strong>You Registered Successfully</strong>.
    //   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    // </div>";

    ?>
        <script>
        window.location.href = ("./login.php");
        </script>
<?php
        }
    }

   
}

?>



<div class="container">
   
    <div class="row">
    <h1>User Sign Up Form</h1>
        <div class="col-12">
            <form action="" method="$_POST">
                <div class="mt-3">
                    <label for="n">Name</label>
                    <input type="text" name="username" id="n" placeholder="Enter Name" class="form-control" required>
                </div>

                <div class="mt-3">
                    <label for="e">Email</label>
                    <input type="email" name="useremail" id="e" placeholder="Enter Email" class="form-control" required>
                </div>
                <div class="mt-3">
                    <label for="p">Password</label>
                    <input type="password" name="userpass" id="p" placeholder="Enter Password" class="form-control" required>
                </div>

                <div class="mt-3">
                   <button type="submit" class="btn btn-primary" name="add">SignUp</button>
                </div>
            </form>
        </div>
    </div>
</div>


        <?php 
        
        include "./basic/endlinks.php";
        include "./basic/footer.php";
        ?>