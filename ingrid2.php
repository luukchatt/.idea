
<form method="post">
    <input type="text" name="Beer"> <br>
    <input type="submit" name="submit" value="Go!">
</form>

<?php

$Beer = $_POST['Beer'];


switch($Beer) {
    case 'Amstel' :
        echo <img src="amstel.png">;
        break;
    case  'Heineken':
        echo "<img src="heineken.jpg">";
        break;
    case 'Jupiler':
        echo "";
        break;
    default:
        echo "i dont know what this is";



}
