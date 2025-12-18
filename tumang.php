<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daniel Tumang – Portfolio</title>
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

  <header class="hero">
    <div class="container">
      <img src="tumang.jpg" alt="Profile Photo" class="profile-pic">
      <h1>Daniel Tumang</h1>
      <p class="tagline">Information Technology Student | Future Hero in Tech</p>
       <a href="contact.php" class="btn">Contact Me</a>
    </div>
  </header>

  <section id="about" class="section">
    <h2>About Me</h2>
    <p>
      I am an Information Technology student passionate about solving problems through technology.  
      Skilled in web design, databases, and programming, I enjoy creating clean and user-friendly solutions.  
      I am hardworking, goal-oriented, and eager to expand my knowledge to become a professional IT expert in the future.  
    </p>
  </section>

  <section id="education" class="section bg-light">
    <h2>Education</h2>
    <ul>
      <li><strong>BS Information Technology</strong> – Tarlac State University (Expected 2026)</li>
      <li><strong>Senior High School (ABM Strand)</strong> – Benigno S. Aquino National High School (2020–2022)</li>
      <li><strong>Junior High School</strong> – Benigno S. Aquino National High School (2018–2020)</li>
      <li><strong>Elementary</strong> – San Nicolas Balas Elementary School (2012–2018)</li>
    </ul>
  </section>

  <section id="skills" class="section">
    <h2>Skills</h2>
    <div class="skills-grid">
      <span>HTML5 & CSS3</span>
      <span>PHP & MySQL</span>
      <span>JavaScript Basics</span>
      <span>Git & GitHub</span>
      <span>Problem Solving</span>
      <span>IT Fundamentals</span>
    </div>
  </section>

  <section id="experience" class="section bg-light">
    <h2>Experience</h2>
    <p>
      • Designed and developed responsive websites with PHP, HTML, and CSS <br>
      • Worked on capstone projects with a team <br>
      • Built interactive static and dynamic web pages using XAMPP environment <br>
      • Collaborated in projects applying database and system design principles
    </p>
  </section>

 <section id="weather" class="section">
  <h2>Weather</h2>
  <div id="weather-box" style="
      max-width: 400px;
      margin: auto;
      background: linear-gradient(to bottom, #1c1c1c, #2e2e2e);
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      color: #fff;
      font-family: 'Poppins', sans-serif;
    ">
    <div style="text-align:center;">
      <h3 id="weather-location" style="font-size:1.2rem;color:#ffcc00;margin-bottom:5px;">Tarlac City</h3>
      <p id="weather-date" style="font-size:0.9rem;color:#ccc;margin-bottom:20px;">Loading...</p>
      <div id="weather-icon" style="font-size:60px;margin-bottom:15px;">⏳</div>
      <p id="weather-temp" style="font-size:3rem;font-weight:bold;margin:5px 0;">--°C</p>
      <p id="weather-desc" style="font-size:1.1rem;margin-bottom:15px;">Loading...</p>
    </div>

    <div style="display:flex;justify-content:space-between;font-size:0.95rem;margin-top:15px;">
      <div style="text-align:center;">
        <p>Wind</p>
        <p id="weather-wind">-- km/h</p>
      </div>
      <div style="text-align:center;">
        <p>Humidity</p>
        <p id="weather-humidity">--%</p>
      </div>
      <div style="text-align:center;">
        <p>Feels Like</p>
        <p id="weather-feels">--°C</p>
      </div>
    </div>

    <div id="weather-forecast" style="display:flex;justify-content:space-between;margin-top:25px;font-size:0.85rem;"></div>
  </div>
</section>

<script>
function getWeatherIcon(code) {
  const icons = {
    0: '☀️', 1: '🌤️', 2: '⛅', 3: '☁️',
    45: '🌫️', 48: '🌫️',
    51: '🌦️', 53: '🌦️', 55: '🌦️',
    61: '🌧️', 63: '🌧️', 65: '🌧️',
    71: '❄️', 73: '❄️', 75: '❄️',
    80: '🌧️', 81: '🌧️', 82: '🌧️',
    95: '⛈️', 96: '⛈️', 99: '⛈️'
  };
  return icons[code] || '🌡️';
}

fetch('https://api.open-meteo.com/v1/forecast?latitude=15.48&longitude=120.59&current_weather=true&hourly=temperature_2m,weathercode&temperature_unit=celsius&windspeed_unit=kmh')
  .then(res => res.json())
  .then(data => {
    const w = data.current_weather;

    document.getElementById('weather-location').textContent = 'Tarlac City';
    document.getElementById('weather-date').textContent = new Date().toLocaleString('en-US', { weekday: 'long', hour: '2-digit', minute: '2-digit' });

    document.getElementById('weather-icon').textContent = getWeatherIcon(w.weathercode);
    document.getElementById('weather-temp').textContent = w.temperature + '°C';
    document.getElementById('weather-desc').textContent = w.weathercode === 0 ? 'Clear Sky' : 'Condition Code: ' + w.weathercode;
    document.getElementById('weather-wind').textContent = w.windspeed + ' km/h';
    document.getElementById('weather-humidity').textContent = w.relativehumidity ?? 'N/A';
    document.getElementById('weather-feels').textContent = w.apparent_temperature ?? w.temperature + '°C';

    const forecast = data.hourly;
    const forecastBox = document.getElementById('weather-forecast');
    forecastBox.innerHTML = '';
    for (let i = 1; i <= 5; i++) {
      const time = new Date(forecast.time[i]).getHours() + ':00';
      const temp = forecast.temperature_2m[i] + '°C';
      const icon = getWeatherIcon(forecast.weathercode[i]);
      forecastBox.innerHTML += `
        <div style="text-align:center;">
          <p>${time}</p>
          <p style="font-size:24px;">${icon}</p>
          <p>${temp}</p>
        </div>
      `;
    }
  })
  .catch(() => {
    document.getElementById('weather-desc').textContent = 'Unable to load weather data.';
  });
</script>

<footer>
    <p>&copy; 2025 WMA-4C | Powered by Marvel-style Energy ⚡</p>
  </footer>

</body>
</html>
