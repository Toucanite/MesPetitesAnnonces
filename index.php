<?php
require_once 'algoLogin.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
  </head>
  <body>
    <form action="#" method="POST">
          <table>
              <tr>
                  <td>
                      Login :
                  </td>
                  <td>
                      <input type="text" name="login" required="required" value="<?php echo $loginTest ?>"/>
                  </td>
                  <td>
                      <?php
                          echo "<a style='color: red'>".$MessageErreurLogin."</a>";
                      ?>
                  </td>
              </tr>
              <tr>
                  <td>
                      Password :
                  </td>
                  <td>
                      <input type="password" name="pass" required="required"/>
                  </td>
                  <td>
                      <?php
                          echo "<a style='color: red'>".$MessageErreurPass."</a>";
                      ?>
                  </td>
              </tr>
              <tr>
                  <td></td>
                  <td>
                      <input type="submit" value="Login" name="btnSubmit"/>
                  </td>
              </tr>
              <tr>
                  <td>
                      <a href="signup.php">Inscription</a>
                  </td>
              </tr>
          </table>
      </form>
  </body>
</html>
