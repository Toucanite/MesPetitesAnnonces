<?php
require_once 'connect.php';

$pagination = (isset($_GET["pagination"])?$_GET["pagination"]:"1");
$nbrAnnonces = count($listAnnonce);
$nbrAnnoncesParPage = 10;

$pagination-=1;

if ($nbrAnnonces > 1) {
  for ($i=($pagination*$nbrAnnoncesParPage); $i < (($nbrAnnonces<=$nbrAnnoncesParPage)?$nbrAnnonces:($pagination+$nbrAnnoncesParPage)); $i++) {
    echo '<div class="card">
    <div class="card-header">'.$listAnnonce[$i]["category"].'</div>
    <div class="card-block">
    <h4 class="card-title">'.$listAnnonce[$i]["titre"].'</h4>
    <h5 class="card-title">Utilisateur : '.$listAnnonce[$i]["user"].'</h5>
    <p class="card-text">'.$listAnnonce[$i]["description"].'</p>
    <p class="card-link">'.$listAnnonce[$i]["prix"].' '.$listAnnonce[$i]["currency"].'</p>
    </div>
    </div>';
  }

  $nbrPage = ($nbrAnnonces / 10)+1;
  if ($nbrPage>1) {
    echo '<nav aria-label="Pages annonces">
            <ul class="pagination">';
    if ($pagination == 1) {
        echo '<li class="disabled">';
    }
    else {
        echo '<li class="active">';
    }
    echo '    <li>
                <a href="#?pagination=1" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                </a>
              </li>';
    for ($i=1; $i < $nbrPage; $i++) {
      if ($pagination == $i) {
        echo '<li><a href="pageAnnonces.php?pagination='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>';
      }
      else {
        echo '  <li><a href="pageAnnonces.php?pagination='.$i.'">'.$i.'</a></li>';
      }
    }
    echo '    <li>
                <a href="#?pagination='.$nbrPage.'" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>';
  }
}
else {
  echo '<h4>Il n'."'".'y a pas d'."'".'annonces</h4>';
}
?>
