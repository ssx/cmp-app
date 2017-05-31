<?php
require "vendor/autoload.php";

$barclays = new \Banking\Banks\BarclaysBank(1000);
echo PHP_EOL."Barclays interest rate: ".$barclays->getInterestRate().PHP_EOL;

$natwest = new \Banking\Banks\NatwestBank(2000);
echo PHP_EOL."Natwest interest rate: ".$natwest->getInterestRate().PHP_EOL;