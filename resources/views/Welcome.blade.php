<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resident Evil — Horror Library</title>

  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      background: #000;
      font-family: 'Montserrat', sans-serif;
      color: white;
      overflow-x: hidden;
    }

    /* Background & fog */
    .bg {
      position: fixed;
      inset: 0;
      background: url('residentevil.jpeg') no-repeat center/cover;
      filter: brightness(0.3);
      z-index: -2;
    }
    .fog {
      position: fixed;
      inset: 0;
      background: url('residentevil.jpeg') repeat-x;
      opacity: 0.3;
      animation: fogMove 60s linear infinite;
      z-index: -1;
    }
    @keyframes fogMove {
      from { background-position: 0 0; }
      to { background-position: 200% 0; }
    }

    /* Hero section */
    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    h1 {
      font-family: 'Cinzel Decorative', serif;
      font-size: 4rem;
      color: #ff0000;
      text-shadow: 0 0 20px red, 0 0 40px darkred;
      animation: redGlow 2s infinite, fadeInUp 1.2s ease-out forwards;
    }
    @keyframes redGlow {
      0%,100% { text-shadow: 0 0 20px red, 0 0 40px darkred; }
      50% { text-shadow: 0 0 50px crimson, 0 0 100px red; }
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    p { font-size: 1.3rem; max-width: 600px; }
    a.button {
      margin-top: 20px;
      padding: 12px 30px;
      background: darkred;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    a.button:hover {
      background: red;
      transform: scale(1.05);
    }

    /* Section Tabs */
    .tabs {
      display: flex;
      justify-content: center;
      margin: 30px 0;
      gap: 20px;
    }
    .tab-btn {
      padding: 12px 25px;
      background: #111;
      color: #ff4444;
      border: 1px solid #ff0000;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    .tab-btn.active, .tab-btn:hover {
      background: red;
      color: white;
    }

    /* Book Grid */
    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      padding: 40px;
      transition: all 0.5s ease;
    }

    .book {
      background: linear-gradient(180deg, #111 0%, #000 100%);
      border: 2px solid #330000;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
    }

    .book img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      transition: all 0.3s ease;
    }

    .book h3 {
      font-family: 'Cinzel Decorative', serif;
      padding: 15px;
      background: #000;
      color: #ff5555;
      margin: 0;
    }

    .book:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px red;
    }

    .book:active {
      transform: scale(0.97);
    }

    /* Character Grid */
    .character-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      padding: 40px;
    }

    .character-card {
      background: #111;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(255,0,0,0.4);
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .character-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px red;
    }
    .character-card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-bottom: 2px solid red;
    }
    .character-card h3 {
      color: #ff4444;
      font-family: 'Cinzel Decorative', serif;
      margin: 15px 0 10px;
    }

    /* Modal */
    .modal {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.9);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
      animation: fadeIn 0.4s ease;
    }
    .modal.active {
      display: flex;
    }
    .modal-content {
      background: #111;
      border: 2px solid red;
      border-radius: 10px;
      max-width: 600px;
      text-align: center;
      padding: 30px;
      animation: zoomIn 0.4s ease;
    }
    .modal-content img {
      width: 250px;
      height: 250px;
      border-radius: 10px;
      object-fit: cover;
    }
    .modal-content h2 {
      color: #ff3333;
      font-family: 'Cinzel Decorative', serif;
      margin-top: 15px;
    }
    .modal-content p {
      color: #ccc;
      margin-top: 10px;
    }
    .close-btn {
      background: red;
      border: none;
      padding: 10px 20px;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 15px;
    }

    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    @keyframes zoomIn { from { transform: scale(0.7); } to { transform: scale(1); } }
  </style>
</head>
<body>
  <div class="bg"></div>
  <div class="fog"></div>

  <section class="hero">
    <h1>Resident Evil Library</h1>
    <p>Pilih koleksi buku atau karakter favoritmu dan temukan kisah mengerikan di baliknya.</p>
    <a href="#content" class="button">Masuk ke Perpustakaan</a>
  </section>

  <!-- Tabs -->
  <div id="content" class="tabs">
    <button class="tab-btn active" data-tab="books">📚 Koleksi Buku</button>
    <button class="tab-btn" data-tab="characters">🧍 Karakter</button>
  </div>
  <!-- Books -->
  <section id="books" class="book-grid">
    @foreach ([
      ['0.png','Resident Evil 0','/residentevil0'],
      ['1.png','Resident Evil 1','/residentevil1'],
      ['2.png','Resident Evil 2','/residentevil2'],
      ['3.png','Resident Evil 3','/residentevil3'],
      ['4.png','Resident Evil 4','/residentevil4'],
      ['5.png','Resident Evil 5','/residentevil5'],
      ['6.png','Resident Evil 6','/residentevil6'],
      ['7.png','Resident Evil 7','/residentevil7'],
      ['8.png','Resident Evil Village','/residentevil8'],
      ['9.png','Resident Evil 9','/residentevil9']
    ] as [$img, $title, $link])
      <a href="{{ $link }}" class="book">
        <img src="{{ $img }}" alt="{{ $title }}">
        <h3>{{ $title }}</h3>
      </a>
    @endforeach
  </section>

  <!-- Characters -->
  <section id="characters" class="character-grid" style="display:none;">
    @foreach ([
      ['chris.jpg','Chris Redfield',"Anggota S.T.A.R.S. yang kuat dan pemberani, dikenal karena keteguhannya melawan bio-organik."],
      ['leon.jpg','Leon Kennedy',"Agen pemerintah berpengalaman dengan keberanian luar biasa di tengah wabah mematikan."],
      ['jill.jpg','Jill Valentine',"Ahli membuka kunci dan strategi bertahan hidup dari tim S.T.A.R.S."],
      ['ada.jpg','Ada Wong',"Mata-mata misterius yang cerdik dan licik, sering muncul dengan tujuan rahasia."],
      ['claire.jpg','Claire Redfield',"Saudari Chris Redfield yang gigih dan berani mencari kebenaran di balik kekacauan."]
    ] as [$img, $name, $desc])
      <div class="character-card" data-name="{{ $name }}" data-img="{{ $img }}" data-desc="{{ $desc }}">
        <img src="{{ $img }}" alt="{{ $name }}">
        <h3>{{ $name }}</h3>
      </div>
    @endforeach
  </section>

  <!-- Modal -->
  <div class="modal" id="modal">
    <div class="modal-content">
      <img id="modal-img" src="" alt="">
      <h2 id="modal-name"></h2>
      <p id="modal-desc"></p>
      <button class="close-btn">Tutup</button>
    </div>
  </div>

  <script>
    // Tab toggle
    const tabs = document.querySelectorAll(".tab-btn");
    const sections = {
      books: document.getElementById("books"),
      characters: document.getElementById("characters"),
    };
    tabs.forEach(btn => {
      btn.addEventListener("click", () => {
        tabs.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
        for (const [key, section] of Object.entries(sections)) {
          section.style.display = key === btn.dataset.tab ? "grid" : "none";
        }
      });
    });

    // Character modal
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");
    const modalName = document.getElementById("modal-name");
    const modalDesc = document.getElementById("modal-desc");
    const closeBtn = document.querySelector(".close-btn");

    document.querySelectorAll(".character-card").forEach(card => {
      card.addEventListener("click", () => {
        modal.classList.add("active");
        modalImg.src = card.dataset.img;
        modalName.textContent = card.dataset.name;
        modalDesc.textContent = card.dataset.desc;
      });
    });
    closeBtn.addEventListener("click", () => modal.classList.remove("active"));
  </script>
</body>
</html>
