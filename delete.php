<?php
if (file_exists($_POST['file'])) {
    if (unlink($_POST['file'])) {
        echo 'File ' . $_POST['file'] . ' deleted';
    } else {
        echo 'File ' . $_POST['file'] . ' NOT deleted';
    }
}
