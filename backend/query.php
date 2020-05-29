<html>
<body>
<?php /** @var TYPE_NAME $link */
 echo "<link rel='stylesheet' href='css/style.css' type='text/css'>" ;     
echo"<style>body,html{ position:relative; top:100px; left: 280px; color: white; background-color: black;}</style>"; 
$link = mysqli_connect("localhost", "deepank", "deepank", "heka");
if ($link == false) {
die("ERROR: Could not connect. ".mysqli_connect_error());
}
$sym1=$_POST["val1"];
$sym2=$_POST["val2"];
$sql = "SELECT DISTINCT DISEASE FROM bot WHERE SYMPTOMS = '$sym1' OR SYMPTOMS = '$sym2' LIMIT 5";
if ($res = mysqli_query($link, $sql)) {
if (mysqli_num_rows($res) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th align = 'center'> <b> PLAUSIBLE DISEASES </b> </th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>".$row['DISEASE']."</td>";
    echo "</tr>";
    }
    echo "</table>";
mysqli_free_result($res);
}
else {
echo "No matching records are found.";
}
}
else {
echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);
}
mysqli_close($link);
?>
</body>
</html>