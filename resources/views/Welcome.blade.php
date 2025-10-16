<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resident Evil Library</title>

  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      background: #000;
      font-family: 'Montserrat', sans-serif;
      color: white;
      overflow-x: hidden;
    }

    /* Background & Fog */
    .bg {
      position: fixed;
      inset: 0;
      background: url('residentevil.jpeg') no-repeat center/cover;
      filter: brightness(0.25);
      z-index: -2;
    }

    .fog {
      position: fixed;
      inset: 0;
      background: url('residentevil.jpeg');
      opacity: 0.3;
      animation: fogMove 90s linear infinite;
      z-index: -1;
    }

    @keyframes fogMove {
      from { background-position: 0 0; }
      to { background-position: 200% 0; }
    }

    /* Hero Section */
    .hero {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: linear-gradient(to bottom, rgba(0,0,0,0.3), #000);
    }

    h1 {
      font-family: 'Cinzel Decorative', serif;
      font-size: 4rem;
      color: #ff1c1c;
      letter-spacing: 2px;
      text-shadow: 0 0 25px red, 0 0 50px darkred;
      animation: fadeInUp 1.2s ease-out forwards;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    p {
      font-size: 1.2rem;
      max-width: 600px;
      margin-top: 20px;
      color: #ccc;
    }

    a.button {
      margin-top: 30px;
      padding: 12px 40px;
      background: linear-gradient(90deg, #900 0%, #c00 100%);
      color: white;
      font-weight: bold;
      border-radius: 6px;
      text-decoration: none;
      letter-spacing: 1px;
      box-shadow: 0 0 20px #700;
      transition: 0.3s;
    }

    a.button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px #f00;
    }

    /* Tabs */
    .tabs {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 50px 0 20px;
    }

    .tab-btn {
      padding: 14px 35px;
      background: #111;
      color: #aaa;
      border: 2px solid #440000;
      font-family: 'Cinzel Decorative', serif;
      font-size: 1.1rem;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .tab-btn:hover {
      color: #fff;
      border-color: #b00;
    }

    .tab-btn.active {
      color: #fff;
      background: linear-gradient(90deg, #700, #b00);
      border-color: #c00;
      box-shadow: 0 0 15px red;
    }

    /* Books Grid */
    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 30px;
      padding: 40px;
      transition: opacity 0.5s ease;
    }

    .book {
      background: #0b0b0b;
      border: 1px solid #440000;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .book img {
      width: 100%;
      height: 320px;
      object-fit: cover;
      transition: all 0.3s ease;
      filter: brightness(0.85);
    }

    .book h3 {
      font-family: 'Cinzel Decorative', serif;
      font-size: 1.1rem;
      background: #000;
      color: #ff4444;
      padding: 15px;
      margin: 0;
    }

    .book:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px #900;
    }

    /* Character Grid */
    .character-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
      gap: 30px;
      padding: 40px;
      transition: opacity 0.5s ease;
    }

    .character-card {
      background: #0b0b0b;
      border-radius: 10px;
      border: 1px solid #440000;
      overflow: hidden;
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .character-card img {
      width: 100%;
      height: 320px;
      object-fit: cover;
      border-bottom: 2px solid #a00;
    }

    .character-card h3 {
      font-family: 'Cinzel Decorative', serif;
      color: #ff5555;
      padding: 15px;
    }

    .character-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px red;
    }

    /* Modal */
    .modal {
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.9);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 1000;
    }

    .modal.active {
      display: flex;
      animation: fadeIn 0.4s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .modal-content {
      background: #111;
      border: 2px solid #b00;
      border-radius: 10px;
      max-width: 600px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 0 40px #a00;
      animation: zoomIn 0.4s ease;
    }

    @keyframes zoomIn {
      from { transform: scale(0.7); }
      to { transform: scale(1); }
    }

    .modal-content img {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      border: 2px solid #600;
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
      background: linear-gradient(90deg, #700, #a00);
      border: none;
      padding: 10px 25px;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 20px;
      transition: 0.3s;
    }

    .close-btn:hover {
      background: red;
      box-shadow: 0 0 20px red;
    }
  </style>
</head>
<body>
  <div class="bg"></div>
  <div class="fog"></div>

  <section class="hero">
    <h1>Resident Evil Library</h1>
    <p>Jelajahi kisah-kisah mengerikan dan karakter legendaris dalam dunia Resident Evil.</p>
    <a href="#content" class="button">Masuk ke Koleksi</a>
  </section>

  <!-- Tabs -->
  <div id="content" class="tabs">
    <button class="tab-btn active" data-tab="books">Koleksi Buku</button>
    <button class="tab-btn" data-tab="characters">Karakter</button>
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
      ['8.png','Resident Evil 8 Village','/residentevil8'],
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
      ['chris.jpg','Chris Redfield',"Anggota S.T.A.R.S. yang kuat dan pemberani."],
      ['leon.jpg','Leon Kennedy',"Agen pemerintah berani di tengah wabah mematikan."],
      ['jill.jpg','Jill Valentine',"Ahli strategi bertahan hidup dari tim S.T.A.R.S."],
      ['ada.jpg','Ada Wong',"Mata-mata misterius dengan tujuan tersembunyi."],
      ['claire.jpg','Claire Redfield',"Saudari Chris Redfield yang gigih dan pemberani."]
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

    // Modal
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
