<?php

session_start();
$_SESSION=array();
session_destroy();
echo '<script language="JavaScript"> document.location.href="../index.php"</script>';
