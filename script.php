<?php
  session_start();
  /**
  * Omtrek van een cirkel uitrekenen.
  *
  * @parm integer $getal
  * @return integer
  */
  function omtrekUitrekenen($getal){
    return 2 * 3.141592653589793238462643383279 * $getal;
  }

  $_SESSION['uitkomst'] = omtrekUitrekenen($_POST['getal']);
  header('Location: index.php');
?>
