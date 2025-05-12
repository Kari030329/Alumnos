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

// Confirmación y eliminación
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $respuesta = ModeloFormularios::eliminarPersonaje($id);

    if ($respuesta === "ok") {
        echo "<script>alert('Personaje eliminado correctamente'); window.location.href='../index.php';</script>";
        exit;
    } else {
        echo "<p>Error al eliminar el personaje.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar</title>
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

<div class="confirm-box">
    <h2>¿Estás seguro que deseas eliminar a <br>"<?php echo htmlspecialchars($personaje["Alumno"]); ?>"?</h2>
    <form method="POST">
        <button type="submit">Sí, eliminar</button>
        <a href="../../index.php">Cancelar</a>
    </form>
</div>

</body>
</html>
