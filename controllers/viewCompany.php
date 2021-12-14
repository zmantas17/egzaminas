<?php

use Imones\Database;
use Imones\Company;
use Imones\Request;

$connection = Database::connect();
$companies = new Company($connection);
$id = intval(basename(Request::uri()));
$company = $companies->viewCompany($id);

require 'view/pages/viewCompany.view.php';