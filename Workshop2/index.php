<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
    "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
    "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta",
    "Austria" => "Vienna", "Poland"=>"Warsaw") ;

ksort($ceu);

foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital\n";
}


$tempetures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
sort($tempetures);

echo "Average from tempeture is: ". array_sum($tempetures) / count(array_filter($tempetures));


echo "\nLowest tempetures: ";
for ($i = 1; $i <= 5; $i++) {
    echo $tempetures[$i].",";
}

echo "\nHighest tempetures: ";

for ($i = count($tempetures)-1; $i >= count($tempetures)-5; $i--) {
    echo $tempetures[$i].",";
}
?>