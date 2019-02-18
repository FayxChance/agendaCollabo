<?php session_start(); ?>
<h1>Ajout d'un Evenement </h1>
<form method="post" action="./controller/AjoutEvent.php">

  <fieldset>
    <table>
      <tr>
        <td>
          <label>Nom </label>
          <input type="text" name="nomEvent" placeholder="Nom"  />
        </td>
      </tr>
      <tr>
        <td>
          <label> Date début </label>
          <input type="datetime-local" name="dateEventDebut" value="">
          <label> Date Fin </label>
          <input type="datetime-local" name="dateEventFin" value="">
        </td>
      </tr>
      <tr>
       <td>
         <label>Description </label>
         <textarea name="description" rows="5" cols="40"></textarea>
       </tr>
       <tr>
         <td>
           <label>Lieu </label>
           <input type="text" name="lieu" placeholder="Lieu"/>
          </td>
       </tr>
       <tr>
         <td>
           <input type="submit" name="submitAjoutEvent" value="Ajouter"/>
         </td>
       </tr>
    </table>
   </fieldset>
 </form>
