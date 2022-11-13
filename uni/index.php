<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Login As Teacher/Student";
	  $color="green";
}
?>
<!DOCTYPE html>

<html lang="en">
   
    <head>
        <meta charset="UTF-8">
	      <script src="source/js/loginValidate.js"></script>
          <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <link rel="stylesheet" href="iutResult.css">
		 
        <title>Nerd's Cafe University Repository</title>
        <div class="yellow_darkbg">
        <div class="amarbalertitle" style="background: #f8c659";>
        <div class="container">
           <div class="row">
           
              <div class="col-md-12">
                
                <h2 style="font-size: 45px";>Nerd's Cafe University Repository</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
    </head>
    <body>
	<section class="balamar" 
    style="background-image: linear-gradient(#0D324D, #7F5A83);
    min-height: 700px;
     background-size: 100% 100%;
     display: flex;
     justify-content: center;
     align-content: center;
     align-items: center;
     position: relative;
    ";>
			<center>
                <div class="logo">
	          <img src="source/ol.png" style="width:100px;height:100px;"/>
</div>
	          <hr/>
            <?php echo "<font size='4' color='$color'>$login_message</font>";?>
            <section class="forms-section">
         <!-- <h1 class="section-title">Animated Forms</h1> -->
         <div class="forms">
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
                
                <input type="text" class="form-control" id="myid" name="myid" placeholder="Login ID" autofocus=""   />
               

               
                <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Password"  />
              

                
                <input type="submit" class="btn btn-success" value="Login" />
            </form>

        </center>
	
    </body>
</html>
