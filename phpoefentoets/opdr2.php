<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>Kies Iphone</h1>

<form method="post">
    <label for="Voornaam">Voornaam:</label>
    <input id="Voornaam" type="text" name="first-name">
    <br> <br>

    <label for="Achternaam">Achternaam:</label>
    <input id="Achternaam" type="text" name="last-name">
    <br> <br>

    <label for="Email">Email: </label>
    <input id="Email" type="text" name="email">

    <p>Welke Iphone wil je kopen?</p>
    <input id="product-Iphone11" type="radio" name="model" value="Iphone11">
    <label for="product-Iphone11">Iphone11</label>
    <br>

    <input id="product-Iphone12" type="radio" name="model" value="Iphone12">
    <label for="product-Iphone12">Iphone12</label>
    <br>

    <input id="product-Iphone13" type="radio" name="model" value="Iphone13">
    <label for="product-Iphone13">Iphone13</label>
    <br>

    <p>Welke versie wil je kopen?</p>
    <input id="product-Mini" type="radio" name="version" value="Mini">
    <label for="product-Mini">Mini</label>
    <br>

    <input id="product-Normaal" type="radio" name="version" value="Normaal">
    <label for="product-Normaal">Normaal</label>
    <br>

    <input id="product-Pro" type="radio" name="version" value="Pro">
    <label for="product-Pro">Pro</label>
    <br>

    <p>Welke kleur?</p>
    <input id="product-Rood" type="radio" name="color" value="Rood">
    <label for="product-Rood">Rood</label>
    <br>

    <input id="product-Blauw" type="radio" name="color" value="Blauw">
    <label for="product-Blauw">Blauw</label>
    <br>

    <input id="product-Zwart" type="radio" name="color" value="Zwart">
    <label for="product-Zwart">Zwart</label>
<br> <br>

<input type="submit" value="Verzenden">

</form>

</body>
</html>

<?php
session_start();
$_SESSION['name']="Sulaiman";
header('location:opdr3.php');
//var_dump($_POST);
if (!isset($_POST['email'])) {
    echo "email not sent ";
    die;
}

if (empty($_POST["email"])) {
    echo "email empty";
    die;
}
header('Location: http://localhost:63342/htdocs/phpoefentoets/opdr2.php?_ijt=895qo621hg9sks747qn12urjgk&_ij_reload=RELOAD_ON_SAVE');
exit;
?>