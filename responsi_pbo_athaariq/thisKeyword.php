<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("ariq", "lahat");

// tambahkan value nama di object
$alzah->nama = "ariq";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Kic");

// buat object dari kelas person
$fariski = new Person("bayu", "jamaika");

// tambahkan value nama di object
$fariski->nama = "bayu";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
