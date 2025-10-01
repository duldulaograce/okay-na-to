<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FreeVengers</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #111;
      color: white;
      overflow-x: hidden;
    }

    header {
      text-align: center;
      padding: 80px 20px;
      background: linear-gradient(to right, #e50914, #111);
      color: white;
      text-shadow: 0 0 10px black;
    }
    header h1 {
      font-size: 3.5rem;
      font-weight: 900;
      text-transform: uppercase;
      animation: bounce 1.5s infinite alternate;
    }
    header p {
      font-size: 1.2rem;
      margin: 15px auto;
      max-width: 600px;
    }
    .cta-btn {
      background: yellow;
      color: black;
      padding: 15px 40px;
      border: none;
      border-radius: 50px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      margin-top: 20px;
      transition: 0.3s;
    }
    .cta-btn:hover {
      background: #e50914;
      color: white;
      transform: scale(1.1) rotate(-2deg);
    }

    @keyframes bounce {
      from { transform: scale(1); }
      to { transform: scale(1.05); }
    }

    section {
      padding: 70px 20px;
      text-align: center;
    }
    section h2 {
      font-size: 2.5rem;
      margin-bottom: 40px;
      color: #e53935;
      text-shadow: 0 0 15px #e53935;
    }

    .character-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }
    .character-card {
      background: #1c1c1c;
      border-radius: 10px;
      padding: 20px;
      width: 250px;
      border: 3px dashed yellow;
      transition: 0.3s;
      text-align: center;
    }
    .character-card:hover {
      transform: translateY(-10px) rotate(-2deg);
      background: #2a2a2a;
    }
    .character-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .character-card h3 {
      margin: 10px 0;
      color: #ff5252;
      font-size: 1.3rem;
    }
    .character-card p {
      font-size: 0.95rem;
      color: #ddd;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #000;
      font-size: 1rem;
      color: #aaa;
    }
  </style>
</head>
<body>
<body>


<!-- Hero Section -->
<header>
  <h1>FreeVengers Group</h1>
  <p>“Like mushrooms, we grow anywhere… but never where we choose.”</p>
  <a href="profile.php">
  <button class="cta-btn">Who are FreeVengers?</button>
</a>

</header>

<!-- Characters -->
<section>
  <h2>Meet the Freevengers Group</h2>
  <div class="character-list">
    <div class="character-card">
      <img src="grace.jpg" alt="Spider-Man">
      <h3>Iron Grace</h3>
      <p>When hope fades, Grace rises.</p>
    </div>
    <div class="character-card">
      <img src="pfp.jpg" alt="Iron Man">
      <h3>JhiroX</h3>
      <p>Billionaire genius. Also spends 90% of his time updating his suit’s WiFi drivers.</p>
    </div>
    <div class="character-card">
      <img src="soliman.jpg" alt="Captain America">
      <h3>The hack</h3>
      <p>Walang forever… pero may forever bug sa system”</p>
    </div>
    <div class="character-card">
      <img src="tumang.jpg" alt="Black Widow">
      <h3>Captain redhawks</h3>
      <p>Kung mahal ka niya, di ka niya i-le-let go… unlike files ko sa recycle bin.</p>
    </div>
  </div>
</section>

<!-- About -->
<section>
  <h2>About Our FreeVengers Group</h2>
  <p style="max-width:700px; margin:auto; color:#ccc; font-size:1.1rem;">
    We are the FREENNVENGERS—a band of ordinary students scattered 
    into different sections, united by one destiny: to be free… 
    even if we didn’t really have a choice.  
  </p>
</section>

<!-- Call to Action -->
<section>
  <h2>🚀 Wanna Save the World?</h2>
  <p>Or at least save your snacks from disappearing?</p>
  <button class="cta-btn">Apply to Be a Hero</button>
</section>

<!-- Footer -->
<footer>
  &copy; 2025 Marvel-ish Universe | “Excelsior, but make it awkward.”  
</footer>

</body>
</html>
