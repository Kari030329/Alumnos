<?php
require_once("modelos/formularios.modelo.php");

// Verifica si hay datos para editar
$personaje = [
    "id" => "",
    "personaje" => "",
    "saga" => "",
    "especie" => ""
];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $personaje = ModeloFormularios::obtenerPersonajePorId($id);
    if (!$personaje) {
        echo "<p>Personaje no encontrado.</p>";
        exit;
    }
}

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $datos = [
        "personaje" => $_POST["personaje"],
        "saga" => $_POST["saga"],
        "especie" => $_POST["especie"]
    ];

    if (!empty($_POST["id"])) {
        $datos["id"] = $_POST["id"];
        $respuesta = ModeloFormularios::actualizarPersonaje($datos);
    } else {
        $respuesta = ModeloFormularios::mdlRegistro("personajes", $datos);
    }

    if ($respuesta === "ok") {
        echo "<script>alert('Guardado correctamente'); window.location.href='index.php';</script>";
        exit;
    } else {
        echo "<p>Error al guardar.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Edición de Personaje</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap y Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #eef3ff;
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

    h1 {
      text-align: center;
      color: #6b4eff;
      margin-bottom: 1.5rem;
    }

    .form-group label {
      font-weight: bold;
    }

    .input-group-text {
      background-color: #e3e8ff;
      border: none;
    }

    .form-control {
      border-radius: 0 5px 5px 0;
    }
 li::before {
      content: "🎨";
      margin-right: 0.5rem;
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

    .alert {
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1><?php echo empty($personaje["id"]) ? "Registrar Alumno" : "Editar Alumno"; ?></h1>

    <form method="POST">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($personaje["id"]); ?>">

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

      <button type="submit" class="btn btn-primary">
        <?php echo empty($personaje["id"]) ? "📝 Registrar" : "💾 Actualizar"; ?>
      </button>
    </form>
  </div>

</body>
</html>
