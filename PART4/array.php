<?php
$Music = array(
    "MUSICALS" => array(
        "0" => "Oklahoma",
        "1" => "The Music Man",
        "3" =>"South Pacific"
    ),
    "DRAMAS" => array(
        "0" => "Lawrence of Arabia",
        "1" => "To Kill a Mockingbird",
        "3"=>"Casablanca"
    ),
    "MYSTERIES" => array(
        "0" => "The Maltese Falcon",
        "1" => "Rear Window",
        "3"=>"North by Northwest"
    ),
);

$keys = array_keys($Music);
for($i = 0; $i < count($Music); $i++) {
    echo $keys[$i] . "<br>";
    foreach($Music[$keys[$i]] as $key => $value) {
        echo "----> ".$key." = ". $value . "<br>";
    }
    echo "<br>"; 
}
?>




