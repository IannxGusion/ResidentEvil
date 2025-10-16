{{-- resources/views/residentevil0.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 0 — Buku Cerita</title>
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
      <h1>Resident Evil 0</h1>
      <h3>Kata Pengantar</h3>
      <p>Resident Evil 0 membawa kita ke awal kisah kengerian di Pegunungan Arklay. Ikuti perjalanan Rebecca Chambers, anggota termuda S.T.A.R.S. Bravo Team, saat ia menemukan rahasia kelam di balik Umbrella Corporation.</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Malam di Pegunungan Arklay</li>
        <li>Bab 2 — Pertemuan dengan Billy</li>
        <li>Bab 3 — Bayangan di Hutan</li>
        <li>Bab 4 — Rahasia Kereta Ecliptic Express</li>
        <li>Bab 5 — Misteri Laboratorium Tersembunyi</li>
        <li>Bab 6 — Kebangkitan Lintah Ratu</li>
        <li>Bab 7 — Konspirasi Umbrella</li>
        <li>Bab 8 — Pertarungan Terakhir</li>
        <li>Bab 9 — Awal dari Segalanya</li>
        <li>Halaman 10 — Galeri Resident Evil 0</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Malam di Pegunungan Arklay</h2>
      <p>Bravo Team dikirim untuk menyelidiki serangkaian pembunuhan aneh. Rebecca Chambers, meski masih muda dan kurang pengalaman, ikut serta. Malam itu, mereka menemukan kereta misterius bernama Ecliptic Express yang berhenti di tengah hutan. Ketika naik ke dalam, Rebecca mendapati pemandangan mengerikan: mayat hidup memenuhi kereta...</p>
      <div class="image-right"><img src="re0-kereta.jpg" alt="Ecliptic Express"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Pertemuan dengan Billy</h2>
      <p>Rebecca bertemu dengan Billy Coen, seorang mantan marinir sekaligus narapidana yang sedang dikawal sebelum kereta itu diserang. Awalnya Rebecca ragu, namun keadaan memaksa mereka bekerja sama untuk bertahan hidup. Hubungan yang penuh ketegangan mulai tumbuh menjadi kerja sama yang tak terduga.</p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Bayangan di Hutan</h2>
      <p>Kereta yang mereka naiki akhirnya tergelincir dan hancur di hutan. Rebecca dan Billy berjalan menembus pepohonan gelap, menghadapi anjing zombie dan makhluk hasil eksperimen Umbrella. Perlahan, keduanya menyadari bahwa ada sesuatu yang lebih besar mengintai mereka.</p>
      <div class="image-center"><img src="re0-hutan.jpg" alt="Hutan Resident Evil 0"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Rahasia Kereta Ecliptic Express</h2>
      <p>Rebecca mengetahui bahwa kereta itu adalah bagian dari eksperimen rahasia Umbrella. Catatan-catatan yang ditemukan menunjukkan percobaan terhadap lintah yang dimodifikasi, menciptakan makhluk yang haus darah. Seorang pria misterius dengan mantel panjang, James Marcus, tampaknya menjadi dalang di balik semuanya.</p>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Misteri Laboratorium Tersembunyi</h2>
      <p>Di dalam laboratorium tersembunyi, Rebecca dan Billy menemukan bukti kekejaman Umbrella: penelitian biologis yang tidak manusiawi. Mereka harus melawan monster-mutasi mengerikan, termasuk seekor kelelawar raksasa yang menguasai ruang penelitian.</p>
      <div class="image-center"><img src="re0-lab.jpg" alt="Laboratorium Resident Evil 0"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Kebangkitan Lintah Ratu</h2>
      <p>Lintah-lintah eksperimen bersatu membentuk makhluk menjijikkan yang dikenal sebagai Lintah Ratu. Sosok itu adalah manifestasi dari kebencian James Marcus terhadap Umbrella. Pertarungan menjadi semakin sulit, Rebecca dan Billy hanya bisa bertahan dengan saling melindungi.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Konspirasi Umbrella</h2>
      <p>Kebenaran semakin jelas: Umbrella bukan sekadar perusahaan farmasi, melainkan dalang di balik terciptanya virus mematikan. Rebecca menyadari bahwa Bravo Team hanyalah pion dalam permainan besar yang jauh lebih berbahaya dari yang ia bayangkan.</p>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Pertarungan Terakhir</h2>
      <p>Di ruang bawah tanah fasilitas Umbrella, Rebecca dan Billy menghadapi Lintah Ratu dalam wujud raksasa. Dengan sisa tenaga terakhir, mereka menghancurkan makhluk itu. Namun, kebakaran yang melanda laboratorium memaksa mereka untuk segera melarikan diri.</p>
      <div class="image-right"><img src="re0-boss.jpg" alt="Pertarungan Lintah Ratu"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Awal dari Segalanya</h2>
      <p>Rebecca melepaskan Billy, meski tahu ia akan tetap menjadi buronan. Mereka berpisah dengan saling menghormati. Rebecca kemudian menuju ke mansion Spencer, tempat Bravo Team lainnya berada... sebuah awal dari kengerian baru yang akan tercatat dalam sejarah sebagai Insiden Spencer Mansion.</p>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 0</h2>
      <div class="image-center"><img src="re0-gallery1.jpg" alt="Rebecca Chambers"></div>
      <div class="image-center"><img src="re0-gallery2.jpg" alt="Billy Coen"></div>
      <div class="image-center"><img src="re0-gallery3.jpg" alt="Ecliptic Express"></div>
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
