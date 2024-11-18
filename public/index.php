<?php
require_once '../config/db.php';
include '../includes/header.php';

// Consulta a la base de datos
$sql = "SELECT id, temperature, humidity, ledState, fecha_hora FROM datos_sensor ORDER BY fecha_hora DESC";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="../style/style.css">
<div class="tabla-container">
    <table>
        <tr>
            <th>id</th>
            <th>Temperatura</th>
            <th>Humedad</th>
            <th>Bombillo LED</th>
            <th>fecha_creación</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["temperature"] . "° </td>";
                echo "<td>" . $row["humidity"] . "% </td>";
                echo "<td>" . ($row["ledState"] ? "Encendido" : "Apagado") . "</td>";
                echo "<td>" . $row["fecha_hora"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay datos disponibles</td></tr>";
        }
        ?>
    </table>
</div>

<?php
include '../includes/footer.php';
$conn->close();
?>
