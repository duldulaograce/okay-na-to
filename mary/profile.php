<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aveng-ish Team</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, #111, #e62429);
      color: white;
      text-align: center;
      min-height: 100vh;  /* fill screen height */
      display: flex;
      flex-direction: column;
      justify-content: center; /* center content vertically */
    }

    h1 {
      margin-bottom: 40px;
      font-size: 2.5rem;
      text-shadow: 2px 2px 5px black;
    }

    .team {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
    }

    .member {
      width: 200px;
      text-align: center;
      background: rgba(255,255,255,0.1);
      border-radius: 20px;
      padding: 20px;
      transition: 0.3s;
      box-shadow: 0 8px 20px rgba(0,0,0,0.5);
      cursor: pointer;
    }

    .member:hover {
      transform: scale(1.1) rotate(-2deg);
      background: rgba(255,255,255,0.2);
    }

    .member img {
      width: 100%;
      border-radius: 15px;
      margin-bottom: 15px;
      border: 3px solid #fff;
    }

    .member h2 {
      font-size: 1.2rem;
      margin: 0;
    }

    a {
      text-decoration: none;
      color: white;
    }
  </style>
</head>
<body>
  <div>
    <h1>Profiles</h1>
    <div class="team">
      <a href="page.php">
        <div class="member">
          <img src="grace.jpg" alt="Iron Man">
          <h2>Iron Grace</h2>
        </div>
      </a>

      <a href="Jhiro.php">
        <div class="member">
          <img src="pfp.jpg" alt="Spider-Man">
          <h2>JhiroX</h2>
        </div>
      </a>

      <a href="hulk.html">
        <div class="member">
          <img src="soliman.jpg" alt="Hulk">
          <h2>The Hulk</h2>
        </div>
      </a>

      <a href="thor.html">
        <div class="member">
          <img src="tumang.jpg" alt="Thor">
          <h2>Captain redhawks</h2>
        </div>
      </a>
    </div>
  </div>
</body>
</html>
