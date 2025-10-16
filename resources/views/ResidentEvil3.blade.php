{{-- resources/views/residentevil3.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 3 — Buku Cerita</title>
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
      <h1>Resident Evil 3</h1>
      <h3>Kata Pengantar</h3>
      <p>Raccoon City telah jatuh. Wabah virus T menyebar tanpa kendali. Jill Valentine, anggota S.T.A.R.S., berjuang untuk bertahan hidup di tengah kehancuran. Namun, sesuatu yang lebih mematikan memburunya — proyek biologis yang dikenal sebagai <strong>Nemesis</strong>.</p>
      <div class="image-center"><img src="re3-intro.jpg" alt="Raccoon City"></div>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Awal Mimpi Buruk</li>
        <li>Bab 2 — Pelarian Jill</li>
        <li>Bab 3 — Nemesis: Pemburu S.T.A.R.S.</li>
        <li>Bab 4 — Bertemu Carlos Oliveira</li>
        <li>Bab 5 — Kengerian di Balik Kota</li>
        <li>Bab 6 — Rahasia Umbrella Terungkap</li>
        <li>Bab 7 — Pengkhianatan dan Pengorbanan</li>
        <li>Bab 8 — Pertarungan Terakhir</li>
        <li>Bab 9 — Raccoon City Hancur</li>
        <li>Halaman 10 — Galeri Resident Evil 3</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Awal Mimpi Buruk</h2>
      <p>Jill Valentine terperangkap dalam mimpi buruk yang tak berakhir. Rumahnya dikepung zombie, dan jalanan Raccoon City telah menjadi neraka. Ia tahu, waktunya untuk melarikan diri sudah tiba sebelum kota itu sepenuhnya musnah.</p>
      <div class="image-right"><img src="re3-jill-room.jpg" alt="Jill Valentine di Apartemen"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Pelarian Jill</h2>
      <p>Jill berlari melewati reruntuhan kota, mencari jalan keluar. Namun, suara langkah berat dan raungan mengerikan menggema di kejauhan — sesuatu sedang memburunya. Sesuatu yang jauh lebih berbahaya daripada zombie biasa.</p>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Nemesis — Pemburu S.T.A.R.S.</h2>
      <p>Dari kegelapan muncul makhluk raksasa berjas hitam: <strong>Nemesis</strong>. Ia hanya memiliki satu tujuan — memburu semua anggota S.T.A.R.S. Jill menjadi target utama. Dengan kekuatan luar biasa, Nemesis menghancurkan apapun yang menghalanginya.</p>
      <div class="image-center"><img src="re3-nemesis.jpg" alt="Nemesis"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Bertemu Carlos Oliveira</h2>
      <p>Dalam keputusasaan, Jill diselamatkan oleh Carlos Oliveira, anggota Umbrella Biohazard Countermeasure Service (U.B.C.S). Meski berasal dari Umbrella, Carlos justru membantu Jill menemukan jalan keluar dari kota.</p>
      <div class="image-right"><img src="re3-carlos.jpg" alt="Carlos Oliveira"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Kengerian di Balik Kota</h2>
      <p>Keduanya menemukan sisa-sisa warga yang selamat, namun sebagian besar sudah terinfeksi. Di bawah tanah, laboratorium rahasia Umbrella menyimpan kebenaran mengerikan — virus T bukan satu-satunya proyek mereka.</p>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Rahasia Umbrella Terungkap</h2>
      <p>Jill menemukan file tentang eksperimen Nemesis. Ia adalah hasil modifikasi lanjutan dari proyek Tyrant, dirancang khusus untuk berburu manusia. Umbrella menciptakan senjata biologis yang tak terkendali.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Pengkhianatan dan Pengorbanan</h2>
      <p>Salah satu anggota U.B.C.S. mengkhianati tim, meninggalkan mereka di ambang kehancuran. Carlos berkorban untuk menyelamatkan Jill dari infeksi virus, membuktikan bahwa ia lebih manusiawi daripada Umbrella sendiri.</p>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Pertarungan Terakhir</h2>
      <p>Dengan senjata eksperimental, Jill menghadapi Nemesis di fasilitas penelitian bawah tanah. Pertarungan brutal berakhir dengan Jill menghancurkan makhluk itu menggunakan railgun. Nemesis akhirnya hancur, namun kota juga akan musnah.</p>
      <div class="image-center"><img src="re3-finalbattle.jpg" alt="Pertarungan Terakhir Nemesis"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Raccoon City Hancur</h2>
      <p>Ketika Jill dan Carlos berhasil kabur, rudal nuklir diluncurkan untuk menghapus Raccoon City dari peta. Jill menatap langit merah menyala, bersumpah untuk mengungkap kejahatan Umbrella ke seluruh dunia.</p>
      <div class="image-right"><img src="re3-ending.jpg" alt="Raccoon City Hancur"></div>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 3</h2>
      <div class="image-center"><img src="re3-jill.jpg" alt="Jill Valentine"></div>
      <div class="image-center"><img src="re3-carlos2.jpg" alt="Carlos Oliveira"></div>
      <div class="image-center"><img src="re3-nemesis2.jpg" alt="Nemesis Kedua"></div>
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
