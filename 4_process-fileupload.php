<?php
echo "<pre>";
print_r($_FILES);
echo "<pre>";
move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']);
/** result
$_FILES : 
Array
(
    [file] => Array
        (
            [name] => logo.png
            [type] => image/png
            [tmp_name] => /tmp/phpY6Armu
            [error] => 0
            [size] => 291733
        )
)
*/
