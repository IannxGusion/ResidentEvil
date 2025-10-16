{{-- resources/views/residentevil2.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 2 — Buku Cerita</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Merriweather&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Merriweather', serif;
      background: #c5b89f;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
      transition: background 0.3s, color 0.3s;
    }

    body.dark {
      background: #0d0d0d;
      color: #f8f0dc;
    }

    .book {
      width: 90%;
      max-width: 900px;
      height: 90vh;
      background: #fdf6e3;
      box-shadow: 0 0 30px rgba(0,0,0,0.4);
      border-radius: 10px;
      position: relative;
      padding: 40px;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
      transition: background 0.3s, color 0.3s;
    }
    body.dark .book {
      background: #222;
      color: #f8f0dc;
    }

    .page-content {
      flex: 1;
      overflow-y: auto;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1, h2, h3 {
      font-family: 'Cinzel Decorative', serif;
      color: #42210b;
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
      background: #a77a4b;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    .nav button:hover { background: #8a6236; }

    .image-center, .image-right {
      text-align: center;
      margin: 15px 0;
    }
    .image-right { text-align: right; }
    .image-center img, .image-right img {
      max-width: 80%;
      border-radius: 8px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.5);
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
      <h1>Resident Evil 2</h1>
      <h3>Kata Pengantar</h3>
      <p>Resident Evil 2 membawa kita ke dalam mimpi buruk di Raccoon City. Dua tokoh — Leon S. Kennedy, polisi pemula di hari pertamanya bertugas, dan Claire Redfield, kakak dari Chris Redfield — berjuang melawan kengerian yang diciptakan oleh virus T hasil eksperimen Umbrella Corporation.</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Kota yang Terinfeksi</li>
        <li>Bab 2 — Pertemuan di Tengah Neraka</li>
        <li>Bab 3 — Menuju Kantor Polisi Raccoon</li>
        <li>Bab 4 — Rahasia di Balik R.P.D</li>
        <li>Bab 5 — Teror di Bawah Tanah</li>
        <li>Bab 6 — Eksperimen yang Gagal</li>
        <li>Bab 7 — William Birkin dan Virus G</li>
        <li>Bab 8 — Pelarian dari Neraka</li>
        <li>Bab 9 — Akhir dan Awal Baru</li>
        <li>Halaman 10 — Galeri Resident Evil 2</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Kota yang Terinfeksi</h2>
      <p>Raccoon City telah jatuh ke dalam kekacauan. Wabah misterius membuat warganya berubah menjadi zombie. Leon S. Kennedy yang baru tiba di kota itu, segera mendapati bahwa tempat tugas pertamanya berubah menjadi medan pertempuran hidup dan mati.</p>
      <div class="image-right"><img src="re2-city.jpg" alt="Raccoon City"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Pertemuan di Tengah Neraka</h2>
      <p>Leon bertemu Claire Redfield di tengah kekacauan. Bersama, mereka mencoba mencari jalan keluar dari kota. Namun, mereka berpisah setelah truk bahan bakar meledak, memaksa keduanya bertahan sendiri dengan rute yang berbeda.</p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Menuju Kantor Polisi Raccoon</h2>
      <p>Leon tiba di kantor polisi R.P.D. yang ternyata sudah dipenuhi zombie. Di sana ia menemukan pesan terakhir dari anggota S.T.A.R.S., mengungkapkan kebenaran tentang eksperimen Umbrella yang gagal.</p>
      <div class="image-center"><img src="re2-rpd.jpg" alt="RPD Station"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Rahasia di Balik R.P.D</h2>
      <p>Claire bertemu seorang anak kecil bernama Sherry Birkin yang dikejar makhluk menakutkan. Sementara Leon bertemu wanita misterius bernama Ada Wong yang mengaku mencari seseorang dari Umbrella. Perlahan, rahasia kegelapan di kantor polisi mulai terkuak.</p>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Teror di Bawah Tanah</h2>
      <p>Keduanya menemukan jalur menuju fasilitas bawah tanah yang digunakan Umbrella untuk eksperimen. Di sana, mereka menghadapi monster ganas dan jebakan mematikan. Suasana semakin mencekam ketika mereka bertemu dengan makhluk yang dulunya manusia.</p>
      <div class="image-center"><img src="re2-sewer.jpg" alt="Saluran bawah tanah"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Eksperimen yang Gagal</h2>
      <p>Umbrella telah menciptakan virus baru bernama G-Virus. Peneliti utamanya, Dr. William Birkin, berubah menjadi monster setelah menyuntikkan virus itu ke dirinya sendiri untuk melindunginya dari agen Umbrella. Kini, ia menjadi ancaman terbesar di fasilitas itu.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: William Birkin dan Virus G</h2>
      <p>William Birkin menjadi sosok monster yang terus berevolusi. Ia mengejar Sherry, anaknya sendiri, untuk menjadikannya inang virus G. Leon dan Claire bekerja sama untuk menghentikannya, meski hampir kehilangan nyawa mereka.</p>
      <div class="image-right"><img src="re2-birkin.jpg" alt="William Birkin"></div>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Pelarian dari Neraka</h2>
      <p>Setelah mengalahkan Birkin, mereka berlari menuju kereta bawah tanah untuk melarikan diri. Namun, makhluk itu belum benar-benar mati. Dalam pertarungan terakhir, Leon dan Claire menghancurkannya sekali lagi sebelum fasilitas meledak.</p>
      <div class="image-center"><img src="re2-train.jpg" alt="Kereta Pelarian"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Akhir dan Awal Baru</h2>
      <p>Leon, Claire, dan Sherry berhasil keluar dari reruntuhan. Kota Raccoon kini hancur dan ditelan api. Meski mereka selamat, perang melawan Umbrella baru saja dimulai. Kisah mereka akan berlanjut dalam perjuangan melawan kejahatan yang lebih besar.</p>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 2</h2>
      <div class="image-center"><img src="re2-leon.jpg" alt="Leon S. Kennedy"></div>
      <div class="image-center"><img src="re2-claire.jpg" alt="Claire Redfield"></div>
      <div class="image-center"><img src="re2-sherry.jpg" alt="Sherry Birkin"></div>
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
