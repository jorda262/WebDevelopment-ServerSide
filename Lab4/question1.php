<?php
$states = array("Canada" => array( "population" => "35,000,000", "capital" => "Ottawa"),
                "France" => array( "population" => "64,600,000",    "capital" => "Paris"),
                "Germany" => array( "population" => "82,600,000",    "capital" => "Berlin"));
echo "population=" . $states["France"]["population"] . " capital=" . $states["Germany"]["capital"];
?>
