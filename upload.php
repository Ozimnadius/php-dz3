<?php
$file = $_FILES['file'];
$dir = 'files';

if ($file['size'] > 2048000) {
    echo "File too big";
} else {
    if (move_uploaded_file($file['tmp_name'], $dir . '/' . $file['name'])) {
        echo "File upload";
    } else {
        echo "File Not upload";
    }
}