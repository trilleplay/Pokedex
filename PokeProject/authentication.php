<?php
$mysqli = mysqli_connect("localhost", "root", "letmein", "pokemonDB");
// Check connection
if($mysqli === false){
        //echo "Connection Fail";
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}
    /*  else { 
    echo "connect";
}
*/

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
    $hometown = $_POST['hometown'];
    $gender = $_POST['gender'];
    $pokeclass = $_POST['pokeclass'];
    $picture = $_POST['picture'];
    $about = $_POST['about'];
    
    
$sql = "SELECT email FROM account WHERE email = '".$email."'";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
$display_block = "True";
if (mysqli_num_rows($result) == 1){
    $_SESSION['alert']="Email already exists <br/>";
    $display_block = "<p> your email is already in use </p>";
    header("Location: signup.php");
exit; 
}      
   
$sql = "INSERT INTO account (email,fname,lname,password,profilePic,sex,hometown,pokeclass,about) VALUES ('$email','$firstname','$lastname', '$password','$picture','$gender', '$hometown', '$pokeclass','$about')";

if(mysqli_query($mysqli, $sql)){
    $display_block = "<p>Your account " .$email. " has just been created. Thank you for joining us!</p>";
}else{
    $display_block = "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <a href=index.php><img class=“banner” src=header.png alt="" align=“middle” width="100%"></a>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom” role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>        
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li>
                        <a href=index.php><font color = #3a5fa6>Home</font></a>
                    </li>
                    </ul>
                          <ul class="nav navbar-nav navbar-right">
        <li><a href=login.php><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
   

 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                          <?php 
                  
                     echo "$display_block";
                  
                ?>
                        
		                	                        
                        </div>
                        
                       
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    <!-- /.container -->

    <div class="container">

        <hr>



    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>