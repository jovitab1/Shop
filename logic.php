<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (strlen(preg_replace("/[^a-z]/i", "", $_POST['item'])) >= 3 && strlen(preg_replace("/[^a-z]/i", "", $_POST['category']))) {
        $_SESSION['shop'][] = ['item' => $_POST['item'], 'category' =>  $_POST['category']];
    }
    header("Location: ./index.php");
    die;
}
if (!isset($_SESSION['shop'])) {
    $_SESSION['shop'] = [];
}


//}
//print_r($_SESSION['shop']); // idejus preke eroro nebemeta
//echo "<br>";
//echo "<br>";
//echo "<br>";
//print_r(($_POST));

/// pakiesti visas raides i tuscia stringa

//$string='ababcd12358445%&^%$#@@@@@';
//echo $string;
//print_r (preg_replace("/[^a-z]/i", " ", $string));


?>

<!-- sukurtumėte puslapį "pirkinių sąrašas" 
make it nice
 puslapyje turi būti duomenų suvedimo forma su dviem laukeliais. pirkinys ir kategorija. Forma = POST
 įvestus duomenis saugokite sesijoje. $_SESSION['shop'][] = ['item' => 'obuoliai', 'category' => 'fruits'];
atvaizduoti prekių sąrašą.
jei prekių nėra - turi nemesti erorų. ir šiaip. JOKIŲ ERORRŲ! =)
atvaizduojame duomenis table  -->