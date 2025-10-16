{{-- resources/views/residentevil5.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 5 — Buku Cerita</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Merriweather&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Merriweather', serif;
      background: #e5d3b3;
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
      background: #faf4e0;
      box-shadow: 0 0 30px rgba(0,0,0,0.4);
      border-radius: 8px;
      position: relative;
      padding: 40px;
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
      <h1>Resident Evil 5</h1>
      <h3>Kata Pengantar</h3>
      <p>Resident Evil 5 membawa Chris Redfield ke jantung Afrika, tempat wabah biologis baru mengancam dunia. Bersama Sheva Alomar, ia menghadapi kegelapan baru di bawah bayang-bayang Umbrella dan masa lalunya sendiri.</p>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Misi ke Kijuju</li>
        <li>Bab 2 — Sheva Alomar</li>
        <li>Bab 3 — Kengerian di Pasar</li>
        <li>Bab 4 — Kembali ke Masa Lalu</li>
        <li>Bab 5 — Misteri Tricell</li>
        <li>Bab 6 — Eksperimen Uroboros</li>
        <li>Bab 7 — Pertarungan Melawan Jill</li>
        <li>Bab 8 — Chris vs Wesker</li>
        <li>Bab 9 — Akhir Umbrella</li>
        <li>Halaman 10 — Galeri Resident Evil 5</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Misi ke Kijuju</h2>
      <p>Chris Redfield dikirim ke kota Kijuju di Afrika bersama agen lokal Sheva Alomar. Mereka bertugas menghentikan perdagangan senjata biologis. Namun, mereka segera mendapati bahwa penduduk setempat telah berubah menjadi makhluk buas akibat infeksi virus baru.</p>
      <div class="image-center"><img src="re5-kijuju.jpg" alt="Kijuju Market"></div>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Sheva Alomar</h2>
      <p>Sheva adalah anggota BSAA yang memiliki tekad kuat untuk melindungi negerinya. Hubungannya dengan Chris semakin erat, meski mereka berasal dari dunia yang berbeda. Sheva menjadi lambang harapan dan kemanusiaan di tengah kekacauan.</p>
      <div class="image-right"><img src="re5-sheva.jpg" alt="Sheva Alomar"></div>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Kengerian di Pasar</h2>
      <p>Pasar yang ramai berubah menjadi arena pembantaian. Para Majini menyerang dari segala arah. Chris dan Sheva harus bertahan melawan gelombang makhluk yang tak kenal takut, termasuk eksekutor raksasa bersenjatakan palu.</p>
      <div class="image-center"><img src="re5-majini.jpg" alt="Pertarungan di Kijuju"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Kembali ke Masa Lalu</h2>
      <p>Chris dihantui oleh kenangan Jill Valentine yang dianggap telah tewas. Saat menemukan petunjuk bahwa Jill masih hidup, tekadnya semakin membara. Perjalanan ini bukan sekadar misi — ini adalah penebusan masa lalu.</p>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Misteri Tricell</h2>
      <p>Tricell, perusahaan farmasi baru, ternyata melanjutkan warisan kelam Umbrella. Eksperimen dengan virus Uroboros menciptakan mutasi baru yang lebih berbahaya. Dunia berada di ambang kehancuran.</p>
      <div class="image-center"><img src="re5-tricell.jpg" alt="Laboratorium Tricell"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Eksperimen Uroboros</h2>
      <p>Chris dan Sheva menemukan laboratorium bawah tanah tempat virus Uroboros dikembangkan. Monster hitam raksasa lahir dari kegelapan. Mereka bertarung mati-matian untuk menghentikan penyebaran virus mematikan ini.</p>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Pertarungan Melawan Jill</h2>
      <p>Chris menemukan Jill masih hidup — tapi dikendalikan oleh perangkat Tricell. Dalam duel emosional, Chris berhasil menyelamatkannya, membebaskan Jill dari kendali Wesker. Tangis dan pelukan menghapus luka lama di antara mereka.</p>
      <div class="image-right"><img src="re5-jill.jpg" alt="Pertarungan Jill Valentine"></div>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Chris vs Wesker</h2>
      <p>Wesker, mantan sahabat sekaligus musuh lamanya, kini menjadi monster akibat virus Uroboros. Pertarungan epik di dalam pesawat menjadi klimaks pertempuran dua legenda. Dengan kerja sama Sheva, Chris akhirnya menumbangkan Wesker.</p>
      <div class="image-center"><img src="re5-wesker.jpg" alt="Chris vs Wesker"></div>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Akhir Umbrella</h2>
      <p>Umbrella mungkin telah runtuh, tapi warisannya tetap menghantui dunia. Chris dan Sheva menatap matahari terbit di atas Afrika — simbol awal baru setelah kegelapan panjang. Dunia masih belum aman, tapi harapan belum padam.</p>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Resident Evil 5</h2>
      <div class="image-center"><img src="re5-gallery1.jpg" alt="Chris Redfield"></div>
      <div class="image-center"><img src="re5-gallery2.jpg" alt="Sheva Alomar"></div>
      <div class="image-center"><img src="re5-gallery3.jpg" alt="Albert Wesker"></div>
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
