{{-- resources/views/residentevil7.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 7 — Buku Cerita</title>
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
      <h1>Resident Evil 7: Biohazard</h1>
      <h3>Kata Pengantar</h3>
      <p>Setelah kengerian Raccoon City, dunia tampak tenang — hingga seorang pria bernama Ethan Winters menerima pesan dari istrinya yang telah lama hilang. Pesan itu membawanya ke rumah keluarga Baker, di pedalaman Louisiana... tempat mimpi buruk baru dimulai.</p>
      <div class="image-center"><img src="re7-house.jpg" alt="Rumah Baker"></div>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Pesan dari Masa Lalu</li>
        <li>Bab 2 — Rumah Baker</li>
        <li>Bab 3 — Jack yang Tak Mati</li>
        <li>Bab 4 — Rahasia di Ruang Bawah Tanah</li>
        <li>Bab 5 — Pertarungan di Rumah Lama</li>
        <li>Bab 6 — Evelyn, Anak Misterius</li>
        <li>Bab 7 — Kebangkitan Ethan</li>
        <li>Bab 8 — Akhir dari Mimpi Buruk</li>
        <li>Bab 9 — Galeri Biohazard</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Pesan dari Masa Lalu</h2>
      <p>Ethan menerima video dari istrinya, Mia, yang telah dinyatakan hilang tiga tahun lalu. Dalam video itu, Mia tampak ketakutan dan memohon agar Ethan tidak mencarinya. Namun cinta membutakan, dan ia memutuskan untuk pergi ke Louisiana demi menjemputnya.</p>
      <div class="image-right"><img src="re7-video.jpg" alt="Pesan dari Mia"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Rumah Baker</h2>
      <p>Rumah keluarga Baker tampak tua dan sepi, namun bau busuk daging membusuk memenuhi udara. Ethan menemukan Mia, tapi sesuatu telah berubah dalam dirinya. Dalam sekejap, wanita yang ia cintai menyerangnya dengan brutal.</p>
      <div class="image-center"><img src="re7-mia.jpg" alt="Mia menyerang Ethan"></div>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Jack yang Tak Mati</h2>
      <p>Jack Baker, kepala keluarga yang gila, memburu Ethan tanpa henti. Tak peduli berapa kali ia ditembak atau dihancurkan, Jack selalu bangkit kembali. Pertarungan mereka di garasi menjadi salah satu momen paling menegangkan yang pernah Ethan alami.</p>
      <div class="image-right"><img src="re7-jack.jpg" alt="Jack Baker"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Rahasia di Ruang Bawah Tanah</h2>
      <p>Di bawah rumah Baker, Ethan menemukan laboratorium tersembunyi. Dari catatan lama, ia mengetahui bahwa keluarga itu terinfeksi oleh senjata biologis bernama “Eveline” — seorang anak buatan yang mampu mengendalikan orang lain dengan infeksi jamur.</p>
      <div class="image-center"><img src="re7-lab.jpg" alt="Laboratorium"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Pertarungan di Rumah Lama</h2>
      <p>Ethan berhadapan dengan Marguerite Baker dan kawanan serangga mutan di rumah lama. Di tengah kekacauan, ia menemukan serum yang dapat menyembuhkan infeksi. Namun keputusan siapa yang harus diselamatkan — Mia atau Zoe — menjadi dilema moral yang berat.</p>
      <div class="image-center"><img src="re7-marguerite.jpg" alt="Marguerite Baker"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Evelyn, Anak Misterius</h2>
      <p>Eveline bukan manusia biasa. Ia adalah hasil eksperimen Umbrella yang gagal, dengan kemampuan mengontrol manusia lewat spora jamur. Obsesinya menciptakan “keluarga” membuatnya menjadi ancaman mematikan bagi siapa pun di dekatnya.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Kebangkitan Ethan</h2>
      <p>Setelah hampir mati, Ethan terbangun di laboratorium Umbrella. Dengan bantuan Chris Redfield, ia mengetahui bahwa perusahaan itu kini mencoba memperbaiki kesalahan masa lalu. Bersama-sama, mereka menghadapi bentuk akhir mutasi Eveline.</p>
      <div class="image-center"><img src="re7-chris.jpg" alt="Chris Redfield"></div>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Akhir dari Mimpi Buruk</h2>
      <p>Dengan senjata khusus yang diberikan Chris, Ethan akhirnya menghancurkan Eveline. Mia selamat, dan untuk pertama kalinya dalam bertahun-tahun, keduanya dapat menghirup udara bebas. Namun, luka batin dari rumah Baker akan selamanya membekas di hati mereka.</p>
      <div class="image-center"><img src="re7-end.jpg" alt="Akhir Resident Evil 7"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Galeri Biohazard</h2>
      <div class="image-center"><img src="re7-gallery1.jpg" alt="Rumah Baker"></div>
      <div class="image-center"><img src="re7-gallery2.jpg" alt="Ethan dan Mia"></div>
      <div class="image-center"><img src="re7-gallery3.jpg" alt="Eveline"></div>
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
