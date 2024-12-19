<?php
    require './components/header.php';
    require './components/navbar.php';
    require './class/carrousel.php';

    $array = [
        './img/244.webp',
        './img/ldc-20231107223038-2868.webp'
    ];

    $car = new Carrousel();
    echo $car->Read($array);

?>

<?php
    require './components/footer.php';
?>
