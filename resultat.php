
<h1>

<?php 

if ($_GET['ope'] == "-") {
    echo $_GET['one']-$_GET['two']. '€';
}

if ($_GET['ope'] == "+") {
    echo $_GET['one']+$_GET['two']. '€';
}

if ($_GET['ope'] == "*") {
    echo $_GET['one']*$_GET['two']. '€';
}

if ($_GET['ope'] == "/") {
    echo $_GET['one']/$_GET['two']. '€';
}



?>

</h1>