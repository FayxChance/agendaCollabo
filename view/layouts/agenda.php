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
<div class="wrapper">
    <!-- SIDE BAR -->
    <nav id="sidebar" class="col-2">
      <div class="sidebar-header" >
        <h2 >Panel </h2>
      </div>
      <ul class="list-unstyled components">
        <li class="active">
          <a href="#homeSubmenu" data-toggle="collapse"
          aria-expanded="false" class=" h3"> Event </a>
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
        <li class="active">
          <a href="#homeSubmenu3" data-toggle="collapse"
          aria-expanded="false" class=" h3"> Groupe </a>
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
              <a href="#pageSubmenu7" data-toggle="collapse"
              aria-expanded="false" class=" h4">Ajout Event groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu7">
                <li>
                  <?php include_once "./view/forms/formAjoutEventGroupe.php"; ?>
                </li>
              </ul>
            </li>
            <li>
              <a href="#pageSubmenu8" data-toggle="collapse"
              aria-expanded="false" class=" h4">Delete Event Groupe</a>
              <ul class="collapse list-unstyled" id="pageSubmenu8">
                <li>
                  <?php include_once "./view/forms/DeleteEventGroupe.php"; ?>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
    </div>
    <div class="content col-10" >
      <?php
        include_once "./view/layouts/calendrier.php";
       ?>
    </div>

</div>
