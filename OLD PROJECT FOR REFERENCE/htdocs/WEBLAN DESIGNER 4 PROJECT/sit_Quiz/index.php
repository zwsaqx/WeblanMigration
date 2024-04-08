<?php

// Go home
session_write_close();
header("Location: ./../index.php?fuseaction=home.main");
exit();

?>