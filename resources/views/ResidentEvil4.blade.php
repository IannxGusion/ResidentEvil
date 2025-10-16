{{-- resources/views/residentevil4.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 4 — Buku Cerita</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Merriweather&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Merriweather', serif;
      background: #d6c6a8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      transition: background 0.3s, color 0.3s;
    }
    body.dark {
      background: #1c1c1c;
      color: #f0e6d2;
    }
    .book {
      width: 90%;
      max-width: 900px;
      height: 90vh;
      background: #fdf6e3;
      box-shadow: 0 0 30px rgba(0,0,0,0.4);
      border-radius: 8px;
      position: relative;
      padding: 40px;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
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
      margin-top: 0;
      color: #4b2e16;
    }
    body.dark h1, body.dark h2, body.dark h3 {
      color: #e3c28d;
    }
    h1 { text-align: center; font-size: 2rem; }
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
      <h1>Resident Evil 4</h1>
      <h3>Kata Pengantar</h3>
      <p>Beberapa tahun setelah kehancuran Raccoon City, Leon S. Kennedy kini menjadi agen pemerintah AS. Tugas barunya: menyelamatkan putri presiden yang diculik oleh sekte misterius di sebuah desa terpencil di Spanyol. Namun, apa yang menantinya jauh lebih mengerikan dari sekadar penculikan biasa...</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Misi Penyelamatan</li>
        <li>Bab 2 — Desa Kematian</li>
        <li>Bab 3 — Teror di Rumah Desa</li>
        <li>Bab 4 — Los Illuminados</li>
        <li>Bab 5 — Benteng Saddler</li>
        <li>Bab 6 — Ashley Graham</li>
        <li>Bab 7 — Sekte dan Parasit</li>
        <li>Bab 8 — Pertempuran Terakhir</li>
        <li>Bab 9 — Pelarian</li>
        <li>Halaman 10 — Galeri Resident Evil 4</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Misi Penyelamatan</h2>
      <p>Leon dikirim ke Spanyol untuk mencari Ashley Graham, putri presiden AS. Ditemani dua polisi lokal, ia menuju desa terpencil. Namun, suasana di sana terasa tidak wajar—penduduknya seolah dikendalikan oleh sesuatu yang jahat.</p>
      <div class="image-right"><img src="re4-village.jpg" alt="Desa Resident Evil 4"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Desa Kematian</h2>
      <p>Leon diserang oleh warga desa yang berperilaku brutal. Mereka bukan zombie, tapi manusia yang terinfeksi parasit bernama Las Plagas. Setelah pertempuran sengit, Leon menyadari bahwa dia sedang berhadapan dengan sekte fanatik.</p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Teror di Rumah Desa</h2>
      <p>Leon bersembunyi di rumah tua dan bertemu dengan Luis Sera, mantan peneliti Umbrella. Luis mengungkapkan bahwa parasit Las Plagas digunakan oleh sekte Los Illuminados untuk mengendalikan manusia.</p>
      <div class="image-center"><img src="re4-luis.jpg" alt="Luis Sera"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Los Illuminados</h2>
      <p>Leon menghadapi Bitores Mendez, kepala desa sekaligus pengikut fanatik sekte. Dengan nyaris tak selamat, Leon melanjutkan perjalanan menuju kastil besar milik pemimpin sekte, Ramon Salazar.</p>
      <div class="image-right"><img src="re4-castle.jpg" alt="Kastil Salazar"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Benteng Saddler</h2>
      <p>Leon dan Ashley akhirnya menemukan kebenaran di balik penculikan tersebut. Osmund Saddler, pemimpin sekte Los Illuminados, berencana menyebarkan parasit Las Plagas ke dunia melalui tubuh Ashley.</p>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Ashley Graham</h2>
      <p>Ashley bukan hanya korban, tapi juga kunci dalam rencana Saddler. Leon harus melindunginya dari bahaya tanpa henti, bahkan ketika pasukan Saddler mengepung mereka dari segala arah.</p>
      <div class="image-center"><img src="re4-ashley.jpg" alt="Ashley Graham"></div>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Sekte dan Parasit</h2>
      <p>Dengan bantuan Luis dan Ada Wong, Leon berhasil menemukan obat untuk menghancurkan parasit di dalam tubuhnya dan Ashley. Namun pengorbanan Luis menjadi pukulan berat bagi Leon.</p>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Pertempuran Terakhir</h2>
      <p>Leon menghadapi Saddler dalam pertempuran klimaks di fasilitas penelitian bawah tanah. Dengan bantuan Ada, ia berhasil mengalahkan Saddler menggunakan roket peluncur. Namun Ada menghilang, meninggalkan Leon sendirian bersama Ashley.</p>
      <div class="image-right"><img src="re4-saddler.jpg" alt="Pertarungan Saddler"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Pelarian</h2>
      <p>Leon dan Ashley melarikan diri menggunakan jet ski melewati gua yang runtuh. Mereka akhirnya selamat, membawa harapan baru bagi dunia yang hampir dikuasai kegelapan sekte Los Illuminados.</p>
      <div class="image-center"><img src="re4-escape.jpg" alt="Pelarian Leon dan Ashley"></div>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 4</h2>
      <div class="image-center"><img src="re4-gallery1.jpg" alt="Leon S. Kennedy"></div>
      <div class="image-center"><img src="re4-gallery2.jpg" alt="Ada Wong"></div>
      <div class="image-center"><img src="re4-gallery3.jpg" alt="Ashley Graham"></div>
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
    const totalPages = 12;

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
