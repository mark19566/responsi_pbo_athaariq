<?php

// import data/person.php
require_once "data/Manager.php";

// buat object new manager dan tambahakan value nama kemudian panggil function
$manager = new Manager();
$manager->nama = "ariq";
$manager->sayHello("bayu");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicepresiden1 = new vicePresident();
$vicepresiden1 ->nama = "bayu"();
$vicepresiden1 ->alamat = "jamaika"();
$vicepresiden1->sayHello("ariq");
