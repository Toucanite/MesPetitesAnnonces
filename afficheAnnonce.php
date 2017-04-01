<?php

foreach ($listAnnonce as $key => $value) {
  echo '<div class="card">
  <div class="card-header">'.$value["category"].'</div>
  <div class="card-block">
  <h4 class="card-title">'.$value["titre"].'</h4>
  <p class="card-text">'.$value["description"].'</p>
  <p class="card-link">'.$value["prix"].$value["currency"].'</p>
  </div>
  </div>';
}
?>
