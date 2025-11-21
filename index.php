<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cherissa Mari Panerio | Portfolio</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">

<style>
  :root {
    --light-bg: #f5f5f5;
    --text-dark: #222;
    --accent: #b74b4b;
    --gray: #555;
    --card-bg: #fff;
  }

  * { margin:0; padding:0; box-sizing:border-box; }
  body { 
    font-family:'Roboto', sans-serif; 
    background:var(--light-bg); 
    color:var(--text-dark); 
    scroll-behavior:smooth; 
  }

  /* Hero */
  .hero {
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    min-height:80vh;
    text-align:center;
    padding:3rem 3rem;
    opacity:0;
    transform: translateY(20px);
    transition:all 1s ease-out;
  }
  .hero.visible { opacity:1; transform:translateY(0); }
  .hero img {
    width:250px;
    height:250px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:1.5rem;
    border:4px solid var(--accent);
    transition: transform 0.3s ease;
  }
  .hero img:hover { transform: scale(1.05); }
  .hero-text h1 {
    font-family:'Playfair Display', serif;
    font-size:3rem;
    margin-bottom:0.5rem;
  }
  .hero-text h2 {
    font-size:1.8rem;
    color:var(--accent);
    margin-bottom:1rem;
  }
  .typing-text {
    color:var(--text-dark);
    font-weight:500;
    font-size:1.2rem;
  }
  .social { margin-top:1rem; }
  .social a {
    margin-right:1rem;
    color:var(--text-dark);
    border:1px solid var(--accent);
    padding:0.4rem 0.8rem;
    border-radius:5px;
    transition:0.3s;
  }
  .social a:hover { background:var(--accent); color:#fff; }
  .hero .btn {
    display:inline-block;
    margin-top:1rem;
    padding:0.6rem 1.5rem;
    border:1px solid var(--accent);
    border-radius:5px;
    color:var(--text-dark);
    text-decoration:none;
    transition:0.3s;
    background:#fff;
  }
  .hero .btn:hover { background:var(--accent); color:#fff; }

  /* Hero Navigation Links */
  .hero-nav {
    display:flex;
    gap:2rem;
    justify-content:center;
    margin-top:1.5rem;
  }
  .hero-nav a {
    text-decoration:none;
    font-weight:500;
    color:var(--text-dark);
    transition:0.3s;
  }
  .hero-nav a:hover { color:var(--accent); }

  /* Sections */
  section { 
    padding:3rem 3rem; 
    max-width:1000px; 
    margin:2rem auto; 
    opacity:0; 
    transform: translateY(20px); 
    transition:all 1s ease-out; 
    background:var(--card-bg);
    border-radius:8px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
  }
  section.visible { opacity:1; transform:translateY(0); }
  h2.section-title { font-family:'Playfair Display', serif; font-size:2rem; margin-bottom:1.5rem; color:var(--accent); text-align:center; }

  /* About */
  #about p { line-height:1.8; color:var(--gray); }

  /* Skills */
  .skills-container { display:flex; flex-wrap:wrap; justify-content:center; gap:1.5rem; }
  .skill { background:#f0f0f0; padding:1rem 1.5rem; border-radius:8px; text-align:center; min-width:120px; transition: transform 0.3s, background 0.3s; cursor:pointer; }
  .skill h3 { margin-bottom:0.5rem; color:var(--accent); }
  .skill:hover { transform: translateY(-5px); background:#e0e0e0; }

  /* Projects */
  .projects-container { display:flex; flex-wrap:wrap; gap:1.5rem; justify-content:center; }
  .project { background:#f0f0f0; border-radius:8px; overflow:hidden; width:280px; text-align:center; transition: transform 0.3s, box-shadow 0.3s; cursor:pointer; }
  .project:hover { transform: translateY(-5px); box-shadow:0 5px 20px rgba(183,75,75,0.3); }
  .project img { width:100%; height:180px; object-fit:cover; }
  .project h3 { padding:0.8rem 0; color:var(--accent); }
  .project a { display:inline-block; margin-bottom:1rem; text-decoration:none; color:var(--text-dark); border:1px solid var(--accent); padding:0.4rem 0.8rem; border-radius:5px; transition:0.3s; }
  .project a:hover { background:var(--accent); color:#fff; }

  /* Contact */
  #contact form { display:flex; flex-direction:column; gap:1rem; max-width:500px; margin:0 auto; }
  #contact input, #contact textarea { padding:0.8rem; border-radius:5px; border:none; outline:none; font-size:1rem; background:#f0f0f0; color:var(--text-dark); }
  #contact button { padding:0.8rem; border-radius:5px; border:none; background:var(--accent); color:#fff; cursor:pointer; transition:0.3s; }
  #contact button:hover { background:#ff5c5c; }

  @media (max-width:768px){
    .hero { flex-direction:column; text-align:center; }
    .hero img { margin:0 0 2rem 0; }
    .skills-container, .projects-container { flex-direction:column; align-items:center; }
  }
</style>
</head>
<body>

<!-- Hero Section -->
<section class="hero" id="hero">
  <img src="images/panerio.jpg" alt="Cherissa Mari Panerio">
  <div class="hero-text">
    <h1>Hi, It's Cherissa Mari!</h1>
    <h2 class="typing-text">I'm a <span id="typed">Student • Photographer • Creative Thinker</span></h2>
    <div class="social">
      <a href="https://www.instagram.com/chxrssa.m/">Instagram</a>
      <a href="https://www.facebook.com/cherissa.panerio">Facebook</a>
      <a href="mailto:paneriocherissamari@email.com">Email</a>
    </div>

    <!-- Navigation links moved here -->
    <div class="hero-nav">
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </div>

    <a href="#contact" class="btn">Hire Me</a>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <h2 class="section-title">About Me</h2>
  <p>Hello! I'm Cherissa Mari Panerio, I am an enthusiastic IT student with experience in PHP, HTML, and Visual Basic. I enjoy developing and improving applications, solving technical problems, and learning new technologies. I am dedicated, detail-oriented, and motivated to contribute to real-world IT projects.</p>
</section>

<!-- Skills Section -->
<section id="skills">
  <h2 class="section-title">Skills</h2>
  <div class="skills-container">
    <div class="skill"><h3>HTML</h3>Intermediate</div>
    <div class="skill"><h3>CSS</h3>Intermediate</div>
    <div class="skill"><h3>JavaScript</h3>Basic</div>
    <div class="skill"><h3>Photoshop</h3>Intermediate</div>
    <div class="skill"><h3>Figma</h3>Intermediate</div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects">
  <h2 class="section-title">Projects</h2>
  <div class="projects-container">
    <div class="project">
      <img src="images/real estate.jpg" alt="Real Estate Inventory">
      <h3>Real Estate Inventory</h3>
      <a href="images/real estate.jpg" target="_blank">View Project</a>
    </div>
    <div class="project">
      <img src="images/hotel.jpg" alt="Hotel Management System">
      <h3>Hotel Management System</h3>
      <a href="images/hotel.jpg" target="_blank">View Project</a>
    </div>
    <div class="project">
      <img src="images/lost.jpg" alt="Lost and Found System">
      <h3>Lost and Found System</h3>
      <a href="images/lost.jpg" target="_blank">View Project</a>
    </div>
    <div class="project">
      <img src="images/brochure.jpg" alt="Brochure">
      <h3>Brochure</h3>
      <a href="images/brochure.jpg" target="_blank">View Project</a>
    </div>
    <div class="project">
      <img src="images/system.jpg" alt="System">
      <h3>System Presentation</h3>
      <a href="images/system.jpg" target="_blank">View Project</a>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <h2 class="section-title">Contact Me</h2>
  <form>
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <textarea placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>

<!-- Typing Script -->
<script>
  const typedText = ["Student", "Photographer", "Creative Thinker"];
  let i = 0, j = 0, currentText = "", isDeleting = false, speed = 150;
  function type(){
    const fullText = typedText[i];
    if(isDeleting){ currentText = fullText.substring(0, j--); } 
    else { currentText = fullText.substring(0, j++); }
    document.getElementById("typed").textContent = currentText;
    if(!isDeleting && j === fullText.length+1){ isDeleting = true; speed=50; } 
    else if(isDeleting && j === 0){ isDeleting=false; i=(i+1)%typedText.length; speed=150; }
    setTimeout(type,speed);
  }
  type();
</script>

<!-- Scroll Animations -->
<script>
  const sections = document.querySelectorAll("section, .hero");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){ entry.target.classList.add("visible"); }
    });
  }, { threshold: 0.2 });
  sections.forEach(section => observer.observe(section));
</script>

</body>
</html>
