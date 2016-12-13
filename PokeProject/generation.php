<?php


session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php"); 
}
    
   $mysqli = mysqli_connect("localhost", "root", "letmein", "pokemonDB");
   $genid = $_GET['genid'];
   $sql = "select * from pokemon where generation=$genid;";
   $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
   $display_block = "True";
    if (mysqli_num_rows($result) == 0) { 
        header("Location: index.html");
        exit;
    }
    else {
        $display_block = "";
        while($get = mysqli_fetch_assoc($result))
                {
                    $poke_id = $get[id];
                    $poke_name = $get[name];
                    $poke_type = $get[type];
                    $poke_region = $get[region];
                    $poke_gender = $get[gender];
                    $poke_image = $get[image];
                    $poke_generation = $get[generation];
                    $poke_species = $get[species];
                    $poke_desc = $get[description];
                    $display_block = $display_block."<div class='col-md-4 portfolio-item'>
                <a href=pokemon.php?id=".$poke_id.">
                    <img class='img-responsive' src='".$poke_image."' alt=''>
                </a>
                 <div class='caption'>
                <h3>
                    <a href=pokemon.php?id=".$poke_id."><font color=#3a5fa6>".$poke_name."</a></font>
                </h3>
                <p>". $poke_desc."</p>
                </div>
                <br>
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

    <title>Generation <?php echo $poke_generation ?></title>

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
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
     <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <font color = #3a5fa6><h1 class="page-header">Generation <?php echo $poke_generation ?></font>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
         <?php        
                     echo "$display_block";       
                ?>
        </div>
      
       

        <hr>



    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
