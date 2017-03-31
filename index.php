<?php
require 'connect.php';
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="jumbotron">
      <table>
        <tr>
          <td>
            <h3><label class="mr-sm-2" for="formulaire">Se connecter</label></h3>
          </td>
        </tr>
        <tr>
          <td>
            <form class="form-inline" action="algoLogin.php" method="POST">

              <div class="form-group" id="formulaire">
                <label class="mr-sm-2" for="inlineFormInput">Login :</label>
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Login" name="login" required="required" value="<?php echo $login ?>">

                <label class="mr-sm-2" for="inlineFormInputGroup">Password :</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <input type="password" class="form-control" name="pass" required="required" id="inlineFormInputGroup">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
          <td>
            <ul class="nav nav-pills">
              <li role="presentation"><a href="signup.php"><button type="button" class="btn btn-default">S'inscrire</button></a></li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </body>
</html>
