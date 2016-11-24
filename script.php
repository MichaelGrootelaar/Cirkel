<?php
  session_start();
  /**
  * Omtrek van een cirkel uitrekenen.
  *
  * @parm integer $getal
  * @return integer
  */
  function omtrekUitrekenen($getal){
    return 2 * pi() * $getal;
  }

  $_SESSION['uitkomst'] = omtrekUitrekenen($_POST['getal']);
  header('Location: index.php');
?>
