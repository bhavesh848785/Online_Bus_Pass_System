
<?php
$filename=$_REQUEST['n'];
$path= "../idproofs/$filename";

header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename='.$filename);
readfile($path);

?>


