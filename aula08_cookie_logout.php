<?php
setcookie("tema", "", time() - 3600); 
header("Location: aula08_cookie_index.php");
exit;
?>
