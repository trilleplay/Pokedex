<?php  
session_start();  
  
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
                        <div class="col-sm-5">
                        	
   <div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3><font color = #3a5fa6>Sign up now</font></h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="authentication.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-firstname">First name</label>
				                        	<input type="text" name="firstname" placeholder="First name" class="form-firstname form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-lastname">Last name</label>
				                        	<input type="text" name="lastname" placeholder="Last name" class="form-lastname form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="E-mail" class="form-email form-control" id="form-email">
				                        </div>
                                                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
				                        </div>
                                                        <div class="form-group">
				                        	<label class="sr-only" for="form-gender">Gender</label>
				                        	<input type="text" name="gender" placeholder="Gender" class="form-gender form-control" id="form-gender">
				                        </div>
                                                                                <div class="form-group">
				                        	<label class="sr-only" for="form-hometown">Hometown</label>
				                        	<input type="text" name="hometown" placeholder="Hometown" class="form-hometown form-control" id="form-hometown">
				                        </div>
                                                                                <div class="form-group">
				                        	<label class="sr-only" for="form-pokeclass">Class</label>
				                        	<input type="text" name="pokeclass" placeholder="Class" class="form-pokeclass form-control" id="form-pokeclass">
				                        </div>
                                                                                <div class="form-group">
				                        	<label class="sr-only" for="form-picture">Picture</label>
				                        	<input type="text" name="picture" placeholder="Picture" class="form-picture form-control" id="form-picture">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about">About yourself</label>
				                        	<textarea name="about" placeholder="About yourself" 
				                        				class="form-about form-control" id="form-about"></textarea>
				                        </div>
                                <input class="btn btn-default" type="Submit" value="Submit" name="Submit" >  
                  
                        </fieldset>  
                    </form>  
			                    </div>
		                    </div>
		                	                        
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