<?php
$handler = fopen($_POST['file'], 'r');



ob_start();

$symbols = fpassthru($handler);
$file_content = ob_get_clean();

fclose($handler);

echo " WE ARE READ FILE <br><br>";
echo nl2br($file_content);
echo "<br><br> NUMBER SYMBOLS {$symbols}";