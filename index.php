<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FILIP LAJA</title>
        <body style="background-color: rgb(67, 115, 115);"></body>
    </head>
<body>

<form action="#" method="get">
    Czy Filip to jeden wielki LAJA?<br>
    <input type="radio" name="opcja" value="a">Tak<br>
    <input type="radio" name="opcja" value="b">Nie<br><br>
    <h3> Czy jesteś pewien swojej odpowiedzi? <h3><br>
    <button type="submit"><h4>TAK  <h4></button> <br> 

</form>
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
</body>
</html>
