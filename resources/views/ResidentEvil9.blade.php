{{-- resources/views/residentevil9.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 9 — Akhir dari Kengerian</title>
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
      background: #0f0f0f;
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
      background: #1e1e1e;
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
      <h1>Resident Evil 9</h1>
      <h3>Awal dari Akhir</h3>
      <p>Setelah bertahun-tahun pertempuran melawan Umbrella dan bioweapon, dunia mulai membangun kembali. Namun, di bawah permukaan, bayangan baru muncul — ancaman yang lebih cerdas dan lebih mematikan daripada sebelumnya.</p>
      <p>Chris Redfield, Leon S. Kennedy, dan Jill Valentine kembali — kali ini menghadapi ancaman global yang menguji batas kemanusiaan mereka.</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Bayangan Baru</li>
        <li>Bab 2 — Kembali ke Lapangan</li>
        <li>Bab 3 — Kota yang Hilang</li>
        <li>Bab 4 — Virus Neo-Parasite</li>
        <li>Bab 5 — Pengkhianatan</li>
        <li>Bab 6 — Benteng di Timur</li>
        <li>Bab 7 — Kebangkitan Wesker</li>
        <li>Bab 8 — Pertempuran Terakhir</li>
        <li>Bab 9 — Dunia Baru</li>
        <li>Halaman 10 — Galeri Resident Evil 9</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Bayangan Baru</h2>
      <p>Sebuah organisasi misterius bernama “The Fold” mulai mengacau di Eropa Timur. Mereka mengembangkan varian baru virus parasit yang mampu beradaptasi dengan cepat terhadap lingkungan dan senjata.</p>
      <div class="image-right"><img src="re9-fold.jpg" alt="The Fold"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Kembali ke Lapangan</h2>
      <p>Chris Redfield memimpin unit BSAA terakhir yang tersisa. Bersama Jill dan Leon, mereka menemukan laboratorium bawah tanah di Norwegia, tempat virus baru itu dikembangkan. Namun, tidak semua anggota tim dapat dipercaya.</p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Kota yang Hilang</h2>
      <p>Tim menemukan kota yang hilang di bawah es Arktik — sisa eksperimen Umbrella lama. Virus di sana telah berevolusi, menciptakan makhluk dengan kecerdasan menyerupai manusia.</p>
      <div class="image-center"><img src="re9-city.jpg" alt="Kota Beku"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Virus Neo-Parasite</h2>
      <p>Virus baru, Neo-Parasite, tidak hanya mengubah tubuh tetapi juga pikiran. Pengidapnya dapat berkomunikasi satu sama lain, membentuk “koloni kesadaran”. Chris menyadari ini bukan sekadar wabah — ini adalah evolusi.</p>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Pengkhianatan</h2>
      <p>Leon menemukan bukti bahwa salah satu ilmuwan BSAA adalah dalang di balik pengembangan virus baru ini. Ia menjual data virus ke organisasi global untuk keuntungan politik.</p>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Benteng di Timur</h2>
      <p>Perang besar pecah di benteng The Fold di Siberia. Jill memimpin misi infiltrasi sementara Chris menghadapi dilema antara tugas dan rasa kemanusiaannya.</p>
      <div class="image-center"><img src="re9-fortress.jpg" alt="Benteng Siberia"></div>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Kebangkitan Wesker</h2>
      <p>Eksperimen rahasia mengungkap bahwa Wesker tidak pernah benar-benar mati. Versi klon dengan kesadaran digital kembali untuk mengambil alih dunia melalui jaringan global Neo-Virus.</p>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Pertempuran Terakhir</h2>
      <p>Chris dan Leon menghadapi Wesker di puncak fasilitas The Fold. Dengan bantuan Jill, mereka menghancurkan sistem utama yang mengendalikan virus. Dunia perlahan pulih, namun bayangan tetap tersisa.</p>
      <div class="image-right"><img src="re9-battle.jpg" alt="Pertempuran Akhir"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Dunia Baru</h2>
      <p>BSAA dibubarkan. Leon kembali menjadi agen independen. Jill memutuskan untuk pensiun. Chris menulis laporan terakhirnya: “Kengerian berakhir, tapi manusia tetap menciptakan monster baru.”</p>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 9</h2>
      <div class="image-center"><img src="re9-gallery1.jpg" alt="Chris Redfield"></div>
      <div class="image-center"><img src="re9-gallery2.jpg" alt="Leon Kennedy"></div>
      <div class="image-center"><img src="re9-gallery3.jpg" alt="Jill Valentine"></div>
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
