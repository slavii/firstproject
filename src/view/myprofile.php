<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<?php
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/myprofile.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/myprofile.css');
echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<div class="header">
    <input type="button" onclick="location.href='/';" value="HOME" class="button  button2"/>
    <input type="button" onclick="location.href='/registration';" value="Register" class="button button2"/>
    <input type="button" onclick="location.href='/contactus';" value="Contact Us" class="button button2"/>
</div>

<body>
<form method="POST" action="/" name="registration" id="registration-form">

    <input type="button" value="Log Out" name="logout" id="logout-btn"/>

</form>
</body>
