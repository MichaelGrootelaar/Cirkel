<!DOCTYPE html>
<html>
  <?php session_start(); ?>
  <head>
    <title>Omtrek van cirkel berkenen</title>
  </head>

  <body>
    <form method="POST" action="script.php">
      <input type="number" name="getal" placeholder="straal">
      <input type="submit">
    </form>

    <h1>Uitkomst:</h1>
    <?php echo $_SESSION['uitkomst']; ?>
  </body>
</html>
