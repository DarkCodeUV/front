<?php
$connect = new mysqli("3.86.209.36", "root", "-------", "-----");
 
$sqlQuery = "SELECT * FROM api order by color asc, date asc";
$qry = $connect->query($sqlQuery);
 
echo "<table><tr><th>Nombre</th><th>Prioridad</th><th>Llegada</th></tr>";
while($row = $qry->fetch_assoc()){
echo "<tr><td>".$row["name"]."</td><td>".$row["color"]."</td><td>".$row["date"]."</td></tr>";
}
 
echo "</table>";
?>