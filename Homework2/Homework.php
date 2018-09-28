<?php



$file = fopen("products.csv", "r");
for ($i = 0; $row = fgetcsv($file ); ++$i) {
    for ($c=0; $c < count($row); $c++) {
        echo $row[$c]."\n";
    }
}
fclose($file);

?>