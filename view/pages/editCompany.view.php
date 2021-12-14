<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
    
    <h1 class="mt-5 text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">🎉 Įmonės redegavimas 🎉</h1>
        <div class="container w-25">
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="name" class="form-control" value="<?=$company['pavadinimas']?>" placeholder="Įmonės Pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="code" class="form-control" value="<?=$company['kodas']?>" placeholder="Įmonės Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="pvm_code" class="form-control" value="<?=$company['pvm_kodas']?>" placeholder="Įmonės PVM Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="address" class="form-control" value="<?=$company['adresas']?>" placeholder="Įmonės Adresas">
                </div>
                <div class="form-group p-2">
                    <input type="tel" name="phone" class="form-control" value="<?=$company['telefonas']?>" placeholder="Įmonės Tel. Nr.">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" class="form-control" value="<?=$company['elpastas']?>" placeholder="Įmonės El. paštas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="activity" class="form-control" value="<?=$company['veikla']?>" placeholder="Įmonės Veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="owner" class="form-control" value="<?=$company['vadovas']?>" placeholder="Įmonės Vadovas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-secondary border border-white border border-2 mt-3">Redaguoti</button>
                </div>
            </form>
        </div>
    </body>
</html>