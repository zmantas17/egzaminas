<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
    
    <h1 class="mt-5 text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Užpildykite formą</h1>
        <div class="container w-25">
            <div class="icon-center text-center">
            </div>
            <form method="post">
                <div class="form-group p-2">
                    <input type="text" name="name" class="form-control"  placeholder="Įmonės Pavadinimas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="code" class="form-control"  placeholder="Įmonės Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="pvm_code" class="form-control"  placeholder="Įmonės PVM Kodas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="address" class="form-control"  placeholder="Įmonės Adresas">
                </div>
                <div class="form-group p-2">
                    <input type="tel" name="phone" class="form-control"  placeholder="Įmonės Tel. Nr.">
                </div>
                <div class="form-group p-2">
                    <input type="email" name="email" class="form-control"  placeholder="Įmonės El. paštas">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="activity" class="form-control"  placeholder="Įmonės Veikla">
                </div>
                <div class="form-group p-2">
                    <input type="text" name="owner" class="form-control"  placeholder="Įmonės Vadovas">
                </div>
                <div class="text-center">
                    <button type="submit" name="send" class="btn btn-primary mt-3">Pridėti</button>
                </div>
            </form>
        </div>
    </body>
</html>