<?php
require_once 'connect.php';

$nbrAnnonces = 0;

foreach ($listAnnonce as $key => $value) {
  if ($nbrAnnonces != 10) {
    echo '<div class="card">
    <div class="card-header">'.$value["category"].'</div>
    <div class="card-block">
    <h4 class="card-title">'.$value["titre"].'</h4>
    <h4 class="card-title">Utilisateur : '.$value["user"].'</h4>
    <p class="card-text">'.$value["description"].'</p>
    <p class="card-link">'.$value["prix"].' '.$value["currency"].'</p>
    </div>
    </div>';
  }
  $nbrAnnonces += 1;
}

$nbrPage = $nbrAnnonces / 10;
echo '<nav aria-label="Page navigation">
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            </a>
          </li>';
for ($i=0; $i < $nbrPage; $i++) {
  echo '  <li><a href="#">'.$i.'</a></li>';
}
echo '    <li>
            <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>';
?>
