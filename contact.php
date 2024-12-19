<?php
    require './components/header.php';
    require './components/navbar.php';
?>


<form action="resultat.php" method="get">

<?php
    require './class/form.php';

    $form = new Form();
    $form->Input('one', 'number', '', 'Taper un nombre', '');
    $form->Input('two', 'number', '', 'Taper un nombre', '');
    $form->Input('ope', 'text', '', '-+/*', '');
    $form->Input('valider', 'submit', '', 'Valider', 'Valider');

?>


</form>


<?php
    require './components/footer.php';
?>
