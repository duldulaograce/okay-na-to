<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mary Grace Duldulao – Portfolio</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #111;
      color: #fff;
      line-height: 1.6;
    }

    /* Hero Section */
    .hero {
      background: url('red.jpg') center/cover no-repeat;
      text-align: center;
      padding: 80px 20px;
      border-bottom: 5px solid #e62429;
    }

    .hero .profile-pic {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      border: 5px solid #e62429;
      margin-bottom: 20px;
      box-shadow: 0 0 25px #e62429;
    }

    .hero h1 {
      font-size: 2.8rem;
      color: #fff;
      text-shadow: 3px 3px 8px black;
    }

    .hero .tagline {
      font-size: 1.2rem;
      margin: 15px 0;
      color: #ffcc00;
      font-weight: bold;
      text-shadow: 2px 2px 5px black;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 35px;
      background: linear-gradient(45deg, #e62429, #ffcc00);
      color: #111;
      font-weight: bold;
      border-radius: 30px;
      text-decoration: none;
      transition: 0.3s;
      box-shadow: 0 0 15px rgba(255,0,0,0.7);
      text-transform: uppercase;
    }

    .btn:hover {
      transform: scale(1.1);
      background: linear-gradient(45deg, #ffcc00, #e62429);
      color: #fff;
    }

    /* Sections */
    .section {
      padding: 60px 20px;
      max-width: 900px;
      margin: auto;
    }

    .section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      border-left: 6px solid #e62429;
      padding-left: 10px;
      color: #ffcc00;
      text-transform: uppercase;
    }

    .section p, .section ul, .section li {
      font-size: 1rem;
      color: #eee;
    }

    .bg-light {
      background: #1a1a1a;
      border-top: 4px solid #e62429;
      border-bottom: 4px solid #e62429;
    }

    /* Skills Grid */
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }

    .skills-grid span {
      display: block;
      background: #e62429;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
      font-weight: bold;
      color: #fff;
      box-shadow: 0 4px 12px rgba(0,0,0,0.5);
      transition: 0.3s;
    }

    .skills-grid span:hover {
      background: #ffcc00;
      color: #111;
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      text-align: center;
      background: #e62429;
      padding: 20px;
      margin-top: 40px;
      color: #fff;
      font-weight: bold;
      letter-spacing: 1px;
    }
  </style>
</head>
<body>

  <!-- Hero -->
  <header class="hero">
    <div class="container">
      <img src="mary.jpg" alt="Profile Photo" class="profile-pic">
      <h1>Mary Grace Duldulao</h1>
      <p class="tagline">Information Technology Student | Future Hero in Tech</p>
      <a href="contact-dul.php" class="btn">Contact Me</a>
    </div>
  </header>

  <!-- About -->
  <section id="about" class="section">
    <h2>About Me</h2>
    <p>
      A driven and detail-oriented professional with a strong track record in rapid learning and exceptional time
      management skills. Known for a positive attitude, fostering meaningful relationships, and contributing to customer
      satisfaction in both private and government settings. A student at Tarlac State University. A hardworking and passionate
      individual seeking an entry-level Part-Time position. Eager to contribute to team success through excellent
      organizational and communication skills.
    </p>
  </section>

  <!-- Education -->
  <section id="education" class="section bg-light">
    <h2>Education</h2>
    <ul>
      <li><strong>Tarlac State University:</strong> BS in Information Technology major in Web and Mobile Application (2025–2026)</li>
      <li>TESDA Certified (NCII) (2018–2019)</li>
      <li>Padapada National High School (ICT) (2018–2019)</li>
    </ul>
  </section>

  <!-- Skills -->
  <section id="skills" class="section">
    <h2>Skills</h2>
    <div class="skills-grid">
      <span>Microsoft Excel</span>
      <span>Typing Skill</span>
      <span>Basic Photography</span>
      <span>Data Oriented</span>
      <span>Analytical Thinking</span>
      <span>Time Management</span>
    </div>
  </section>

  <!-- Experience -->
  <section id="experience" class="section bg-light">
    <h2>Experience</h2>
    <p>
      • Intern – City Information Office (Tarlac City) (June 2025–July 2025)<br>
      • Third Member – Board of Election Inspectors Commission on Elections (COMELEC) – May 2025<br>
      • Intern Data Encoder (My Creative Panda Inc.) – Extracted and compiled audit data (Nov 2018–Dec 2018)<br>
      • Staff – Commission on Election (Apr 2022–May 2022)
    </p>
  </section>

  <footer>
    <p>&copy; 2025 WMA-4C | FreeVengers</p>
  </footer>

</body>
</html>
