<?php
@$a = $_POST['a'];
@$b = $_POST['b'];
@$opcja = $_POST['opcja'];

if($opcja == "a")
{
    echo "Niestety, ale masz rację";
}
else if($opcja == "b")
{
    echo "Nie masz racji";
}
?>