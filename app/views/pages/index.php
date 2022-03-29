<?php
require APPROOT . '/views/includes/head.php'
?>
<!-- Import of sorts... -->
<?php
require APPROOT . '/views/includes/navigation.php'
?>
<div class=" container-fluid">
    <div class="pen-table-outer container">
        <table class="table table-striped table-dark table-hover ">
            <thead>
                <tr class="align-middle">
                    <th>Pen Brand</th>
                    <th>Pen Name</th>
                    <th>Color</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['pens'] as $pen) : ?>
                    <tr class="align-middle ">
                        <td><?= $pen->penBrand; ?></td>
                        <td><?= $pen->penName; ?></td>
                        <td><?= $pen->penColor; ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-secondary me-3 btn-block" href="<?= URLROOT ?>/pages/show_pen/<?= $pen->id ?>">Details</a>
                                <a class=" btn btn-warning me-3" href="<?= URLROOT ?>/pages/edit_pen/<?= $pen->id ?>">Edit Pen</a>
                                <form class="" action="" method="POST" onSubmit="return confirm('Are you sure you want to delete this?')">
                                    <button class="btn btn-danger  btn-index" type="submit">Delete </button>
                                </form>
                            </div>
                        </td>
                    </tr>
            </tbody>
        <?php endforeach; ?>
        </table>

    </div>
</div>

<?php
require APPROOT . '/views/includes/footer.php'
?>