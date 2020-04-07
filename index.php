<?php
$entryfee;
$age = "75";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (($age <= 15) || ($age >= 65)) {
    $entryfee = 50;
}else {
    $entryfee = 100;
}
?>

<p> Je vám <?= $age ?> Musíte zaplatit <?= $entryfee ?> Korun. </p>

</body>
</html>