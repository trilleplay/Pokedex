<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php


session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php"); 
}

    $mysqli = mysqli_connect("localhost", "root", "letmein", "pokemonDB");
    $id = $_GET['id'];
    $email = $_SESSION['email'];
    $sql = "select * from account where email = '$email';";
    $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
    $display_block = "True";
    if (mysqli_num_rows($result) == 0) { 
        header("Location: profile.php");
        exit;
    }
    else {
        $display_block = "";
        while($get = mysqli_fetch_assoc($result)) {
                    $acc_id = $get[tId];
                    $acc_fname = $get[fname];
                    $acc_lname = $get[lname];
                    $acc_desc = $get[about];
                    $acc_pic = $get[profilePic];
                    $acc_gender = $get[sex];
                    $acc_hometown = $get[hometown];
                    $acc_class = $get[pokeclass];
   } 
   $sql2 = "update pokemon set ownerId = $acc_id where id = $id;";
   $result3 = mysqli_query($mysqli, $sql2) or die(mysqli_error($mysqli));
   $sql3 = "select * from account, pokemon where ownerId = tId and email = '$email';";
   $result2 = mysqli_query($mysqli, $sql3) or die(mysqli_error($mysqli));
   while($get2 = mysqli_fetch_assoc($result2)){
                    $poke_image = $get2[image];
                    $poke_id = $get2[id];
                    $display_block = $display_block."<div class='col-sm-3 col-xs-6'>
                <a href=pokemon.php?id=".$poke_id.">
                    <img class='img-responsive portfolio-item' src='".$poke_image."' alt=''>
                </a>
                <div class='text-right'>
                <a href='remove.php?id=".$poke_id."' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-remove'></span> Remove from Team</a>
                </div>
            </div>";
   }
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

    <title>Trainer Profile</title>

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
                    <li>
                        <a href=profilepage.php><font color = #3a5fa6>Trainer Profile</font></a>
                    </li>
                    </ul>
                          <ul class="nav navbar-nav navbar-right">
        <li><a href=logout.php><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
      </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><font color = #3a5fa6>Trainer Profile</font>
                    <small><?php echo $acc_fname . " " . $acc_lname?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo $acc_pic ?>" alt="">
            </div>

            <div class="col-md-4">
                <h3><font color = #3a5fa6>About Me</h3></font>
                <p><?php echo $acc_desc?></p>
                <h3><font color = #3a5fa6>Basic Information</h3></font>
                <ul>
                    <li>Name: <?php echo $acc_fname . " " .  $acc_lname ?></li>
                    <li>Gender: <?php echo $acc_gender ?></li>
                    <li>Hometown: <?php echo $acc_hometown ?></li>
                    <li>Class: <?php echo $acc_class ?></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"><font color = #3a5fa6>Pokemon Trained</font></h3>
            </div>

                            <?php 
                  
                     echo "$display_block";
                  
                ?>

        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
