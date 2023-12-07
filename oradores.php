<!DOCTYPE html>
<html lang="es-AR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los oradores</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include_once("layout/nav.php"); ?>

    <?php include_once("php/conexion.php"); ?>

    <?php
    $query = "SELECT * FROM oradores";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table style='width:100%; border-collapse: collapse;'>";
        echo "<tr style='background-color: #f2f2f2;'><th>ID</th><th>Name</th><th>Topic</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['nombre'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['apellido'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['tema'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No data found";
    }
    ?>

    <?php mysqli_close($conexion); ?>

    <?php include_once("layout/footer.php"); ?>
</body>

</html>