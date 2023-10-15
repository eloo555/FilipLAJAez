<?php
@$a = $_GET['a'];
@$b = $_GET['b'];
@$opcja = $_GET['opcja'];

if($opcja == "a")
{
    echo "Niestety, ale masz rację";
}
else if($opcja == "b")
{
    echo "Nie masz racji";
}
?>