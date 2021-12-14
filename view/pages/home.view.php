<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body>
    <?php include "view/_partials/nav.view.php";?>

        <div class="container">
            <h1 class="mt-4 mb-2 text-center text-white" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Visos įmonės </h1>
            <form method="post" class="text-center mt-3">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" class="form-control" name="search" placeholder="Įmonės paieška">
                    <button type="submit" name="send" class="btn btn-success">Ieškoti</button>
                </div>
            </form>
        </div>
    </body>
    <?php include "view/_partials/footer.view.php";?>
</html>