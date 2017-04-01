<?php
require_once 'connect.php';
Acces();

$listAnnonce = array(array("titre","description","prix","currency","category"));

try
{
  $y=0;
  $request = "SELECT Id_Ad, Txt_Title, Txt_Description, Nb_Price, Cd_Ccy, Nm_Category FROM tbl_Ad, tbl_ad-cat, tbl_category  WHERE Id_Ad=Tbl_Ad_Id_Ad AND id_Category=Tbl_Category_id_Category ORDER BY Id_Ad DESC";
  foreach ($bdd->query($request) as $i) {
           $listAnnonce[$y]["titre"] = $i["a.Txt_Title"];
           $listAnnonce[$y]["description"] = $i["a.Txt_Description"];
           $listAnnonce[$y]["prix"] = $i["a.Nb_Price"];
           $listAnnonce[$y]["currency"] = $i["a.Cd_Ccy"];
           $listAnnonce[$y]["category"] = $i["c.Nm_Category"];
           $y+=1;
   }
}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
