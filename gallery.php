<?php
$dir = "images";
$extensions = array("jpg", "jpeg", "png", "gif");

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, $extensions)) {
                echo "<img src='$dir/$file' alt='$file' width='300'>";
            }
        }
        closedir($dh);
    }
}
?>
