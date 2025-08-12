<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Horror Game Stories - Dashboard</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

<style>
  /* Reset & base */
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #1a1a1a, #0d0d0d);
    color: #f0f0f0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }

  /* Navbar */
  nav {
    background: #111;
    padding: 20px 40px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.8);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  nav h1 {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    font-size: 1.8rem;
    color: #e03e3e;
    letter-spacing: 2px;
    text-transform: uppercase;
    user-select: none;
  }
  nav a {
    color: #aaa;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 600;
    font-size: 1rem;
    transition: color 0.3s ease;
  }
  nav a:hover {
    color: #e03e3e;
  }

  /* Container */
  .container {
    max-width: 1100px;
    width: 90%;
    margin: 40px auto 80px;
    flex-grow: 1;
  }

  /* Header Section */
  .header {
    text-align: center;
    margin-bottom: 50px;
  }
  .header h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    color: #e03e3e;
    margin-bottom: 10px;
    letter-spacing: 1.5px;
  }
  .header p {
    font-size: 1.15rem;
    color: #bbb;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.5;
  }

  /* Grid Games */
  .game-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
  }
  .game-card {
    background: #222;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 15px rgba(224, 62, 62, 0.4);
    transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.35s ease;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: inherit;
  }
  .game-card:hover {
    transform: translateY(-14px) scale(1.05);
    box-shadow: 0 18px 30px rgba(224, 62, 62, 0.85);
  }
  .game-card img {
    width: 100%;
    height: 300px; /* Versi full height */
    object-fit: cover;
    filter: brightness(0.85);
    transition: filter 0.3s ease;
  }
  .game-card:hover img {
    filter: brightness(1);
  }
  .game-info {
    padding: 25px 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(180deg, #330000 0%, #220000 100%);
  }
  .game-info h3 {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    font-size: 1.8rem;
    margin: 0 0 10px;
    color: #e03e3e;
    text-shadow: 0 0 6px #b22a2a;
  }
  .game-info p {
    font-size: 1rem;
    color: #ddd;
    line-height: 1.4;
    flex-grow: 1;
  }
  .btn-play {
    margin-top: 15px;
    align-self: start;
    padding: 10px 22px;
    background-color: #e03e3e;
    border: none;
    border-radius: 30px;
    color: white;
    font-weight: 600;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
    cursor: pointer;
    box-shadow: 0 0 10px #e03e3e;
  }
  .btn-play:hover {
    background-color: #b73232;
    box-shadow: 0 0 16px #ff4a4a;
  }

  /* Footer */
  footer {
    text-align: center;
    padding: 20px;
    background: #111;
    color: #777;
    font-size: 0.9rem;
  }

  /* Responsive */
  @media (max-width: 600px) {
    nav {
      flex-direction: column;
      gap: 15px;
    }
    .game-info h3 {
      font-size: 1.5rem;
    }
  }
</style>
</head>
<body>

<nav>
  <h1>Horror Game Stories</h1>
  <div>
    <a href="#games">Games</a>
    <a href="#about">Tentang</a>
  </div>
</nav>

<div class="container">
  <header class="header" id="about">
    <h2>Dashboard Game Horor</h2>
    <p>Menjelajahi kisah mendebarkan dan penuh ketegangan dari game-game horor terbaik sepanjang masa.</p>
  </header>

  <section class="game-grid" id="games">

    <a href="/residentevil" class="game-card" aria-label="Resident Evil Series">
      <img src="resident.jpg" alt="Logo Resident Evil" />
      <div class="game-info">
        <h3>Resident Evil Series</h3>
        <p>Ikuti perjuangan melawan virus mematikan dan makhluk mengerikan dalam seri survival horror legendaris.</p>
        <button class="btn-play" type="button">Mulai</button>
      </div>
    </a>

    <a href="/devilmaycry" class="game-card" aria-label="Devil May Cry Series">
      <img src="devilmaycry.jpg" alt="Logo Devil May Cry" />
      <div class="game-info">
        <h3>Devil May Cry Series</h3>
        <p>Rasakan aksi cepat dan stylish dalam pertempuran melawan iblis dan kegelapan dengan Dante dan kawan-kawan.</p>
        <button class="btn-play" type="button">Mulai</button>
      </div>
    </a>

    <a href="/silenthill" class="game-card" aria-label="Silent Hill Series">
      <img src="silenthill.jpg" alt="Logo Silent Hill" />
      <div class="game-info">
        <h3>Silent Hill Series</h3>
        <p>Mengungkap misteri dan kengerian kota Silent Hill yang penuh dengan kabut, makhluk menakutkan, dan rahasia gelap.</p>
        <button class="btn-play" type="button">Mulai</button>
      </div>
    </a>

  </section>
</div>

<footer>
  © 2025 Horror Game Stories. All rights reserved.
</footer>

<script>
  // Supaya klik tombol "Mulai" juga trigger link utama
  document.querySelectorAll('.btn-play').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const card = btn.closest('a.game-card');
      if(card) {
        window.location.href = card.href;
      }
    });
  });
</script>

</body>
</html>
