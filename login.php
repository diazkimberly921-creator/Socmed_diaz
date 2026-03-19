<?php include 'views/header.php';
     if(isset($_SESSION['aid'])){
        header("location:profile.php"); 
    }
?>
        <div class="registration_form">
            
            <form action="models/login_account.php" method="POST">
                
                <h2 class="form-title">Login</h2>
                
                 <?php if(isset($_GET['err'])){
                        echo "<p class=\"alert\">";
                        echo "Invalid Email or Password";
                        echo "</p>";
                        }
                 ?>
                <label for="email">Email</label>             
                <input type="email" name="email" id="email" placeholder="kim@gmail.com">             
                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                
                <input type="submit" value="Login">
               
            </form>
        </div>
    <?php include 'views/footer.php';
