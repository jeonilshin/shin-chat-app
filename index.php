<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header_register.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>ShinChat PC</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplate="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <!-- <div class="field input">
                    <label>Confirm Password</label>
                    <input type="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div> -->
                <div class="field image">
                    <label class="input__img">Add Profile Picture</label>
                    <div class="img-area">
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/password.js"></script>
    <script src="js/signup.js"></script>
</body>  
</html>