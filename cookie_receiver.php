<?php
if(isset($_GET['cookie'])){
    $name = 'cookie_monser_eating_cookie.png';
    $fp = fopen($name, 'rb');

    header('Content-Type: image/png;');
    header("Content-Length: " . filesize($name));
    print file_get_contents($name);
    die; 
}
?>
