<?php


session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php"); 
}

    $mysqli = mysqli_connect("localhost", "root", "letmein", "pokemonDB");
    $id = $_GET['id'];
    $sql = "select * from pokemon where id=$id;";
   $result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
   
   while($get = mysqli_fetch_assoc($result)) {
                    $poke_id = $get[id];
                    $poke_name = $get[name];
                    $poke_type = $get[type];
                    $poke_region = $get[region];
                    $poke_gender = $get[gender];
                    $poke_image = $get[image];
                    $poke_generation = $get[generation];
                    $poke_species = $get[species];
                    $poke_desc = $get[description];
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

    <title><?php echo $poke_name ?></title>

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

        <div class="row">

            <div class="col-md-3">
                
                <div class="list-group">
                    <a href=generation.php?genid=1 class="list-group-item"><font color = #3a5fa6>Generation I</a></font>
                    <a href=generation.php?genid=2 class="list-group-item"><font color = #3a5fa6>Generation II</a></font>
                    <a href=generation.php?genid=3 class="list-group-item"><font color = #3a5fa6>Generation III</a></font>
                </div>
            </div>


            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $poke_image ?>" alt="">
                    <div class="caption-full">
                        <h3><a href="#"><font color = #3a5fa6><?php echo $poke_name ?></a></font></h3>
                        <p><?php echo $poke_desc ?></p>
                    	
                <ul>
                    <li>Type: <?php echo $poke_type ?></li>
                    <li>Gender: <?php echo $poke_gender ?></li>
                    <li>Region: <?php echo $poke_region ?></li>
                    <li>Species: <?php echo $poke_species ?></li>
                </ul>
                    </div>
                    <div class="ratings">
                        <p class="pull-left">Generation <?php echo $poke_generation ?></p>
                        
                    </div>
                    <div class="text-right">
                        <a href="add.php?id=<?php echo $poke_id?>" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-plus"></span> Add to Team</a>
                    	<!-- IF ALREADY IN TEAM: <a href="#" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> Remove from Team</a> -->
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
