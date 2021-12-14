<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
        <?php include "view/_partials/nav.view.php";?>
        <!-- <div class="container w-100 text-justify mt-5" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
        <h1 class="text-center"><?=$company['pavadinimas']?></h1>
            <ul type="circle" class="text-center">
                <li><strong>Kodas: </strong> <?=$company['kodas']?></li>
                <li><strong>PVM kodas: </strong><?=$company['pvm_kodas']?></li>
                <li><strong>Adresas: </strong><?=$company['adresas']?></li>
                <li><strong>Telefono nr.: </strong><?=$company['telefonas']?></li>
                <li><strong>El. paštas: </strong><?=$company['elpastas']?></li>
                <li><strong>Veikla: </strong><?=$company['veikla']?></li>
                <li><strong>Vadovas: </strong><?=$company['vadovas']?></li>
            </ul>
            <div class="text-center">
                <a href="/edit-company/<?=$company['id']?>" type="button" class="btn btn-info">Redaguoti</a>
                <a href="/delete-company/<?=$company['id']?>" type="button" class="btn btn-success">Ištrinti</a>
            </div>
        </div> -->
        <div class="container d-flex justify-content-center mt-5">
            <div class="card bg-transparent border-radius text-white text-center border" style="width: 20rem;">
                <div class="card-header mt-3 border-0">
                    <span class="fw-bold">Pavadinimas: </span><?=$company['pavadinimas']?></p>
                </div>
                <div class="card-body">
                    <p class="mb-2"><strong>Kodas: </strong> <?=$company['kodas']?></p>
                    <p class="mb-2"><strong>PVM kodas: </strong> <?=$company['pvm_kodas']?></p>
                    <p class="mb-2"><strong>Adresas: </strong> <?=$company['adresas']?></p>
                    <p class="mb-2"><strong>Telefono nr: </strong> <?=$company['telefonas']?></p>
                    <p class="mb-2"><strong>El. paštas: </strong> <?=$company['elpastas']?></p>
                    <p class="mb-2"><strong>Veikla: </strong> <?=$company['veikla']?></p>
                </div>
                <div class="card-header border-0">
                    <span class="fw-bold">Vadovas: </span><?=$company['vadovas']?></p>
                </div>
                <div class="card-body border-0">
                    <a href="/edit-company/<?=$company['id']?>" type="button" class="btn btn-info">Redaguoti</a>
                    <a href="/delete-company/<?=$company['id']?>" type="button" class="btn btn-success">Ištrinti</a>
                </div>
            </div>
        </div>
    </body>
</html>