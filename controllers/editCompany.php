<?php

use Imones\Request;
use Imones\Database;
use Imones\Company;
use Imones\Validation;

$connection = Database::connect();
$companies = new Company($connection);
$id = intval(basename(Request::uri()));
$company = $companies->viewCompany($id);

if (isset($_POST['send'])) {
    $validation = Validation::newCompany($_POST);
    if ($validation != 'Klaidų nerasta') {
        foreach ($validation as $klaida) {
            echo '<h1 style="text-align: center;"> ' . $klaida . ' </h1>';
        }
    } else {
        $companies->editCompany($id, $_POST);
    }
} else {
    require 'view/pages/editCompany.view.php';
}