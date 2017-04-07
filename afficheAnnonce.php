<?php
require_once 'connect.php';

$pagination = (isset($_REQUEST["pagination"])?$_REQUEST["pagination"]:"1");
$nbrAnnonces = count($listAnnonce[0]);

if ($nbrAnnonces > 1) {
  for ($i=$pagination; $i < ($pagination+10); $i++) {
    echo '<div class="card">
    <div class="card-header">'.$listAnnonce[$i]["category"].'</div>
    <div class="card-block">
    <h4 class="card-title">'.$listAnnonce[$i]["titre"].'</h4>
    <h4 class="card-title">Utilisateur : '.$listAnnonce[$i]["user"].'</h4>
    <p class="card-text">'.$listAnnonce[$i]["description"].'</p>
    <p class="card-link">'.$listAnnonce[$i]["prix"].' '.$listAnnonce[$i]["currency"].'</p>
    </div>
    </div>';
  }

  $nbrPage = ($nbrAnnonces / 10)+1;
  echo '<nav aria-label="Pages annonces">
          <ul class="pagination">';
  if ($pagination == 1) {
      echo '<li class="disabled">';
  }
  else {
      echo '<li class="active">';
  }
  echo '    <li>
              <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              </a>
            </li>';
  for ($i=1; $i < $nbrPage; $i++) {
    if ($pagination == $i) {
      echo '<li><a href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
    }
    else {
      echo '  <li><a href="#">'.$i.'</a></li>';
    }
  }
  echo '    <li>
              <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>';
}


?>
