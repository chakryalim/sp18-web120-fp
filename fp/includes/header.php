<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"/>
<link href="https://fonts.googleapis.com/css?family=Anton|Open+Sans:300,400,600" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script>
    $(function(){
    $('.pageID').hide().fadeIn(3000);
     $('.tagline').hide().delay(1000).fadeIn(5000);
  }); 
    
    </script>
</head>

<body>
<!-- START WRAPPER -->

<header>
  <h1 id="logo"><a href="index.php"> <i class="fas fa-video fa-1x"></i> Bun Real Films</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
        <?=makelinks($nav1)?>
     <!-- <li><a class="selected" href="template.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="portfolio.php">PORTFOLIO</a>
        <li><a href="contact.php">CONTACT</a></li>    -->    
       
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
    
    <div id="hero">
        <div class="container-img">
        <h1 class="pageID"><?=$pageID?></h1>
        <h2 class="tagline"><?=$tagline?></h2>
        </div><!--End of CONTAINER-img Div-->
    </div> <!--End of HERO Div-->
    

<!--end header include here-->