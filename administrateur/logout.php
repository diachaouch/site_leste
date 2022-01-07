<?php
session_start();
?>
<script type="text/javascript">
function ourRedirect(){
	
	location.href='/';
	}
    </script> 
<?php

$_SESSION = array();
session_destroy();
echo "<script>ourRedirect();</script>";
?>