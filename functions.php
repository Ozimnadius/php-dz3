<?php


function list_files()
{

    $dir = opendir('files');

    while ($fl = readdir($dir)) {
        if (!is_dir($fl)) {
            echo "<div><a href=files/$fl>$fl</a>
                <form action='read.php' method='post'>
                  <input hidden type='text' name='file' value='files/$fl'><input type='submit' value='Read'>
                </form>
                <form action='delete.php' method='post'>
                  <input hidden type='text' name='file' value='files/$fl'><input type='submit' value='Delete'>
                </form>
                <form action='edit.php' method='post'>
                  <input hidden type='text' name='file' value='files/$fl'><input type='submit' value='Edit'>
                </form>
            </div>";
            }
    }
}