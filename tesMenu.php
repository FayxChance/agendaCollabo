<?php

 ?>
 <header class="bg-dark">
   <div class="inner relative ">
     <a class="logo" href=""><img src="images/logo.png" alt="fresh design web"></a>
     <a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
     <nav id="navigation">
       <ul id="main-menu">
       <?php session_start();
                     if(!isset($_SESSION['connecte'])){?>
         <li class="current-menu-item"><a href="">Home</a></li>
         <li class="parent">
         <?php }else{ ?>
         <li ><a style="color:red" href="./controller/logout.php">Logout</a></li>
         <h5><?php echo "Bienvenue ". $_SESSION['pseudo']; ?>	 </h5>
         <?php } ?>
       </ul>
           <button type="button" id="sidebarCollapse" class="btn btn-info">
               <i class="fas fa-align-left"></i>
               <span>Toggle Sidebar</span>
           </button>
     </nav>
     <div class="clear"></div>
   </div>
 </header>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
#menu {
  position: fixed;
  background-color: #222;
  height: 100%;
  z-index: 10;
  width: 280px;
  color: #bbb;
  top: 0;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  opacity: 1;
  font-family: 'Source Sans Pro', sans-serif;
}

#menu ul {
  list-style: none;
  margin-top: 0;
  padding: 0
}

#menu ul li { border-bottom: 1px solid #2a2a2a; }

#menu>ul>li>a { border-left: 4px solid #222; }

#menu ul li a {
  color: inherit;
  font-size: 16px;
  display: block;
  padding: 8px 0 8px 7px;
  text-decoration: none;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
  font-weight: 600;
}

#menu ul a i {
  margin-right: 10px;
  font-size: 18px;
  margin-top: 3px;
  width: 20px;
}

#menu ul a i[class*='fa-caret'] { float: right; }

#menu ul a:hover,
#menu ul a.active {
  background-color: #111;
  border-left-color: #FFCC33;
  color: #FFCC33;
}

#menu ul a:hover i:first-child { color: #FFCC33; }

/* Submenu */

#menu ul li a.active+ul { display: block }

#menu ul li ul {
  margin-top: 0;
  display: none;
}

#menu ul li ul li { border-bottom: none; }

#menu ul li ul li a { padding-left: 30px; }

#menu ul li ul li a:hover { background-color: #1A1A1A; }

/* /Submenu */


/* Cuando este a la Izq, para esconderlo posicionarlo a la Izq a -width */

.left { left: -280px; }

.show { left: 0; }

#showmenu {
  margin-left: 100%;
  position: absolute;
  top: 0;
  padding: 6px 10px 7px 10px;
  font-size: 1.3em;
  color: #FFCC33;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

#container { padding: 50px; }
</style>
</head>

<body>
<!-- menu vertical -->
<nav id="menu" class="left">
  <ul>
    <li><a href="#" class="active"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-info-circle"></i>About</a></li>
    <li> <a href="a href="#homeSubmenu" data-toggle="collapse"
          aria-expanded="false" class=" h3""><i class="fa fa-laptop"></i>Evenements <i class="fa fa-caret-down"></i></a>
      <ul class="collapse list-unstyled" id="homeSubmenu">
       <li>
              <a href="#pageSubmenu" data-toggle="collapse"
              aria-expanded="false" class=" h4">Ajout Event</a>
			  <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                  <?php include_once "./view/forms/formAjoutEvent.php"; ?>
                </li>
              </ul>
            </li>
        <li>
              <a href="#pageSubmenu2" data-toggle="collapse"
              aria-expanded="false" class=" h4">Delete Event</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li>
                  <?php include_once "./view/forms/DeleteEvent.php"; ?>
                </li>
              </ul>
            </li>
          </ul>
        </li>
		
		 <li>
		 <a href="#homeSubmenu3" data-toggle="collapse"
          aria-expanded="false" class=" h3"><i class="fa fa-group" aria-hidden="true"></i> Groupe </a>
      <ul class="collapse list-unstyled" id="homeSubmenu3">
            <li>
              <a href="#pageSubmenu4" data-toggle="collapse"
              aria-expanded="false" class="h4">Ajout Groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu4">
                <li>
                  <?php include_once "./view/forms/formAjoutGroupe.php"; ?>
                </li>
              </ul>
            </li>
            <li>
              <a href="#pageSubmenu5" data-toggle="collapse"
              aria-expanded="false" class=" h4">Delete Groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu5">
                <li>
                  <?php include_once "./view/forms/formDeleteGroupe.php"; ?>
                </li>
              </ul>
            </li>
            <li>
              <a href="#pageSubmenu6" data-toggle="collapse"
              aria-expanded="false" class=" h4">Ajout Membre</a>
              <ul class="collapse list-unstyled" id="pageSubmenu6">
                <li>
                  <?php include_once "./view/forms/formAjoutMembre.php"; ?>
                </li>
              </ul>
            </li>
            <li>
			
        
      </ul>
    </li>
	
	<li> 
	 <a href="#pageSubmenu7" data-toggle="collapse"
              aria-expanded="false" class=" h4"><i class="fa fa-group" aria-hidden="true"></i>Ajout Event groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu7">
                <li>
                  <?php include_once "./view/forms/formAjoutEventGroupe.php"; ?>
                </li>
              </ul>
            </li>
			</li>
            <li>
              <a href="#pageSubmenu8" data-toggle="collapse"
              aria-expanded="false" class=" h4"><i class="fa fa-close"></i>Delete Event Groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu8">
                <li>
                  <?php include_once "./view/forms/DeleteEventGroupe.php"; ?>
                </li>
              </ul>
            </li>
          </ul>
        </li>
	<ul>		
	<li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i>Notification</a></li>
    <li><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
  </ul>
  <a href="#" id="showmenu"> <i class="fa fa-align-justify"></i> </a> </nav>
<!-- /menu vertical --> 

<!-- contenido de pagina, realmente no importa -->
<div id="container">

  <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<!-- /contenido de pagina, realmente no importa --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$("#showmenu").click(function(e){
			e.preventDefault();
			$("#menu").toggleClass("show");
		});
		$("#menu a").click(function(event){
			event.preventDefault();
			if($(this).next('ul').length){
				$(this).next().toggle('fast');
				$(this).children('i:last-child').toggleClass('fa-caret-down fa-caret-left');
			}
		});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
    <div id="content">
    </div>
    <div class="content col-10" >
      <?php
        include_once "./view/layouts/calendrier.php";
       ?>
    </div>

</div>
