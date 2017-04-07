<?php
require_once 'connect.php';
Acces();

$listAnnonce = array(array());

try
{
  $y=0;
  $request = "SELECT * FROM tbl_ad as ad, tbl_user as us, `tbl_ad-cat` as ac, tbl_category as c WHERE ad.Id_User = us.Id_user AND ad.Id_Ad = ac.Tbl_Ad_Id_Ad AND ac.Tbl_Category_id_Category = c.id_Category AND ad.Id_User = '$id'";
  foreach ($bdd->query($request) as $i) {
           $listAnnonce[$y]["titre"] = $i["Txt_Title"];
           $listAnnonce[$y]["description"] = $i["Txt_Description"];
           $listAnnonce[$y]["prix"] = $i["Nb_Price"];
           $listAnnonce[$y]["currency"] = $i["Cd_Ccy"];
           $listAnnonce[$y]["category"] = $i["Nm_Category"];
           $listAnnonce[$y]["user"] = $i["Nm_Last"];
           $y+=1;
   }
}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
