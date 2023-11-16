<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("ariq");
var_dump($company);

$company->programmer = new BackendProgrammer("ariq");
var_dump($company);

$company->programmer = new FrontendProgrammer("ariq");
var_dump($company);

sayHelloProgrammer(new Programmer("ariq"));
sayHelloProgrammer(new BackendProgrammer("ariq"));
sayHelloProgrammer(new FrontendProgrammer("ariq"));