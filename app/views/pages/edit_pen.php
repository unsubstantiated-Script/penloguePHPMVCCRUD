<?php
require APPROOT . '/views/includes/head.php'
?>


<div class="container">
    <div class="row pt-5">
        <div class="col"></div>
        <div class="col-12 col-lg-6 col-xl-4">
            <h1 class="text-center">Add a Pen</h1>
            <form method="post" action="<?php echo URLROOT; ?>/Pages/edit_pen">
                <div class="form-group mb-3">
                    <label for="pen-brand">Pen Brand</label>
                    <select class="form-control" type="text" name="pen-brand" id="pen-brand">
                        <option value="">--Select--</option>
                        <option value="Aurora" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Aurora") echo "selected"; ?>>Aurora</option>
                        <option value="Caran d Ache" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Caran d Ache") echo "selected"; ?>>Caran d Ache</option>
                        <option value="Cross" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Cross") echo "selected"; ?>>Cross</option>
                        <option value="Aurora" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Aurora") echo "selected"; ?>>Aurora</option>
                        <option value="Faber Castell" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Faber Castell") echo "selected"; ?>>Faber Castell</option>
                        <option value="Ferris Wheel Press" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Ferris Wheel Press") echo "selected"; ?>>Ferris Wheel Press</option>
                        <option value="Kaweco" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Kaweco") echo "selected"; ?>>Kaweco</option>
                        <option value="Lamy" <?php if (isset($data['pen_brand']) && $data['pen_brand'] == "Lamy") echo "selected"; ?>>Lamy</option>

                        <!-- <option value="Mabie Todd">Mabie Todd</option>
                        <option value="Mont Blanc">Mont Blanc</option>
                        <option value="Montegrappa">Montegrappa</option>
                        <option value="Monteverde">Monteverde</option>
                        <option value="Narwhal">Narwhal</option>
                        <option value="Noodler's">Noodler's</option>
                        <option value="Parker">Parker</option>
                        <option value="Pelikan">Pelikan</option>
                        <option value="PenBBS">PenBBS</option>
                        <option value="Pilot">Pilot</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Sailor">Sailor</option>
                        <option value="Shaeffer">Shaeffer</option>
                        <option value="Swan">Swan</option>
                        <option value="Taccia">Taccia</option>
                        <option value="TWSBI">TWSBI</option>
                        <option value="Waterman">Waterman</option> -->
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="pen-name">Pen Name</label>
                    <input class="form-control" type="text" name="pen-name" id="pen-name" value="<?= $data['pen_name'] ?>" />
                </div>

                <div class="form-group mb-3">
                    <label for="pen-color">Pen Color</label>
                    <input class="form-control" type="text" name="pen-color" id="pen-color" value="<?= $data['pen_color'] ?>" />
                </div>
                <div class="form-group mb-3">
                    <label for="nib">Nib</label>
                    <select class="form-control" type="text" name="nib" id="nib" value="">
                        <option value="">--Select--</option>
                        <option value="Fine" <?php if (isset($data['nib']) && $data['nib'] == "Fine") echo "selected"; ?>>Fine</option>
                        <option value="Medium" <?php if (isset($data['nib']) && $data['nib'] == "Medium") echo "selected"; ?>>Medium</option>
                        <option value="Broad" <?php if (isset($data['nib']) && $data['nib'] == "Broad") echo "selected"; ?>>Broad</option>
                        <!-- <option value="Post">Post</option>
                        <option value="Extra-Fine">Extra-Fine</option>
                        <option value="Fine">Fine</option>
                        <option value="Soft-Fine">Soft-Fine</option> -->
                        <!-- <option value="Medium-Fine">Medium-Fine</option>
                        <option value="Soft-Medium-Fine">Soft-Medium-Fine</option>
                        <option value="Medium">Medium</option>
                        <option value="Soft-Medium">Soft-Medium</option>
                        <option value="Broad">Broad</option>
                        <option value="Double-Broad">Double-Broad</option>
                        <option value="Triple-Broad">Triple-Broad</option>
                        <option value="Music">Music</option>
                        <option value="Falcon">Falcon</option>
                        <option value="Fude">Fude</option>
                        <option value="Architect">Architect</option>
                        <option value="Naginata Togi">Naginata Togi</option> -->
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="filling-mech">Filling Mechanism</label>
                    <input class="form-control" type="text" name="filling-mech" id="filling-mech" value="<?= $data['filling_mech'] ?>">
                    <!-- <select class="form-control" type="text" name="filling-mech" id="filling-mech" value="">
                            <option value="" default>--Select--</option>
                            <option value="Bulk Filler">Bulk Filler</option>
                            <option value="Cartridge/Converter">Cartridge/Converter</option>
                            <option value="Eyedropper">Eyedropper</option>
                            <option value="Eyedropper Valve">Eyedropper with Valve</option>
                            <option value="Lever Filler">Lever Filler</option>
                            <option value="Piston">Piston</option>
                            <option value="Vac Filler">Vac Filler</option>
                            <option value="Vac Filler Valve">Vac Filler with Valve</option>
                            <option value="Vacumatic">Vacumatic</option>
                        </select> -->
                </div>
                <div class="form-group mb-3">
                    <label for="ink-brand">Ink Brand</label>
                    <select class="form-control" type="text" name="ink-brand" id="ink-brand">
                        <option value="">--Select--</option>
                        <option value="Aurora" <?php if (isset($data['ink_brand']) && $data['ink_brand'] == "Aurora") echo "selected"; ?>>Aurora</option>
                        <option value="Bungubox" <?php if (isset($data['ink_brand']) && $data['ink_brand'] == "Bungubox") echo "selected"; ?>>Bungubox</option>
                        <option value="Caran d'Ache" <?php if (isset($data['ink_brand']) && $data['ink_brand'] == "Caran d'Ache") echo "selected"; ?>>Caran d'Ache</option>
                        <option value="Colorverse" <?php if (isset($data['ink_brand']) && $data['ink_brand'] == "Colorverse") echo "selected"; ?>>Colorverse</option>
                        <!-- <option value="De Atramentis">De Atramentis</option>
                        <option value="Diamine">Diamine</option>
                        <option value="Ferris Wheel Press">Ferris Wheel Press</option>
                        <option value="Iroshizuku">Iroshizuku</option>
                        <option value="Jacques Herbin">Jacques Herbin</option>
                        <option value="Kaweco">Kaweco</option>
                        <option value="KWZ">KWZ</option>
                        <option value="Lamy">Lamy</option>
                        <option value="Levenger">Levenger</option>
                        <option value="Mont Blanc">Mont Blanc</option>
                        <option value="Montegrappa">Montegrappa</option>
                        <option value="Monteverde">Monteverde</option>
                        <option value="Noodler's">Noodler's</option>
                        <option value="Organic Studios">Organic Studios</option>
                        <option value="Parker">Parker</option>
                        <option value="Pelikan">Pelikan</option>
                        <option value="PenBBS">PenBBS</option>
                        <option value="Pilot">Pilot</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Pure Pens">Pure Pens</option>
                        <option value="Sailor">Sailor</option>
                        <option value="Robert Oster">Robert Oster</option>
                        <option value="Rohrer & Klingner">Rohrer & Klingner</option>
                        <option value="Taccia">Taccia</option>
                        <option value="Trouble Maker">Trouble Maker</option>
                        <option value="TWSBI">TWSBI</option>
                        <option value="Waterman">Waterman</option> -->
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="ink-color">Ink Color</label>
                    <input class="form-control" type="text" name="ink-color" id="ink-color" value="<?= $data['ink_color'] ?>" />
                </div>
                <div class="form-group mb-3">
                    <label for="date-filled">Date ink was loaded</label>
                    <input class="form-control" type="date" name="date-filled" id="date-filled" value="<?= $data['date_filled'] ?>" />
                </div>
                <div class="form-group text-center">
                    <?php if (isset($data['err'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $data['err'] ?>
                        </div>
                    <?php endif; ?>
                    <a class="btn btn-danger btn-lg" href="<?= URLROOT ?>/pages">Cancel</a>
                    <button class="btn btn-primary btn-lg" type="submit" name="save">Submit</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>


<?php
require APPROOT . '/views/includes/footer.php'
?>