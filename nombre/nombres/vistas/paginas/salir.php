<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Presentación de Lunita</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f0f4ff;
      color: #333;
      padding: 2rem;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: #fff;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .photos {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }

    .photos img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      object-fit: cover;
      height: 150px;
    }

    h1 {
      font-size: 2rem;
      color: #6b4eff;
    }

    h2 {
      margin-top: 2rem;
      color: #444;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    li {
      margin-bottom: 1rem;
      font-weight: bold;
      display: flex;
      align-items: center;
    }

    li::before {
      content: "🎨";
      margin-right: 0.5rem;
    }

    p {
      margin-top: 2rem;
      font-style: italic;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Hola, soy Karina, pero me gusta que me digan <strong>Lunita</strong> 🌙</h1>

    <h2>Cosas que me gusta hacer:</h2>
    <ul>
      <li> Dibujar</li>
      <li> Escuchar música</li>
      <li> Hacer videos</li>
      <li> Pintar</li>
      <li> Estar con mi novio 737 💖</li>
    </ul>

    <h2>Fotos de lo que me gusta:</h2>
    <div class="photos">
      <img src="https://www.w3schools.com/w3images/rocks.jpg" alt="Dibujo">
      <img src="https://www.w3schools.com/w3images/fjords.jpg" alt="Escuchando música">
      <img src="https://www.w3schools.com/w3images/lights.jpg" alt="Captura de un video">
      <img src="https://www.w3schools.com/w3images/mountains.jpg" alt="Pintura terminada">
      <img src="https://www.w3schools.com/w3images/nature.jpg" alt="Foto con 737">
    </div>

    <p>Actualmente estoy muy interesada en saber cómo funciona una neurona artificial 🤖, y cómo implementarla en un robot.</p>
  </div>
</body>
</html>
