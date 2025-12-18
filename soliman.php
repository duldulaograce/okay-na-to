<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marielle Soliman – Portfolio</title>
<style>
  *{margin:0;padding:0;box-sizing:border-box;}
  body{
    font-family:'Poppins',sans-serif;
    background:#111;
    color:#fff;
    line-height:1.6;
    display:flex;
    flex-direction:column;
    min-height:100vh;
  }
  main{
    flex:1;
  }
  .hero{
    background:url('red.jpg') center/cover no-repeat;
    text-align:center;
    padding:80px 20px;
    border-bottom:5px solid #e62429;
  }
  .hero .profile-pic{
    width:160px;
    height:160px;
    border-radius:50%;
    border:5px solid #e62429;
    margin-bottom:20px;
    box-shadow:0 0 25px #e62429;
  }
  .hero h1{
    font-size:2.8rem;
    color:#fff;
    text-shadow:3px 3px 8px black;
  }
  .hero .tagline{
    font-size:1.2rem;
    margin:15px 0;
    color:#ffcc00;
    font-weight:bold;
    text-shadow:2px 2px 5px black;
  }
  .btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 35px;
    background:linear-gradient(45deg,#e62429,#ffcc00);
    color:#111;
    font-weight:bold;
    border-radius:30px;
    text-decoration:none;
    transition:.3s;
    box-shadow:0 0 15px rgba(255,0,0,.7);
    text-transform:uppercase;
  }
  .btn:hover{
    transform:scale(1.1);
    background:linear-gradient(45deg,#ffcc00,#e62429);
    color:#fff;
  }
  .section{
    padding:60px 20px;
    max-width:900px;
    margin:auto;
  }
  .section h2{
    font-size:2rem;
    margin-bottom:20px;
    border-left:6px solid #e62429;
    padding-left:10px;color:#ffcc00;
    text-transform:uppercase;
  }
  .section p,.section ul,.section li{
    font-size:1rem;color:#eee;
  }
  .bg-light{
    background:#1a1a1a;
    border-top:4px solid #e62429;
    border-bottom:4px solid #e62429;
  }
  .skills-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
    gap:15px;
    margin-top:20px;
  }
  .skills-grid span{
    display:block;
    background:#e62429;
    padding:12px;
    border-radius:8px;
    text-align:center;
    font-weight:bold;
    color:#fff;
    box-shadow:0 4px 12px rgba(0,0,0,.5);
    transition:.3s;
  }
  .skills-grid span:hover{
    background:#ffcc00;
    color:#111;
    transform:scale(1.05);
  }
  footer{
    text-align:center;
    background:#e62429;
    padding:20px;
    color:#fff;
    font-weight:bold;
    letter-spacing:1px;
  }
  #artist-section img{
    width:250px;
    border-radius:12px;
    margin-bottom:15px;
    box-shadow:0 0 15px rgba(0,0,0,.5);
  }
  #artist-buttons button{
    padding:10px 25px;
    margin:10px;
    border:none;
    border-radius:8px;
    background:#e62429;
    color:white;
    cursor:pointer;
    font-weight:bold;
    transition:.3s;
  }
  #artist-buttons button:hover{
    background:#ffcc00;
    color:#111;
    }
</style>
</head>
<body>

<main>
<header class="hero">
  <div class="container">
    <img src="yell.jpg" alt="Profile Photo" class="profile-pic">
    <h1>Marielle Soliman</h1>
    <p class="tagline">Information Technology Student | Future Hero in Tech</p>
    <a href="contact.php" class="btn">Contact Me</a>
  </div>
</header>

<section id="about" class="section">
  <h2>About Me</h2>
  <p>I am an IT student passionate about technology and problem-solving. Skilled in web design, databases, and programming, I strive to create clean, efficient, and user-friendly solutions while continuously growing toward becoming a professional IT expert.</p>
</section>

<section id="education" class="section bg-light">
  <h2>Education</h2>
  <ul>
    <li><strong>BS Information Technology</strong> – Tarlac State University (Expected 2026)</li>
    <li><strong>Senior High School (HUMSS Strand)</strong> – Precious High Academy Inc.(2020–2022)</li>
    <li><strong>Junior High School</strong> – Benigno S. Aquino National High School (2018–2020)</li>
    <li><strong>Elementary</strong> – San Nicolas Balas Elementary School (2012–2018)</li>
  </ul>
