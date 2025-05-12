<?php
require_once('../../modelos/formularios.modelo.php');

$modoLectura = false;
$personaje = [
    "personaje" => "",
    "saga" => "",
    "especie" => ""
];

if (isset($_GET["id"])) {
    $personaje = ModeloFormularios::obtenerPersonajePorId($_GET["id"]);
    if (!$personaje) {
        echo "Personaje no encontrado.";
        exit;
    }
    $modoLectura = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $modoLectura ? 'Detalles del Personaje' : 'Ingresar Personaje'; ?></title>
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
 li::before {
      content: "🎨";
      margin-right: 0.5rem;
    }

    .cancel-link:hover {
      color: #333;
    }

    .alert {
      margin-top: 1rem;
    }
  </style>
</head>
<body>

<h2><?php echo $modoLectura ? 'Detalle del Personaje' : 'Ingresar Personaje'; ?></h2>

<form method="POST" action="crear.php">
    <label>Alumno:</label>
    <input type="label" name="personaje" value="<?php echo htmlspecialchars($personaje["personaje"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <label>Materia:</label>
    <input type="label" name="saga" value="<?php echo htmlspecialchars($personaje["saga"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <label>Calificacion:</label>
    <input type="label" name="especie" value="<?php echo htmlspecialchars($personaje["especie"]); ?>" <?php echo $modoLectura ? 'readonly class="readonly"' : ''; ?> required>

    <?php if (!$modoLectura): ?>
        <input type="submit" value="Guardar">
    <?php endif; ?>
	<br>
	<br>
    <a class="button" href="../../index.php">Volver</a>
</form>

</body>
</html>
