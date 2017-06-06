<?php

$file = fopen('files/'.$_POST['file'], 'w');

print_r($_POST);
echo fwrite($file, $_POST['textartea']);
echo fclose($file);


if (true) {
    echo 'File ' . $_POST['file'] . ' create';
} else {
    echo 'File ' . $_POST['file'] . ' NOT create';
}