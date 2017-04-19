<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


<?php
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/js/registration.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/css/registration.css');
echo '<script>' . $script . '</script>';
echo '<style>' . $style . '</style>';
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Home</a>
            <a class="navbar-brand" href="/registration">Registration</a>
            <a class="navbar-brand" href="/contactus">Contact Us</a>
            <a class="navbar-brand" href="/signin">Sign In</a>
            <a class="navbar-brand" href="/cars">Cars</a>
        </div>
</nav>

<body>
<form method="POST" action="/submitregistration" name="registration" id="registration-form">

    <table class="tg">
        <tr>
            <td class="description">
                Login name
            </td>
            <td class="description">
                <input type="text" name="login" id="login" class="form-control" placeholder="Login name"/>
            </td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td class="err">
                <div id="err-login" class="hidden">Please fill Your login name!</div>
            </td>
        </tr>
        <tr>
            <td class="description">
                Password
            </td>
            <td class="description">
                <input type="password" name="password" id="password" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td class="err">
                <div id="err-password" class="hidden">Please fill Your password!</div>
            </td>
        </tr>
        <tr>
            <td class="description">
                Re-Password
            </td>
            <td class="description">
                <input type="password" name="repassword" id="repassword" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td class="err">
                <div id="err-repassword" class="hidden">Please fill the password as above!</div>
            </td>
        </tr>
        <tr>
            <td class="description">
                Email
            </td>
            <td class="description">
                <input type="email" name="email" id="email" class="form-control"/>
            </td>
        </tr>
        <tr>
            <td class="empty"></td>
            <td class="err">
                <div id="err-email" class="hidden">Please fill Your Email!</div>
            </td>
        </tr>
    </table>

    <input type="submit" name="submit" value="Submit" id="submit-btn"/>
    <input type="reset" name="cancel" value="Cancel" id="cancel-btn"/>
</form>

<div id="result"></div>

</body>
