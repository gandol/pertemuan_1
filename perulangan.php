<?php
echo "Waktu mundur\n";
for($count=10; $count>=0; $count--){
    echo $count."\n";
    sleep(1);
}

$daftarNama     = ['gika','obbex'];
foreach($daftarNama as $data){
    echo $data."\n";
}