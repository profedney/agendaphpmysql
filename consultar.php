<?php
include 'conecta.php';

$sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Telefone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["nome"]."</td><td>".$row["telefone"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum contato encontrado";
}
$conn->close();
?>
