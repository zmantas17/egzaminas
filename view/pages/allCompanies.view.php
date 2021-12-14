<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>

    <h1 class="mt-4 mb-2 text-center text-white" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Visos įmonės </h1>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Pavadinimas</th>
                    <th scope="col">Adresas</th>
                    <th scope="col">Pvm kodas</th>
                    <th scope="col">El. Pastas</th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach($companies->allCompanies($page) as $company): ?>
                <tr>
                    <th scope="row" class="border-0"><a href="/imone/<?=$company['id']?>"><?=$company['pavadinimas']?></a></th>
                    <td  class="border-0"><?=$company['adresas']?></td>
                    <td  class="border-0"><?=$company['pvm_kodas']?></td>
                    <td  class="border-0"><?=$company['elpastas']?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <nav class="mt-3">
            <ul class="pagination justify-content-center">
            <?php if($page != 1): ?>
                <li class="page-item mt-3"><a class="page-link bg-primary text-white border-0" href="/all/<?=$page-1?>">Atgal</a></li>
            <?php endif ?>
                <li class="page-item mt-3"><a type="button" class="page-link bg-primary text-white border-0" href="/all/<?=$page+1?>">Toliau</a></li></button>
            </ul>
        </nav>
    </body>
    <?php include "view/_partials/footer.view.php";?>
</html>