<?php

 ?>
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
          </ul>
        </li>
      </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>
         </div>
     </nav>
    </div>
</div>
