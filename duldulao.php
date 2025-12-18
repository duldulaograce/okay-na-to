<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mary Grace Duldulao – Portfolio</title>

  <style>
   
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
      text-shadow: 3px 3px 8px black;
    }
    .tagline {
      font-size: 1.2rem;
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
      text-transform: uppercase;
    }
    .btn:hover {
      transform: scale(1.1);
    }

  
    .section {
      padding: 60px 20px;
      max-width: 900px;
      margin: auto;
    }
    .section h2 {
      font-size: 2rem;
      color: #ffcc00;
      border-left: 6px solid #e62429;
      padding-left: 10px;
      margin-bottom: 25px;
      text-transform: uppercase;
    }


    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 15px;
    }
    .skills-grid span {
      background: #e62429;
      padding: 12px;
      text-align: center;
      border-radius: 8px;
      font-weight: bold;
      transition: 0.3s;
    }
    .skills-grid span:hover {
      background: #ffcc00;
      color: #111;
      transform: scale(1.05);
    }

    .bg-light {
      background: #1a1a1a;
      border-top: 4px solid #e62429;
      border-bottom: 4px solid #e62429;
    }

    .calculator-container {
      max-width: 400px;
      margin: auto;
      background: #222;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(255,0,0,0.4);
    }

    .calculator-display {
      width: 100%;
      background: black;
      color: #0f0;
      padding: 15px;
      font-size: 1.6rem;
      border-radius: 8px;
      margin-bottom: 15px;
      text-align: right;
      font-family: monospace;
      border: 2px solid #e62429;
    }

    .calc-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }

    .calc-btn {
      padding: 15px;
      background: #333;
      border-radius: 8px;
      border: none;
      color: white;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.2s;
    }
    .calc-btn:hover {
      background: #e62429;
      transform: scale(1.05);
    }

    .history-box {
      background: #111;
      padding: 10px;
      margin-top: 20px;
      border-radius: 10px;
      font-size: 0.9rem;
      max-height: 120px;
      overflow-y: auto;
      border: 1px solid #444;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #e62429;
      margin-top: 40px;
      font-weight: bold;
    }
  </style>
</head>

<body>


  <header class="hero">
    <img src="duls.jpg" class="profile-pic" alt="">
    <h1>Mary Grace Duldulao</h1>
    <p class="tagline">Information Technology Student | Future Hero in Tech</p>
    <a href="contact-dul.php" class="btn">Contact Me</a>
  </header>

  <!-- ABOUT -->
  <section class="section">
    <h2>About Me</h2>
    <p>
      A driven and detail-oriented professional with excellent time management, rapid learning, and strong organizational
      skills. Passionate about technology and committed to continuous improvement both academically and professionally.
    </p>
  </section>

  <!-- EDUCATION -->
  <section class="section bg-light">
    <h2>Education</h2>
    <ul>
      <li><strong>Tarlac State University</strong> – BSIT Major in WMA (2025–2026)</li>
      <li>TESDA Certified (NCII) (2018–2019)</li>
      <li>Padapada National High School (ICT) (2018–2019)</li>
    </ul>
  </section>

  <!-- SKILLS -->
  <section class="section">
    <h2>Skills</h2>
    <div class="skills-grid">
      <span>Microsoft Excel</span>
      <span>Typing Skill</span>
      <span>Photography</span>
      <span>Data Oriented</span>
      <span>Analytical Thinking</span>
      <span>Time Management</span>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section class="section bg-light">
    <h2>Experience</h2>
    <p>
      • Intern – City Information Office (Tarlac City, 2025) <br>
      • Board of Election Inspectors – COMELEC (2025) <br>
      • Data Encoder – My Creative Panda Inc. (2018) <br>
      • Staff – Commission on Election (2022)
    </p>
  </section>

  <!-- SCIENTIFIC CALCULATOR -->
  <section class="section">
    <h2>Rubric Powered Resume CheckerS</h2>

    <div class="calculator-container">
      <input type="text" id="display" class="calculator-display" readonly>

      <div class="calc-grid">
        <button class="calc-btn" onclick="append('7')">7</button>
        <button class="calc-btn" onclick="append('8')">8</button>
        <button class="calc-btn" onclick="append('9')">9</button>
        <button class="calc-btn" onclick="append('/')">÷</button>

        <button class="calc-btn" onclick="append('4')">4</button>
        <button class="calc-btn" onclick="append('5')">5</button>
        <button class="calc-btn" onclick="append('6')">6</button>
        <button class="calc-btn" onclick="append('*')">×</button>

        <button class="calc-btn" onclick="append('1')">1</button>
        <button class="calc-btn" onclick="append('2')">2</button>
        <button class="calc-btn" onclick="append('3')">3</button>
        <button class="calc-btn" onclick="append('-')">−</button>

        <button class="calc-btn" onclick="append('0')">0</button>
        <button class="calc-btn" onclick="append('.')">.</button>
        <button class="calc-btn" onclick="calculate()">=</button>
        <button class="calc-btn" onclick="append('+')">+</button>

        <button class="calc-btn" onclick="append('Math.sin(')">sin</button>
        <button class="calc-btn" onclick="append('Math.cos(')">cos</button>
        <button class="calc-btn" onclick="append('Math.tan(')">tan</button>
        <button class="calc-btn" onclick="append(')')">)</button>

        <button class="calc-btn" onclick="append('Math.sqrt(')">√</button>
        <button class="calc-btn" onclick="append('Math.log(')">log</button>
        <button class="calc-btn" onclick="clearDisplay()">C</button>
        <button class="calc-btn" onclick="deleteLast()">⌫</button>
      </div>

      <div class="history-box" id="history"></div>
    </div>
  </section>

  <script>
    let history = [];

    function append(value) {
      document.getElementById("display").value += value;
    }

    function clearDisplay() {
      document.getElementById("display").value = "";
    }

    function deleteLast() {
      let current = document.getElementById("display").value;
      document.getElementById("display").value = current.slice(0, -1);
    }

    function calculate() {
      const display = document.getElementById("display");
      try {
        let result = eval(display.value);
        history.unshift(display.value + " = " + result);
        display.value = result;
        updateHistory();
      } catch {
        display.value = "Error";
      }
    }

    function updateHistory() {
      let box = document.getElementById("history");
      box.innerHTML = history.slice(0, 6).join("<br>");
    }
  </script>

  <footer>
    <p>&copy; 2025 WMA-4C | FreeVengers</p>
  </footer>

</body>
</html>
