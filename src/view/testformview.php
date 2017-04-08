<?php
    $value = (isset($_POST['textvalue'])) ? $_POST['textvalue']+1 : 1;
?>

<form action="/testformview" method="POST">
    <input type="text" name="textvalue" value="<?= $value ?>">
    <input type="submit"/>
</form>