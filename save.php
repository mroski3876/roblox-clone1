<?php
file_put_contents("log.txt", $_POST['data'] ?? '', FILE_APPEND);
?>
