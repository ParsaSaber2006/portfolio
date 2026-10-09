<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Parsa Saber — Full Stack Developer & Product Engineer specializing in Laravel, Nuxt.js, Vue.js, WordPress, and SaaS.">
<title>Parsa Saber — Full Stack Developer & Product Engineer</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

/* ===================== THEME TOKENS ===================== */
:root,
html[data-theme="dark"]{
  --bg:#08090c; --surface:#101217; --surface2:#151820; --text:#f5f7fb;
  --muted:#9ca3af; --line:rgba(255,255,255,.09); --accent:#7c5cff;
  --accent2:#00d4ff; --max:1180px; --radius:24px;
  --shadow:0 30px 80px rgba(0,0,0,.35);
  --shadow-soft:0 8px 30px rgba(0,0,0,.25);
  --grid-line:rgba(255,255,255,.025);
  --nav-bg:rgba(10,11,15,.72);
  --bar-bg:#252832;
  --tag-text:#b8bdc8;
  --heading-soft:#d8dbe3;
  --body-soft:#d8dbe2;
  --btn-hover-border:#555;
  --btn-primary-bg:#ffffff; --btn-primary-text:#08090c;
  --project-bg:linear-gradient(145deg,#12151c,#0d0f14);
  --project-glow:rgba(124,92,255,.1);
  --monogram-grad:radial-gradient(circle at 50% 35%,#28213f,#11131a 60%);
  --monogram-color:#ffffff;
  --monogram-shadow:0 0 60px rgba(124,92,255,.6);
  --hero-card-grad:linear-gradient(145deg,rgba(255,255,255,.07),rgba(255,255,255,.025));
  --panel-bg:rgba(255,255,255,.025);
  --skill-card-grad:linear-gradient(145deg,rgba(255,255,255,.045),rgba(255,255,255,.018));
}

html[data-theme="light"]{
  --bg:#f7f8fb; --surface:#ffffff; --surface2:#f1f3f8; --text:#0b0d12;
  --muted:#5b6472; --line:rgba(10,12,20,.1); --accent:#6c4bff;
  --accent2:#0091ff;
  --shadow:0 20px 60px rgba(15,20,40,.08);
  --shadow-soft:0 8px 30px rgba(15,20,40,.05);
  --grid-line:rgba(10,12,20,.035);
  --nav-bg:rgba(255,255,255,.8);
  --bar-bg:#e6e9f2;
  --tag-text:#3d4453;
  --heading-soft:#2a3040;
  --body-soft:#2a3040;
  --btn-hover-border:#b9c0d0;
  --btn-primary-bg:#0b0d12; --btn-primary-text:#ffffff;
  --project-bg:#ffffff;
  --project-glow:rgba(108,75,255,.10);
  --monogram-grad:radial-gradient(circle at 50% 35%,#e9e4ff,#f4f6fb 65%);
  --monogram-color:#0b0d12;
  --monogram-shadow:0 0 60px rgba(108,75,255,.35);
  --hero-card-grad:linear-gradient(145deg,#ffffff,#f4f6fb);
  --panel-bg:#ffffff;
  --skill-card-grad:#ffffff;
}

*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{
  background:var(--bg);color:var(--text);font-family:Inter,sans-serif;
  line-height:1.8;overflow-x:hidden;text-align:start;
  transition:background .35s ease,color .35s ease;
}
body:before{
  content:"";position:fixed;inset:0;pointer-events:none;z-index:-2;
  background:
    radial-gradient(circle at 80% 10%,rgba(124,92,255,.14),transparent 30%),
    radial-gradient(circle at 10% 40%,rgba(0,212,255,.08),transparent 28%);
}
html[data-theme="light"] body:before{
  background:
    radial-gradient(circle at 80% 10%,rgba(108,75,255,.10),transparent 32%),
    radial-gradient(circle at 10% 40%,rgba(0,145,255,.08),transparent 30%);
}
body:after{
  content:"";position:fixed;inset:0;pointer-events:none;z-index:-1;opacity:.45;
  background-image:linear-gradient(var(--grid-line) 1px,transparent 1px),
                   linear-gradient(90deg,var(--grid-line) 1px,transparent 1px);
  background-size:70px 70px;
}
a{color:inherit;text-decoration:none}
.container{width:min(calc(100% - 40px),var(--max));margin:auto}
nav{
  position:fixed;top:18px;left:50%;transform:translateX(-50%);z-index:50;
  width:min(calc(100% - 32px),980px);padding:10px 14px;border:1px solid var(--line);
  background:var(--nav-bg);backdrop-filter:blur(18px);border-radius:999px;
  display:flex;align-items:center;justify-content:space-between;
  box-shadow:var(--shadow-soft);
  transition:background .35s ease,border-color .35s ease;
}
.logo{font-weight:800;font-size:18px;letter-spacing:-.5px}
.logo span{color:var(--accent)}
.navlinks{display:flex;gap:22px;font-size:13px;color:var(--muted)}
.navlinks a:hover{color:var(--text)}
.nav-right{display:flex;align-items:center;gap:10px}
.icon-btn{
  width:38px;height:38px;display:grid;place-items:center;
  border:1px solid var(--line);border-radius:999px;
  background:transparent;color:var(--text);cursor:pointer;
  transition:.25s;font-family:inherit;
}
.icon-btn:hover{background:var(--text);color:var(--bg);border-color:var(--text)}
.icon-btn svg{width:16px;height:16px;display:block}
html[data-theme="dark"] .icon-sun{display:block}
html[data-theme="dark"] .icon-moon{display:none}
html[data-theme="light"] .icon-sun{display:none}
html[data-theme="light"] .icon-moon{display:block}
.navbtn{
  border:1px solid var(--line);padding:8px 14px;border-radius:999px;font-size:12px;
  cursor:pointer;background:transparent;color:var(--text);font-weight:600;
  transition:.25s;
}
.navbtn:hover{background:var(--text);color:var(--bg);border-color:var(--text)}
.hero{min-height:100vh;display:grid;place-items:center;padding:150px 0 90px}
.hero-grid{display:grid;grid-template-columns:1.15fr .85fr;gap:70px;align-items:center}
.eyebrow{
  display:inline-flex;gap:9px;align-items:center;border:1px solid var(--line);
  background:var(--surface);border-radius:999px;padding:7px 13px;color:var(--muted);
  font-size:12px;margin-bottom:24px;box-shadow:var(--shadow-soft);
  transition:background .35s ease;
}
.dot{width:7px;height:7px;border-radius:50%;background:#16b364;box-shadow:0 0 14px #16b364}
h1{font-size:clamp(52px,7vw,92px);line-height:1.02;letter-spacing:-4px;margin-bottom:22px}
.gradient{background:linear-gradient(100deg,var(--text) 15%,var(--accent) 60%,var(--accent2));-webkit-background-clip:text;background-clip:text;color:transparent}
.hero h2{font-size:clamp(21px,3vw,34px);line-height:1.4;color:var(--heading-soft);font-weight:600;margin-bottom:20px}
.hero p{max-width:690px;color:var(--muted);font-size:16px}
.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:32px}
.btn{
  padding:12px 20px;border-radius:12px;border:1px solid var(--line);font-size:13px;
  font-weight:700;transition:.25s;cursor:pointer;background:transparent;
  color:var(--text);font-family:inherit;
}
.btn.primary{background:var(--btn-primary-bg);color:var(--btn-primary-text);border-color:var(--btn-primary-bg)}
.btn.primary:hover{opacity:.9}
.btn:hover{transform:translateY(-2px);border-color:var(--btn-hover-border)}
.hero-card{
  position:relative;border:1px solid var(--line);background:var(--hero-card-grad);
  border-radius:32px;padding:26px;box-shadow:var(--shadow);
  transition:background .35s ease,border-color .35s ease;
}
.profile{
  aspect-ratio:1/1;border-radius:24px;display:grid;place-items:center;overflow:hidden;
  background:var(--monogram-grad);
  border:1px solid var(--line);position:relative;
}
.monogram{font-size:150px;font-weight:800;letter-spacing:-15px;color:var(--monogram-color);text-shadow:var(--monogram-shadow)}
.orb{position:absolute;width:180px;height:180px;border-radius:50%;background:rgba(124,92,255,.18);filter:blur(35px)}
.card-meta{display:flex;justify-content:space-between;margin-top:18px;font-size:12px;color:var(--muted)}
section{padding:110px 0}
.section-head{display:flex;align-items:end;justify-content:space-between;gap:30px;margin-bottom:38px}
.kicker{font-size:11px;text-transform:uppercase;letter-spacing:2px;color:var(--accent);font-weight:800;margin-bottom:7px}
h2.section-title{font-size:clamp(30px,4vw,50px);letter-spacing:-1.5px;line-height:1.2}
.section-desc{max-width:500px;color:var(--muted);font-size:14px}
.about-grid{display:grid;grid-template-columns:1.3fr .7fr;gap:20px}
.panel{
  border:1px solid var(--line);background:var(--panel-bg);border-radius:var(--radius);
  padding:30px;box-shadow:var(--shadow-soft);transition:background .35s ease;
}
.about-text{font-size:18px;color:var(--body-soft);line-height:2}
.about-text strong{color:var(--text)}
.facts{display:grid;gap:12px}
.fact{
  padding:20px;border:1px solid var(--line);border-radius:18px;
  background:var(--panel-bg);box-shadow:var(--shadow-soft);
  transition:background .35s ease;
}
.fact strong{display:block;font-size:26px}
.fact span{color:var(--muted);font-size:12px}
.skill-tabs{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:22px}
.tab{
  padding:9px 14px;border-radius:999px;border:1px solid var(--line);font-size:12px;
  color:var(--muted);cursor:pointer;background:transparent;font-family:inherit;
  transition:.25s;
}
.tab.active{background:var(--text);color:var(--bg);border-color:var(--text)}
.skills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.skill-card{
  border:1px solid var(--line);background:var(--skill-card-grad);
  border-radius:20px;padding:24px;box-shadow:var(--shadow-soft);
  transition:transform .25s,box-shadow .25s,background .35s ease;
}
.skill-card:hover{transform:translateY(-3px)}
.skill-top{display:flex;justify-content:space-between;gap:10px;margin-bottom:16px}
.skill-name{font-weight:700}
.skill-level{color:var(--accent);font-size:11px;font-weight:600}
.bar{height:5px;background:var(--bar-bg);border-radius:99px;overflow:hidden}
.bar i{display:block;height:100%;width:var(--w);background:linear-gradient(90deg,var(--accent),var(--accent2));border-radius:99px}
.tags{display:flex;gap:7px;flex-wrap:wrap;margin-top:16px}
.tag{font-size:10px;color:var(--tag-text);border:1px solid var(--line);padding:4px 8px;border-radius:7px;background:var(--surface2)}
.projects{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
.project{
  min-height:320px;border:1px solid var(--line);border-radius:26px;padding:28px;
  position:relative;overflow:hidden;background:var(--project-bg);
  box-shadow:var(--shadow-soft);transition:.3s;
}
.project:hover{transform:translateY(-5px);border-color:rgba(124,92,255,.45);box-shadow:var(--shadow)}
.project:before{content:"";position:absolute;width:250px;height:250px;border-radius:50%;background:var(--project-glow);filter:blur(45px);top:-100px;left:-80px}
.project-num{font:700 12px Inter;color:var(--muted);letter-spacing:2px;position:relative}
.project h3{font-size:27px;margin:28px 0 12px;position:relative}
.project p{color:var(--muted);font-size:13px;max-width:560px;position:relative}
.project .tags{position:absolute;bottom:25px;inset-inline:28px}
.timeline{position:relative;margin-top:20px}
.timeline:before{
  content:"";position:absolute;
  inset-inline-start:9px;top:10px;bottom:10px;
  width:1px;background:var(--line);
}
.t-item{
  position:relative;
  padding-block:0 38px;
  padding-inline-start:42px;
}
.t-dot{
  position:absolute;
  inset-inline-start:4px;top:9px;
  width:11px;height:11px;
  border:2px solid var(--accent);
  background:var(--bg);border-radius:50%;z-index:2;
}
.t-item small{color:var(--muted);font-size:11px;font-weight:600;letter-spacing:.5px}
.t-item h3{font-size:20px;margin:5px 0}
.t-item p{color:var(--muted);font-size:13px}
.arch{display:grid;grid-template-columns:repeat(4,1fr);gap:12px}
.arch-card{
  text-align:center;padding:25px 14px;border:1px solid var(--line);
  border-radius:20px;background:var(--panel-bg);box-shadow:var(--shadow-soft);
  transition:.25s;
}
.arch-card:hover{transform:translateY(-3px);border-color:rgba(124,92,255,.4)}
.arch-icon{font-size:28px;margin-bottom:9px;color:var(--accent)}
.arch-card h3{font-size:14px}
.arch-card p{font-size:11px;color:var(--muted);margin-top:5px}
.contact{
  border:1px solid var(--line);border-radius:32px;padding:55px;text-align:center;
  background:radial-gradient(circle at 50% 0%,rgba(124,92,255,.12),transparent 55%),var(--panel-bg);
  box-shadow:var(--shadow);
}
.contact h2{font-size:clamp(34px,5vw,60px);letter-spacing:-2px}
.contact p{color:var(--muted);max-width:650px;margin:15px auto}
footer{padding:35px 0 50px;color:var(--muted);font-size:11px;border-top:1px solid var(--line);margin-top:30px}
.footer-inner{display:flex;justify-content:space-between;gap:20px}
.reveal{opacity:0;transform:translateY(25px);transition:opacity .7s ease,transform .7s ease}
.reveal.show{opacity:1;transform:none}

@media(max-width:850px){
  nav{top:10px}.navlinks{display:none}
  .hero-grid,.about-grid{grid-template-columns:1fr}.hero-card{max-width:520px;margin:auto}
  .skills-grid{grid-template-columns:repeat(2,1fr)}.projects{grid-template-columns:1fr}.arch{grid-template-columns:repeat(2,1fr)}
  section{padding:80px 0}.section-head{display:block}.section-desc{margin-top:12px}
}
@media(max-width:560px){
  .container{width:min(calc(100% - 24px),var(--max))}
  h1{font-size:52px;letter-spacing:-3px}.hero{padding-top:120px}
  .skills-grid{grid-template-columns:1fr}.arch{grid-template-columns:1fr 1fr}
  .panel,.contact{padding:24px}.project{min-height:350px}
  .footer-inner{flex-direction:column}
}
</style>
</head>
<body>

<nav>
  <a class="logo" href="#">PARSA<span>.</span></a>
  <div class="navlinks">
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#experience">Journey</a>
    <a href="#contact">Contact</a>
  </div>
  <div class="nav-right">
    <button class="icon-btn" id="themeToggle" type="button" aria-label="Toggle theme">
      <!-- Sun (shown in dark mode → click for light) -->
      <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="4"></circle>
        <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"></path>
      </svg>
      <!-- Moon (shown in light mode → click for dark) -->
      <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
      </svg>
    </button>
    <a class="navbtn" href="#contact">Let's Talk ↗</a>
  </div>
</nav>

<main>
<section class="hero">
  <div class="container hero-grid">
    <div class="reveal">
      <div class="eyebrow"><i class="dot"></i> <span>Available for selected opportunities</span></div>
      <h1>Parsa<br><span class="gradient">Saber.</span></h1>
      <h2>Full Stack Developer<br>& Product Engineer</h2>
      <p>
        A developer focused on building web products, SaaS, and scalable systems —
        from backend architecture and APIs to frontend, user experience,
        WordPress, and infrastructure.
      </p>
      <div class="actions">
        <a class="btn primary" href="#projects">View Projects ↓</a>
        <a class="btn" href="#contact">Work With Me ↗</a>
      </div>
    </div>
    <div class="hero-card reveal">
      <div class="profile">
        <div class="orb"></div>
        <div class="monogram">PS</div>
      </div>
      <div class="card-meta"><span>Computer Engineering</span><span>Iran · Remote</span></div>
    </div>
  </div>
</section>

<section id="about">
<div class="container">
  <div class="section-head reveal">
    <div><div class="kicker">01 — About</div><h2 class="section-title">I don't just write code;<br>I build products.</h2></div>
    <p class="section-desc">Combining software development, product thinking, UX, and problem-solving to turn ideas into real systems.</p>
  </div>
  <div class="about-grid">
    <div class="panel about-text reveal">
      Throughout my web development journey, I've worked on <strong>backend, frontend, SaaS, and infrastructure</strong> —
      and my experience isn't limited to writing code. I've been involved in system architecture, API design,
      authentication, payments, user management, admin panels, performance optimization, WordPress, and user experience design.
      <br><br>
      My goal is to build software that not only works correctly but is also <strong>scalable, maintainable, and business-ready</strong>.
    </div>
    <div class="facts reveal">
      <div class="fact"><strong>Full Stack</strong><span>Frontend + Backend + API</span></div>
      <div class="fact"><strong>SaaS</strong><span>Product &amp; Business Logic</span></div>
      <div class="fact"><strong>AI-Assisted</strong><span>Modern development workflow</span></div>
    </div>
  </div>
</div>
</section>

<section id="skills">
<div class="container">
  <div class="section-head reveal">
    <div><div class="kicker">02 — Expertise</div><h2 class="section-title">Tech Stack &amp; Skills</h2></div>
    <p class="section-desc">Skills based on hands-on project experience, not just theoretical familiarity.</p>
  </div>
  <div class="skill-tabs reveal">
    <span class="tab active">All</span>
    <span class="tab">Core Development</span>
    <span class="tab">Product</span>
    <span class="tab">Infrastructure</span>
    <span class="tab">AI</span>
  </div>
  <div class="skills-grid">
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Laravel / PHP</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:91%"></i></div><div class="tags"><span class="tag">REST API</span><span class="tag">Auth</span><span class="tag">Business Logic</span><span class="tag">MVC</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Vue.js / Nuxt.js</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:88%"></i></div><div class="tags"><span class="tag">SSR</span><span class="tag">Pinia</span><span class="tag">Vuetify</span><span class="tag">SPA</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">JavaScript / TypeScript</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:84%"></i></div><div class="tags"><span class="tag">ES6+</span><span class="tag">Async</span><span class="tag">Components</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">WordPress / WooCommerce</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:89%"></i></div><div class="tags"><span class="tag">Elementor</span><span class="tag">JetEngine</span><span class="tag">E-commerce</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">HTML / CSS / SCSS</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:93%"></i></div><div class="tags"><span class="tag">Responsive</span><span class="tag">UI</span><span class="tag">Animation</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">REST API &amp; Integration</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:87%"></i></div><div class="tags"><span class="tag">JWT</span><span class="tag">Payments</span><span class="tag">3rd Party API</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Database / MySQL</span><span class="skill-level">Intermediate+</span></div><div class="bar"><i style="--w:76%"></i></div><div class="tags"><span class="tag">Relations</span><span class="tag">Queries</span><span class="tag">Data Modeling</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Linux / Server</span><span class="skill-level">Intermediate+</span></div><div class="bar"><i style="--w:73%"></i></div><div class="tags"><span class="tag">DirectAdmin</span><span class="tag">Nginx</span><span class="tag">Apache</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Git / Development Workflow</span><span class="skill-level">Advanced</span></div><div class="bar"><i style="--w:85%"></i></div><div class="tags"><span class="tag">GitHub</span><span class="tag">Debugging</span><span class="tag">Version Control</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">UI / UX Thinking</span><span class="skill-level">Product-focused</span></div><div class="bar"><i style="--w:78%"></i></div><div class="tags"><span class="tag">User Flow</span><span class="tag">Conversion</span><span class="tag">Design Systems</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">AI-Assisted Development</span><span class="skill-level">Advanced Workflow</span></div><div class="bar"><i style="--w:90%"></i></div><div class="tags"><span class="tag">Prompting</span><span class="tag">Agents</span><span class="tag">Automation</span></div></div>
    <div class="skill-card reveal"><div class="skill-top"><span class="skill-name">Product Engineering</span><span class="skill-level">Hands-on</span></div><div class="bar"><i style="--w:82%"></i></div><div class="tags"><span class="tag">SaaS</span><span class="tag">Requirements</span><span class="tag">Architecture</span></div></div>
  </div>
</div>
</section>

<section id="projects">
<div class="container">
  <div class="section-head reveal">
    <div><div class="kicker">03 — Selected Work</div><h2 class="section-title">Projects that matter.</h2></div>
    <p class="section-desc">Examples of projects where I've engaged with real problems, architecture, and user experience.</p>
  </div>
  <div class="projects">
    <article class="project reveal">
      <span class="project-num">01 / SAAS</span>
      <h3>TeleMoshavere</h3>
      <p>A SaaS platform for delivering branded telephone counseling services; featuring consultant management, wallet, pricing, cloud call center, and multi-part business logic.</p>
      <div class="tags"><span class="tag">Laravel</span><span class="tag">Vue</span><span class="tag">SaaS</span><span class="tag">Cloud Telephony</span></div>
    </article>
    <article class="project reveal">
      <span class="project-num">02 / PLATFORM</span>
      <h3>Karavisit</h3>
      <p>Development and management of various parts of a counseling ecosystem, including expert profiles, landing pages, payment processes, and user experience.</p>
      <div class="tags"><span class="tag">WordPress</span><span class="tag">WooCommerce</span><span class="tag">JetEngine</span><span class="tag">Elementor</span></div>
    </article>
    <article class="project reveal">
      <span class="project-num">03 / MIGRATION</span>
      <h3>Laravel → Nuxt</h3>
      <p>Migration and redesign of a legacy Vue/Laravel architecture to a modern Nuxt ecosystem with SSR, Pinia, JWT Authentication, API Integration, and a modular structure.</p>
      <div class="tags"><span class="tag">Nuxt 4</span><span class="tag">Vue 3</span><span class="tag">SSR</span><span class="tag">Pinia</span></div>
    </article>
    <article class="project reveal">
      <span class="project-num">04 / E-COMMERCE</span>
      <h3>WooCommerce Systems</h3>
      <p>Working with WordPress stores, payment gateways, gateway-based discounts and fees, variable products, checkout, and resolving complex AJAX and theme/plugin compatibility issues.</p>
      <div class="tags"><span class="tag">WooCommerce</span><span class="tag">Payment</span><span class="tag">Checkout</span><span class="tag">Optimization</span></div>
    </article>
  </div>
</div>
</section>

<section id="experience">
<div class="container">
  <div class="section-head reveal">
    <div><div class="kicker">04 — Engineering Approach</div><h2 class="section-title">How I build.</h2></div>
    <p class="section-desc">My process starts with understanding the problem, not opening the editor.</p>
  </div>
  <div class="timeline">
    <div class="t-item reveal"><i class="t-dot"></i><small>01 — DISCOVER</small><h3>Understanding the Problem</h3><p>Understanding business needs, users, constraints, and expected outcomes before choosing a technical solution.</p></div>
    <div class="t-item reveal"><i class="t-dot"></i><small>02 — ARCHITECT</small><h3>Architecture &amp; Data Flow</h3><p>Separating frontend, backend, API, authentication, data, and side services with future development in mind.</p></div>
    <div class="t-item reveal"><i class="t-dot"></i><small>03 — BUILD</small><h3>Build &amp; Integrate</h3><p>Implementing UI, business logic, APIs, payments, and connecting services with the right tools for the project.</p></div>
    <div class="t-item reveal"><i class="t-dot"></i><small>04 — DEBUG &amp; OPTIMIZE</small><h3>Test, Debug &amp; Improve</h3><p>Finding the root cause instead of temporary fixes, reviewing performance, and improving user experience.</p></div>
  </div>
</div>
</section>

<section>
<div class="container">
  <div class="section-head reveal">
    <div><div class="kicker">05 — System Thinking</div><h2 class="section-title">Beyond the Code.</h2></div>
    <p class="section-desc">The ability to move between different layers of a product, from idea to infrastructure.</p>
  </div>
  <div class="arch">
    <div class="arch-card reveal"><div class="arch-icon">◈</div><h3>Product</h3><p>Business Logic · Requirements · SaaS</p></div>
    <div class="arch-card reveal"><div class="arch-icon">⌘</div><h3>Frontend</h3><p>Vue · Nuxt · UI · UX · SSR</p></div>
    <div class="arch-card reveal"><div class="arch-icon">⚙</div><h3>Backend</h3><p>Laravel · API · Auth · Database</p></div>
    <div class="arch-card reveal"><div class="arch-icon">⌁</div><h3>Infrastructure</h3><p>Linux · Deployment · Performance</p></div>
  </div>
</div>
</section>

<section id="contact">
<div class="container">
  <div class="contact reveal">
    <div class="kicker">06 — Contact</div>
    <h2>Let's build something<br><span class="gradient">useful.</span></h2>
    <p>If you're looking for someone who can bridge product, experience design, and technical development, I'd be happy to talk about your project.</p>
    <div class="actions" style="justify-content:center">
      <a class="btn primary" href="mailto:parsasaber0123@gmail.com">Email Me ↗</a>
      <a class="btn" href="https://github.com/parsasaber2006/" target="_blank" rel="noopener">GitHub ↗</a>
      <a class="btn" href="https://t.me/Parsa_saber" target="_blank" rel="noopener">Telegram ↗</a>
    </div>
  </div>
</div>
</section>
</main>

<footer>
<div class="container footer-inner">
  <span>© 2026 Parsa Saber. Built with intention.</span>
  <span>Full Stack Developer · Product Engineer</span>
</div>
</footer>

<script>
/* ===================== Theme ===================== */
(function initTheme(){
  const saved = localStorage.getItem('theme');
  const theme = saved === 'light' ? 'light' : 'dark'; // default: dark
  document.documentElement.setAttribute('data-theme', theme);
})();

document.getElementById('themeToggle').addEventListener('click', () => {
  const current = document.documentElement.getAttribute('data-theme');
  const next = current === 'dark' ? 'light' : 'dark';
  document.documentElement.setAttribute('data-theme', next);
  localStorage.setItem('theme', next);
});

/* ===================== Reveal & Tabs ===================== */
const observer = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('show')})
},{threshold:.12});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

document.querySelectorAll('.tab').forEach(tab=>{
  tab.addEventListener('click',()=>{
    document.querySelectorAll('.tab').forEach(t=>t.classList.remove('active'));
    tab.classList.add('active');
  });
});
</script>
</body>
</html>