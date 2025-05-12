<?php
require_once "modelos/formularios.modelo.php";
$personajes = ModeloFormularios::obtenerPersonajes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Alumnos</title>
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

    .table-container {
      max-width: 1000px;
      margin: auto;
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #6b4eff;
      margin-bottom: 2rem;
    }
 li::before {
      content: "🎨";
      margin-right: 0.5rem;
    }

    table {
      width: 100%;
    }

    .btn-editar {
      background-color: #6b4eff;
      color: #fff;
    }

    .btn-editar:hover {
      background-color: #5840d4;
    }

    .btn-eliminar {
      background-color: #ff4d4d;
      color: #fff;
    }

    .btn-eliminar:hover {
      background-color: #cc0000;
    }

    .btn-volver {
      display: block;
      width: fit-content;
      margin: 2rem auto 0;
      background-color: #4caf50;
      color: white;
      font-weight: bold;
    }

    .btn-volver:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>

  <div class="table-container">
    <h1>Lista de Alumnos</h1>

    <table class="table table-bordered table-hover text-center">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Alumno</th>
          <th>Materia</th>
          <th>Calificación</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($personajes as $personaje): ?>
          <tr>
            <td><?php echo htmlspecialchars($personaje["id"]); ?></td>
            <td><?php echo htmlspecialchars($personaje["personaje"]); ?></td>
            <td><?php echo htmlspecialchars($personaje["saga"]); ?></td>
            <td><?php echo htmlspecialchars($personaje["especie"]); ?></td>
            <td>
              <a href="index.php?pagina=ingreso&id=<?php echo $personaje['id']; ?>" class="btn btn-editar btn-sm"><i class="fas fa-edit"></i> Editar</a>
              <a href="vistas/paginas/eliminar.php?id=<?php echo $personaje["id"]; ?>" class="btn btn-eliminar btn-sm" onclick="return confirm('¿Estás seguro de eliminar este Alumno?')">
                <i class="fas fa-trash-alt"></i> Eliminar
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <a href="index.php" class="btn btn-volver mt-4"><i class="fas fa-home"></i> Volver al inicio</a>
  </div>

</body>
</html>
