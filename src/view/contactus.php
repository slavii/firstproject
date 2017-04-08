<?php
//$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/contactus.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/contactus.css');
//echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<div class="header">
    <input type="button" onclick="location.href='/';" value="HOME" class="button  button2"/>
    <input type="button" onclick="location.href='/registration';" value="Register" class="button button2"/>
    <input type="button" onclick="location.href='/contactus';" value="Contact Us" class="button button2"/>
    <input type="button" onclick="location.href='/signin';" value="Sign In" class="button button2"/>
</div>