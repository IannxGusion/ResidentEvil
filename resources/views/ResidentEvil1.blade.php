{{-- resources/views/residentevil1.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 1 — Buku Cerita</title>
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
      <h1>Resident Evil 1</h1>
      <h3>Kata Pengantar</h3>
      <p>
        Resident Evil 1 menandai awal kisah legendaris di Spencer Mansion, tempat misteri dan kengerian
        bermula. Ikuti perjalanan Jill Valentine dan Chris Redfield, dua anggota tim elit S.T.A.R.S., 
        saat mereka berjuang untuk bertahan hidup dari mimpi buruk yang diciptakan oleh Umbrella Corporation.
      </p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Malam di Spencer Mansion</li>
        <li>Bab 2 — Rahasia di Balik Pintu Terkunci</li>
        <li>Bab 3 — Bayangan di Aula Utama</li>
        <li>Bab 4 — Laboratorium Tersembunyi</li>
        <li>Bab 5 — Tyrant yang Terkurung</li>
        <li>Bab 6 — Pertarungan di Atap Helipad</li>
        <li>Bab 7 — Akhir dari Mimpi Buruk</li>
        <li>Halaman 8 — Galeri Resident Evil 1</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Malam di Spencer Mansion</h2>
      <p>
        Setelah Bravo Team menghilang di Pegunungan Arklay, Alpha Team dikirim untuk menyelidiki.
        Jill, Chris, Barry, dan kapten Wesker menemukan bangkai helikopter dan serangan anjing
        mengerikan. Mereka berlari menuju mansion besar — tanpa menyadari bahwa mereka baru saja
        masuk ke dalam perangkap mematikan.
      </p>
      <div class="image-center"><img src="re1-mansion.jpg" alt="Spencer Mansion"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Rahasia di Balik Pintu Terkunci</h2>
      <p>
        Jill menjelajahi mansion, menemukan berbagai ruangan aneh dan teka-teki mekanis. Setiap
        pintu membutuhkan kunci berbentuk khusus — armor, helm, atau perisai. Di balik setiap pintu,
        kematian menunggu: zombie, perangkap, dan eksperimen Umbrella yang gagal.
      </p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Bayangan di Aula Utama</h2>
      <p>
        Chris menemukan catatan-catatan para peneliti Umbrella. Virus T adalah bioweapon yang
        menyebabkan mutasi ekstrem. Barry tampak mencurigakan, dan Wesker menghilang. Ketegangan
        meningkat di antara para anggota tim.
      </p>
      <div class="image-center"><img src="re1-zombie.jpg" alt="Zombie pertama"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Laboratorium Tersembunyi</h2>
      <p>
        Di bawah mansion, Jill menemukan laboratorium rahasia tempat Umbrella mengembangkan virus
        berbahaya. Rekaman menunjukkan eksperimen brutal pada manusia. Di sinilah mereka menemukan
        proyek pamungkas Umbrella: Tyrant.
      </p>
      <div class="image-right"><img src="re1-lab.jpg" alt="Laboratorium bawah tanah"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Tyrant yang Terkurung</h2>
      <p>
        Wesker, ternyata, adalah agen ganda dari Umbrella. Ia melepaskan Tyrant, senjata biologis
        yang sempurna. Namun, makhluk itu berbalik menyerang penciptanya sendiri. Jill dan Chris
        harus bertarung untuk hidup mereka.
      </p>
      <div class="image-center"><img src="re1-tyrant.jpg" alt="Tyrant"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Pertarungan di Atap Helipad</h2>
      <p>
        Dengan waktu yang hampir habis dan mansion terbakar, Jill, Chris, dan Barry berlari menuju
        helipad. Tyrant muncul sekali lagi, kini lebih buas dari sebelumnya. Dalam detik-detik terakhir,
        Jill menembakkan roket langsung ke makhluk itu — menghancurkannya untuk selamanya.
      </p>
      <div class="image-right"><img src="re1-boss.jpg" alt="Pertarungan terakhir Tyrant"></div>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Akhir dari Mimpi Buruk</h2>
      <p>
        Helikopter Alpha Team lepas landas, meninggalkan mansion yang terbakar habis. Jill menatap
        ke bawah — rasa lega bercampur kesedihan. Ia tahu ini bukan akhir. Umbrella masih hidup,
        dan misteri baru akan segera dimulai.
      </p>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Galeri Resident Evil 1</h2>
      <div class="image-center"><img src="re1-gallery1.jpg" alt="Jill Valentine"></div>
      <div class="image-center"><img src="re1-gallery2.jpg" alt="Chris Redfield"></div>
      <div class="image-center"><img src="re1-gallery3.jpg" alt="Spencer Mansion"></div>
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
    const totalPages = 10;

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
