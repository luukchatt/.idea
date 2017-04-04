
<form method="post">
    <input type="text" name="Bier"> <br>
    <input type="submit" name="submit" value="Go!">
</form>

<?php

$Bier = $_POST['Bier'];


switch($Bier) {
    case 'heineken' :
        echo "<img src="heineken.png">";
        break;
    case  'beer':
    echo "you are not allowed to drink beer";
    break;
    case 'apple juice':
        echo "you are allowed to drink apple juice";
        break;
    default:
        echo "i dont know what this is";



}