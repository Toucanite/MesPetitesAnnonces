<?php
require_once 'algoSignup.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'inscription</title>
  </head>
  <body>
    <form action="#" method="POST">
          <table>
              <tr>
                  <td>
                      Créer un login :
                  </td>
                  <td>
                      <input type="text" name="login" required="required" value=""/>
                  </td>
                  <td>
                      <?php
                          echo "<a style='color: red'>".$MessageLoginExiste."</a>";
                      ?>
                  </td>
              </tr>
              <tr>
                  <td>
                      Créer un mot de passe :
                  </td>
                  <td>
                      <input type="password" name="pass" required="required"/>
                  </td>
              </tr>
              <tr>
                  <td>
                      Confirmer le mot de passe :
                  </td>
                  <td>
                      <input type="password" name="pass1" required="required"/>
                  </td>
                  <td>
                      <?php
                          echo "<a style='color: red'>".$MessagePassEquals."</a>";
                      ?>
                  </td>
              </tr>
              <tr>
                  <td></td>
                  <td>
                      <input type="submit" value="Signup" name="btnSubmit"/>
                  </td>
              </tr>

          </table>
      </form>
  </body>
</html>
