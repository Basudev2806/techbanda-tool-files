<?php
$imageFolder = '../tools/qr/codes/';

$imageExtensions = ['png'];

$directory = opendir($imageFolder);

if ($directory) {
    while (($file = readdir($directory)) !== false) {
        if (is_file($imageFolder . $file)) {
            $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
            
            if (in_array(strtolower($fileExtension), $imageExtensions)) {
                unlink($imageFolder . $file);
            }
        }
    }
    closedir($directory);
}
?>