</section>

<section id="skills" class="section">
  <h2>Skills</h2>
  <div class="skills-grid">
    <span>HTML5 & CSS3</span>
    <span>Communication</span>
    <span>Teamwork</span>
    <span>Git & GitHub</span>
    <span>Problem Solving</span>
    <span>Adaptability</span>
  </div>
</section>

<section id="experience" class="section bg-light">
  <h2>Experience</h2>
  <p>
    • Used Git & GitHub for version control <br>
    • Designed user-friendly web interfaces <br>
    • Built interactive static and dynamic web pages using XAMPP environment <br>
    • Created responsive websites using PHP, HTML, and CSS <br>
  </p>
</section>

<!-- Artist Viewer Section -->
<section id="artist-section" class="section">
  <h2>Artist Viewer</h2>
  <div id="artist-box" style="background:#1a1a1a;padding:20px;border-radius:12px;text-align:center;box-shadow:0 0 15px rgba(0,0,0,.5);max-width:700px;margin:auto;">
    <img id="artist-img" src="" alt="Artist Image">
    <p id="artist-name" style="font-size:1.5rem;font-weight:bold;">Loading...</p>
    <p id="artist-country" style="margin-top:5px;font-weight:bold;color:#e62429;"></p>
    <div id="artist-buttons">
      <button onclick="prevArtist()">Previous Artist</button>
      <button onclick="nextArtist()">Next Artist</button>
      <button onclick="randomArtist()">Random Artist</button>
    </div>
  </div>
</section>
</main>

<footer>
  <p>&copy; 2025 WMA-4C | Powered by Marvel-style Energy ⚡</p>
</footer>

<script>
const artistNames = [
  "Taylor Swift","Adele","Bruno Mars","Coldplay","Ariana Grande",
  "Ed Sheeran","The Weeknd","Billie Eilish","Imagine Dragons","Dua Lipa",
  "Shawn Mendes","Lady Gaga","Post Malone","Justin Bieber","Katy Perry",
  "Maroon 5","Sam Smith","Halsey","OneRepublic","Camila Cabello",
  "Selena Gomez","Charlie Puth","Doja Cat","Harry Styles","P!nk",
  "Khalid","BTS","Rihanna","Drake","Lizzo",
  "Sia","Miley Cyrus","Normani","Avicii","Zayn",
  "Tove Lo","Lana Del Rey","The Chainsmokers","Coldplay","Billie Joe Armstrong"
];

let currentIndex = 0;

function showArtist() {
  const artistName = artistNames[currentIndex];
  document.getElementById("artist-name").textContent = "Loading...";
  document.getElementById("artist-country").textContent = "";
  document.getElementById("artist-img").src = "";

  fetch(`https://www.theaudiodb.com/api/v1/json/2/search.php?s=${encodeURIComponent(artistName)}`)
    .then(res => res.json())
    .then(data => {
      const artist = data.artists ? data.artists[0] : null;
      if(artist){
        document.getElementById("artist-img").src = artist.strArtistThumb || "";
        document.getElementById("artist-name").textContent = `${artist.strArtist} – ${artist.strGenre}`;
        document.getElementById("artist-country").textContent = `Country: ${artist.strCountry}`;
      } else {
        document.getElementById("artist-name").textContent = "Artist not found";
      }
    })
    .catch(() => {
      document.getElementById("artist-name").textContent = "Unable to load artist info";
    });
}

function nextArtist(){
  currentIndex++;
  if(currentIndex >= artistNames.length) currentIndex = 0;
  showArtist();
}

function prevArtist(){
  currentIndex--;
  if(currentIndex < 0) currentIndex = artistNames.length - 1;
  showArtist();
}

function randomArtist(){
  let randomIndex;
  do {
    randomIndex = Math.floor(Math.random() * artistNames.length);
  } while(randomIndex === currentIndex);
  currentIndex = randomIndex;
  showArtist();
}

// Load first artist
showArtist();
</script>

</body>
</html>
