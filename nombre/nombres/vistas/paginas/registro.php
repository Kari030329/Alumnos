<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Creación de Alumno</title>
  <!-- Bootstrap y Font Awesome (para los íconos) -->
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

    h1 {
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
    <h1>Creación de Alumno</h1>

    <form method="post">

      <div class="form-group">
        <label for="personaje">Alumno:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" id="personaje" name="registroPersonaje" placeholder="Nombre del alumno">
        </div>
      </div>

      <div class="form-group">
        <label for="saga">Materia:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-book"></i></span>
          </div>
          <input type="text" class="form-control" id="saga" name="registroSaga" placeholder="Nombre de la materia">
        </div>
      </div>

      <div class="form-group">
        <label for="especie">Calificación:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-star"></i></span>
          </div>
          <input type="text" class="form-control" id="especie" name="registroEspecie" placeholder="Ej. 9.5">
        </div>
      </div>

      <?php 
        $registro = ControladorFormularios::ctrRegistro();
        if($registro == "ok") {
          echo '<script>
            if (window.history.replaceState) {
              window.history.replaceState(null, null, window.location.href);
            }
          </script>';
          echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
        }
      ?>

      <button type="submit" class="btn btn-primary">🕹️ Agregar 🕹️</button>
    </form>
  </div>

</body>
</html>
