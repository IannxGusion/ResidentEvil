{{-- resources/views/residentevil6.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 6 — Buku Cerita</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Merriweather&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Merriweather', serif;
      background: #cbbba0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      transition: background 0.3s, color 0.3s;
    }

    body.dark {
      background: #111;
      color: #f0e6d2;
    }

    .book {
      width: 90%;
      max-width: 900px;
      height: 90vh;
      background: #fdf6e3;
      box-shadow: 0 0 30px rgba(0,0,0,0.5);
      border-radius: 8px;
      position: relative;
      padding: 40px;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
      transition: background 0.3s, color 0.3s;
    }

    body.dark .book {
      background: #2a2a2a;
      color: #f0e6d2;
    }

    .page-content {
      flex: 1;
      overflow-y: auto;
    }

    h1, h2, h3 {
      font-family: 'Cinzel Decorative', serif;
      color: #4b2e16;
    }

    body.dark h1, body.dark h2, body.dark h3 {
      color: #e3c28d;
    }

    h1 { text-align: center; font-size: 2rem; margin-top: 0; }
    h2 { margin-top: 25px; border-left: 4px solid #c19a6b; padding-left: 10px; }

    p { text-align: justify; line-height: 1.7; margin: 15px 0; }

    .footer {
      text-align: center;
      font-size: 0.9rem;
      color: #555;
      margin-top: 15px;
    }
    body.dark .footer { color: #ccc; }

    .nav {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .nav button {
      background: #c19a6b;
      border: none;
      padding: 8px 16px;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .nav button:hover { background: #a98255; }

    .image-center, .image-right {
      text-align: center;
      margin: 15px 0;
    }

    .image-right { text-align: right; }

    .image-center img, .image-right img {
      max-width: 80%;
      border-radius: 8px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }

    .hidden { display: none; }

    .dark-toggle {
      position: absolute;
      top: 15px;
      right: 20px;
      background: #4b2e16;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 0.9rem;
    }

    body.dark .dark-toggle { background: #e3c28d; color: #222; }
  </style>
</head>
<body>
  <div class="book">
    <button class="dark-toggle" onclick="toggleDarkMode()">🌙</button>

    <!-- Halaman -->
    <div id="page-1" class="page-content">
      <h1>Resident Evil 6</h1>
      <h3>Kata Pengantar</h3>
      <p>Wabah global melanda dunia. Virus baru, dikenal sebagai C-Virus, mengubah manusia menjadi monster di seluruh dunia. Empat kisah saling terhubung — Leon, Chris, Jake, dan Ada Wong — bertemu di tengah kekacauan untuk mengungkap konspirasi besar yang melibatkan Neo-Umbrella.</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Awal Kekacauan</li>
        <li>Bab 2 — Kota yang Terinfeksi</li>
        <li>Bab 3 — Pasukan BSAA</li>
        <li>Bab 4 — Warisan Wesker</li>
        <li>Bab 5 — Misi Ada Wong</li>
        <li>Bab 6 — Konspirasi Neo-Umbrella</li>
        <li>Bab 7 — Pertempuran di Langit</li>
        <li>Bab 8 — Akhir Kegelapan</li>
        <li>Halaman 9 — Galeri Resident Evil 6</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Awal Kekacauan</h2>
      <p>Leon S. Kennedy menghadapi mimpi buruk baru di Tall Oaks ketika Presiden AS sendiri berubah menjadi zombie. Keputusan berat diambil — dan kengerian dimulai. Bersama Helena Harper, Leon mencari kebenaran di balik serangan itu.</p>
      <div class="image-right"><img src="re6-leon.jpg" alt="Leon S. Kennedy"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Kota yang Terinfeksi</h2>
      <p>Di bawah hujan lebat, Leon dan Helena melarikan diri dari kota yang telah jatuh. Sementara itu, pasukan BSAA yang dipimpin Chris Redfield bertempur di Eropa Timur menghadapi bio-organic weapons (B.O.W) baru hasil eksperimen C-Virus.</p>
      <div class="image-center"><img src="re6-city.jpg" alt="Kota Tall Oaks"></div>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Pasukan BSAA</h2>
      <p>Chris, yang masih dihantui oleh masa lalunya, memimpin tim BSAA untuk menumpas Neo-Umbrella. Namun, pengkhianatan dari dalam mengubah misi menjadi tragedi berdarah. Rekannya tewas, dan Chris terpaksa menghadapi trauma lamanya.</p>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Warisan Wesker</h2>
      <p>Jake Muller, putra dari Albert Wesker, menjadi target Neo-Umbrella karena darahnya mengandung antibodi terhadap C-Virus. Bersama Sherry Birkin, mereka berusaha melarikan diri dari kejaran monster J’avo dan bio-weapon mengerikan.</p>
      <div class="image-center"><img src="re6-jake.jpg" alt="Jake Muller dan Sherry Birkin"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Misi Ada Wong</h2>
      <p>Ada Wong muncul di balik bayangan. Dengan tujuan misterius, ia menyusup ke markas Neo-Umbrella. Namun ada seseorang yang menggunakan wajahnya untuk menciptakan kekacauan — Carla Radames, ilmuwan gila di balik tirai virus baru ini.</p>
      <div class="image-right"><img src="re6-ada.jpg" alt="Ada Wong"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Konspirasi Neo-Umbrella</h2>
      <p>Semua jalur akhirnya bertemu di China. Leon, Chris, Jake, dan Ada melawan gelombang mutasi besar-besaran. Kebenaran tentang Neo-Umbrella dan eksperimen C-Virus akhirnya terungkap.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Pertempuran di Langit</h2>
      <p>Pertempuran terakhir terjadi di atas kapal perang Neo-Umbrella. Chris dan Piers melawan makhluk raksasa, sedangkan Leon berhadapan dengan Carla yang telah bermutasi. Dunia di ambang kehancuran total.</p>
      <div class="image-center"><img src="re6-battle.jpg" alt="Pertempuran di Kapal"></div>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Akhir Kegelapan</h2>
      <p>Piers mengorbankan dirinya demi menghentikan virus di kapal itu. Chris bersumpah untuk terus berjuang. Leon dan Ada berpisah seperti biasa, masing-masing membawa rahasia mereka sendiri. Dunia mulai pulih, tapi bayangan kegelapan belum benar-benar lenyap.</p>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Galeri Resident Evil 6</h2>
      <div class="image-center"><img src="re6-leonhelena.jpg" alt="Leon dan Helena"></div>
      <div class="image-center"><img src="re6-chrispiers.jpg" alt="Chris dan Piers"></div>
      <div class="image-center"><img src="re6-jakeada.jpg" alt="Jake dan Ada Wong"></div>
    </div>

    <!-- Footer -->
    <div class="footer">Halaman <span id="page-number">1</span></div>

    <!-- Navigasi -->
    <div class="nav">
      <button onclick="prevPage()">⬅ Prev</button>
      <button onclick="nextPage()">Next ➡</button>
    </div>
  </div>

  <script>
    let currentPage = 1;
    const totalPages = 11;

    function showPage(page) {
      for (let i = 1; i <= totalPages; i++) {
        document.getElementById(`page-${i}`).classList.add('hidden');
      }
      document.getElementById(`page-${page}`).classList.remove('hidden');
      document.getElementById("page-number").textContent = page;
    }

    function nextPage() {
      if (currentPage < totalPages) {
        currentPage++;
        showPage(currentPage);
      }
    }

    function prevPage() {
      if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);
      }
    }

    function toggleDarkMode() {
      document.body.classList.toggle("dark");
    }

    showPage(currentPage);
  </script>
</body>
</html>
