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
        echo "<div class='mx-auto' style='width: 80%;'>";
        echo "<table class='table'>";
        echo "<tr style='background-color: #f2f2f2;'><th>ID</th><th>Nombre</th><th>Apellido</th><th>Tema</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['id_orador'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['nombre'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['apellido'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'>" . $row['tema'] . "</td>";
            echo "<td style='border: 1px solid #ddd; padding: 8px;'><a href='php/CRUD/delete.php?id=" . $row['id_orador'] . "' class='btn btn-danger w-100'>Delete</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo "No data found";
    };
    ?>

    <div class="crud mt-5 mx-auto">
        <section class="edit-section">
            <h2>Editar un orador</h2>
            <form action="php/CRUD/update.php" method="POST" class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" id="id" placeholder="ID" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <input type="text" class="form-control" name="tema" id="tema" placeholder="Tema" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100 d-block">Editar</button>
            </form>
        </section>
    </div>

    <?php mysqli_close($conexion); ?>

    <?php include_once("layout/footer.php"); ?>
</body>

</html>