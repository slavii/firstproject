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
$script = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/contactus.js');
$style = file_get_contents($_SERVER['DOCUMENT_ROOT'] . 'public/contactus.css');
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
        </div>
</nav>

<div class="col-xs-5 selectContainer">
    <select class="form-control" name="country" id="country">
        <option value="">Choose country</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="United Kingdom">United Kingdom</option>
    </select>
</div>

<div class="col-xs-5 selectContainer">
    <select class="form-control" name="city" id="city" disabled>
        <option value="">Choose city</option>
    </select>
</div>

</br></br>

<div id="result"></div>