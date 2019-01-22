<h1>Ajout d'un Evenement </h1>
<form method="post" action="">

<fieldset>
<table>
<tr>
 <td><label>Nom </label> <input type="text" name="nomEvent" placeholder="Nom"  /></td>
 </tr>
 <tr>
 <td><label>Heure debut</label><select name="Heure debut">
 <?php
 
 for ( $i=0; $i<24; $i++){
  echo "<option value='$i'>"; echo $i; echo"</option>";
  }
 ?>
 
</select></td>
<td><label>minute debut</label><select name="Heure debut">
 <?php
 
 for ( $i=0; $i<60; $i=$i+5){
  echo "<option value='$i'>"; echo $i; echo"</option>";
  }
 ?>
 
</select></td>
<td><label>Heure fin</label><select name="Heure debut">
 <?php
 
 for ( $i=0; $i<24; $i++){
  echo "<option value='$i'>"; echo $i; echo"</option>";
  }
 ?>
 
</select></td>
<td><label>minute fin</label><select name="Heure debut">
 <?php
 
 for ( $i=0; $i<60; $i=$i+5){
  echo "<option value='$i'>"; echo $i; echo"</option>";
  }
 ?>
</select></td>
 </tr>
 <tr>
 <td><label>Description </label> <textarea name="Description" rows="5" cols="40"></textarea>
    
 </tr>
 <tr>
<td> <label>Lieu </label><input type="text" name="Lieu" placeholder="Lieu"/></td>
 </tr>
 <tr><td><input type="submit" name="Envoyer" value="Envoyer"/></td></tr>
 </table>
 </fieldset>

 </form>
