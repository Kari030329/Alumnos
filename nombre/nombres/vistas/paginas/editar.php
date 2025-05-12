<?php
require_once('../../modelos/formularios.modelo.php');

if (!isset($_GET["id"])) {
    echo "ID no proporcionado.";
    exit;
}

$id = $_GET["id"];
$personaje = ModeloFormularios::obtenerPersonajePorId($id);

if (!$personaje) {
    echo "Personaje no encontrado.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $datos = [
        "id" => $id,
        "personaje" => $_POST["personaje"],
        "saga" => $_POST["saga"],
        "especie" => $_POST["especie"]
    ];

    $respuesta = ModeloFormularios::actualizarPersonaje($datos);

    if ($respuesta === "ok") {
        echo "<script>alert('Alumno actualizado correctamente'); window.location.href='../../index.php';</script>";
        exit;
    } else {
        echo "<p>Error al actualizar el Alumno.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Alumno</title>
  <!-- Bootstrap y Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #f0f4ff;
      font-family: 'Segoe UI', sans-serif;
      padding: 2rem;
    }

    .form-container {
      max-width: 600px;
      margin: auto;
      background: #ffffff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #6b4eff;
      margin-bottom: 2rem;
    }

    .form-group label {
      font-weight: 600;
    }

    .input-group-text {
      background-color: #e3e8ff;
      border: none;
    }

    .form-control {
      border-radius: 0 5px 5px 0;
    }

    .btn-primary {
      width: 100%;
      background-color: #6b4eff;
      border: none;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #5840d4;
    }

    .cancel-link {
      display: inline-block;
      margin-top: 1rem;
      color: #6b4eff;
      text-decoration: none;
      text-align: center;
      width: 100%;
    }

    .cancel-link:hover {
      color: #333;
    }
 li::before {
      content: "🎨";
      margin-right: 0.5rem;
    }

    .alert {
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Editar Alumno</h2>

    <form method="POST">
      <div class="form-group">
        <label for="personaje">Alumno:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" id="personaje" name="personaje"
                 value="<?php echo htmlspecialchars($personaje["personaje"]); ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="saga">Materia:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-book"></i></span>
          </div>
          <input type="text" class="form-control" id="saga" name="saga"
                 value="<?php echo htmlspecialchars($personaje["saga"]); ?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="especie">Calificación:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-star"></i></span>
          </div>
          <input type="text" class="form-control" id="especie" name="especie"
                 value="<?php echo htmlspecialchars($personaje["especie"]); ?>" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">💾 Actualizar</button>
      <a href="../../index.php" class="cancel-link">Cancelar</a>
    </form>
  </div>

</body>
</html>
