<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title><?= SITENAME ?></title>
</head>

<body>
    <!-- Import of sorts... -->

    <div class="container">
        <div class="row pt-5">
            <div class="col"></div>
            <div class="col-12 col-lg-6 col-xl-4">
                <h1 class="text-center">Penlogue</h1>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="first-name">Pen Brand</label>
                        <select class="form-control" type="text" name="pen-brand" id="pen-brand" value="">
                            <option value="" default>--Select--</option>
                            <option value="Aurora">Aurora</option>
                            <option value="Caran d'Ache">Caran d'Ache</option>
                            <option value="Cross">Cross</option>
                            <option value="Faber Castell">Faber Castell</option>
                            <option value="Ferris Wheel Press">Ferris Wheel Press</option>
                            <option value="Karas Pen Co.">Karas Pen Co.</option>
                            <option value="Kaweco">Kaweco</option>
                            <option value="Lamy">Lamy</option>
                            <option value="Mabie Todd">Mabie Todd</option>
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
                            <option value="Waterman">Waterman</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="last-name">Pen Name</label>
                        <input class="form-control" type="text" name="pen-name" id="pen-name" value="" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Pen Color</label>
                        <input class="form-control" type="text" name="pen-color" id="pen-color" value="" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="city">Nib</label>
                        <select class="form-control" type="text" name="nib" id="nib" value="">
                            <option value="" default>--Select--</option>
                            <option value="Post">Post</option>
                            <option value="Extra-Fine">Extra-Fine</option>
                            <option value="Fine">Fine</option>
                            <option value="Soft-Fine">Soft-Fine</option>
                            <option value="Medium-Fine">Medium-Fine</option>
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
                            <option value="Naginata Togi">Naginata Togi</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="zip-code">Filling Mechanism</label>
                        <select class="form-control" type="text" name="filling-mech" id="filling-mech" value="">
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
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Ink Brand</label>
                        <select class="form-control" type="text" name="ink-brand" id="ink-brand" value="">
                            <option value="" default>--Select--</option>
                            <option value="Aurora">Aurora</option>
                            <option value="Bungubox">Bungubox</option>
                            <option value="Caran d'Ache">Caran d'Ache</option>
                            <option value="Colorverse">Colorverse</option>
                            <option value="De Atramentis">De Atramentis</option>
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
                            <option value="Waterman">Waterman</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Ink Color</label>
                        <input class="form-control" type="text" name="ink-color" id="ink-color" value="" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Date ink was loaded</label>
                        <input class="form-control" type="date" name="date-filled" id="date-filled" value="" />
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-lg" type="submit" name="save">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>