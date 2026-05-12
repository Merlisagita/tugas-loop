<?php
//loop while
$shit = 0;
while ($shit < 10) { //trus 0 < 10
    //kode yang akan dijalankan jika kondisi benar
    echo "$shit <br>";
    $shit += 2; //shit = shit + 2 --> 0 + 2 = 2
}

$shit = 1;
while ($shit < 8) {
    echo "$shit <br>";
    $shit += 2;
}

//do while
echo "<h2>pengulangan do while</h2>";
$i = 1;
do {
    //kode yang akan di eksekusi
  echo $i;
  $i++;
} while ($i < 6); //true

//pengulangan for
echo "<h2>loop for</h2>";
for($counter = 1; $counter < 10; $counter++) {
    echo "angka ke - " . $counter . "<br>";
}

/*
1. buat pengulangan 1-50
2. jika bilangan tersebut habis dibagi 3 maka bilangan diganti teks "Ipin"
3. jika bilangan tersebut habis dibagi 5 maka bilangan diganti teks "Upin"
4. jika bilangan tersebut habis dibagi 3 dan 5 maka bilangan diganti teks "Ipin dan Upin selamanya"
*/
for ($Merli = 1; $Merli <= 50; $Merli++) {
    if ($Merli % 3 == 0 && $Merli % 5 == 0) {
        echo "Ipin dan Upin selamanya <br>";
    } elseif ($Merli % 3 == 0) {
        echo "Ipin <br>";
    } elseif ($Merli % 5 == 0) {
        echo "Upin <br>";
    } else {
        echo $Merli . "<br>";
    }
}
?>