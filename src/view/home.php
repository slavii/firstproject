<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<?php
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/home.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/home.css');
echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<?php
    //if(isset($_SESSION['login']))
?>

<div class="header">
    <input type="button" onclick="location.href='/';" value="HOME" class="button  button2"/>
    <input type="button" onclick="location.href='/registration';" value="Register" class="button button2"/>
    <input type="button" onclick="location.href='/contactus';" value="Contact Us" class="button button2"/>
    <input type="button" onclick="location.href='/signin';" value="Sign In" class="button button2"/>
    <input type="button" onclick="location.href='/myprofile';" value="My Profile" class="button button2 hidden"/>
</div>

<div id="ajax-test">Click me</div>
<div id="ajax-text">1</div>

<body>

</body>
