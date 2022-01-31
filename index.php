<?php 
require "vendor/autoload.php";

use Mori\ali;
use Mori\Models\Baran;
use Mori\Models\Message\Sayclass;
// use Mori\User;
// use Mori\Page;
 
$page1 = new ali();
$page1 = new Baran();
Sayclass::doit();

?>