<?php

<form method="post">
    <input type="text" name="beverage"> <br>
    <input type="submit" name="submit" value="Go!">
</form>

<?php

$beverage = $_POST['beverage'];


switch($beverage) {
    case 'cola' :
        echo "you are allowed to have cola ";
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