<?php
require_once "dbconnect.php";
$origins = array(
                  "Bicol - Manila" => "Naga",
                  "Aurora Cubao - Bicol" => "Aurora Cubao",
                  "PITX - Bicol" => "PITX"
                );
$destinations = array(
                  "Bicol - Manila" => array("Aurora Cubao", "PITX"),
                  "Aurora Cubao - Bicol" => array("Gubat", "Nabua", "Legazpi", "Tabaco"),
                  "PITX - Bicol" => array("Gubat", "Iriga", "Legazpi", "Naga", "Tabaco")
                );
$bus_types = array(
        "Executive",
        "Executive Solo",
        "Executive Class",
        "Executive Luxury"
    );
$status = array(
        "Reserved",
        "Cancelled",
        "Boarded"
        
    );
$routes = array(
        "Bicol - Manila" => array(
            "Naga to Aurora Cubao",
            "Naga to PITX"
        ),
        "Aurora Cubao - Bicol" => array(
            "Aurora Cubao to Gubat",
            "Aurora Cubao to Legazpi",
            "Aurora Cubao to Tabaco",
            "Aurora Cubao to Nabua"
        ),
        "PITX - Bicol" => array(
            "PITX to Gubat",
            "PITX to Iriga",
            "PITX to Legazpi",
            "PITX to Naga",
            "PITX to Tabaco"
        )
    );
