<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reactiepagina</title>
</head>
<body>

<?php

$city = $_POST['woonplaats'];

echo 'Hoi, Kennelijk woon jij in' . $city .'.';
// too slow motherfucker //
    $to = '22333@ma-web.nl';
    $subject = 'spam message deluxe';
    $message = 'dit is een bevestiging dat je in' . $city. 'woont';
    $from = 'donalttrump@whitehouse.gov';
    mail($to,$subject,$message,'from luuk chattillon')
?>

</body>
</html>