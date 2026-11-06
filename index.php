<?php
$file = fopen("log.csv", "r");

if (!$file) {
    die("Errore nell'apertura del file");
}
echo "<table border='1'>";

while (!feof($file)) {
    $row = fgets($file);

    if ($row != "") {
        $celle = explode(",", $row);
        echo "<tr>";
        
        for ($i = 0; $i < count($celle); $i++) {
            echo "<td>" . $celle[$i] . "</td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
fclose($file);
?>