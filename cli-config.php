<?php

require "public/bootstrap.php";

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($em);
?>