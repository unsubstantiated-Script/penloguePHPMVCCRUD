<?php
require APPROOT . '/views/includes/head.php'
?>


<div class="container mt-4">
    <h1><?= $data['pen']->penName; ?></h1>
    <ul>
        <li>Brand: <?= $data['pen']->penBrand; ?></li>
        <li>Color: <?= $data['pen']->penColor; ?> </li>
        <li>Nib: <?= $data['pen']->nib; ?></li>
        <li>Filling Mechanism: <?= $data['pen']->fillingMech; ?></li>
        <li>Ink Brand: <?= $data['pen']->inkBrand; ?></li>
        <li>Ink Color: <?= $data['pen']->inkColor; ?></li>
        <li>Ink Filled: <?= date("m/d/Y", strtotime($data['pen']->dateFilled)); ?> </li>
    </ul>
    <a class="btn btn-primary" href="<?= URLROOT ?>/pages">Back</a>
</div>



<?php
require APPROOT . '/views/includes/footer.php'
?>