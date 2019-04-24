<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
       <?php session_start(); ?>

<div class="row">
  <div class="formAction" id="formAjoutEvent">
    <h3 class="text-center"> Ajout d'un Evenement </h3>
    <form class="well" method="post" action="./controller/AjoutEvent.php">
      <div class="form-group">
        <label for="nom"> Nom </label>
        <input  class="form-control" type="text" name="nomEvent" placeholder="Nom"  />
      </div>
      <div class="form-group">
        <label for="dateDebut"> Date début </label>
        <input type="datetime-local" name="dateEventDebut" value="">
      </div>
      <div class="form-group">
        <label for="dateFin"> Date fin </label>
        <input type="datetime-local" name="dateEventFin" value="">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" placeholder="Entrer une description (optionnel)"></textarea>
      </div>
      <div class="form-group">
        <input class="btn btn-default" type="submit" name="submitAjoutEvent" value="Ajouter">
      </div>
    </form>
  </div>

</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>