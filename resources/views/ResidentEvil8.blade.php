{{-- resources/views/residentevil8.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resident Evil 8 — Village</title>
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
      <h1>Resident Evil 8: Village</h1>
      <h3>Kata Pengantar</h3>
      <p>Beberapa tahun setelah peristiwa di Louisiana, Ethan Winters hidup damai bersama Mia dan anaknya, Rose. Namun ketenangan itu hancur ketika Chris Redfield muncul dan menyeret Ethan ke mimpi buruk baru — sebuah desa misterius di Eropa yang diselimuti kutukan.</p>
      <div class="image-center"><img src="re8-village.jpg" alt="Desa Resident Evil 8"></div>
    </div>

    <div id="page-2" class="page-content hidden">
      <h2>Daftar Isi</h2>
      <ul>
        <li>Bab 1 — Kehidupan yang Tenang</li>
        <li>Bab 2 — Serangan Tengah Malam</li>
        <li>Bab 3 — Desa Kutukan</li>
        <li>Bab 4 — Kastil Dimitrescu</li>
        <li>Bab 5 — Bayang-bayang Beneviento</li>
        <li>Bab 6 — Danau Moreau</li>
        <li>Bab 7 — Pabrik Heisenberg</li>
        <li>Bab 8 — Kebenaran Chris Redfield</li>
        <li>Bab 9 — Rose dan Harapan Baru</li>
        <li>Halaman 10 — Galeri Village</li>
      </ul>
    </div>

    <div id="page-3" class="page-content hidden">
      <h2>Bab 1: Kehidupan yang Tenang</h2>
      <p>Ethan dan Mia berusaha melupakan masa lalu. Putri mereka, Rose, tumbuh dengan sehat. Namun, ketenangan itu tidak bertahan lama...</p>
    </div>

    <div id="page-4" class="page-content hidden">
      <h2>Bab 2: Serangan Tengah Malam</h2>
      <p>Chris Redfield muncul di rumah mereka — dan menembak Mia tanpa penjelasan. Rose diculik, dan Ethan pingsan. Saat sadar, ia menemukan dirinya di sebuah hutan bersalju yang gelap...</p>
      <div class="image-center"><img src="re8-forest.jpg" alt="Hutan Bersalju"></div>
    </div>

    <div id="page-5" class="page-content hidden">
      <h2>Bab 3: Desa Kutukan</h2>
      <p>Desa itu dihuni oleh penduduk yang putus asa dan makhluk menyeramkan yang disebut Lycans. Ethan berjuang menemukan Rose, sementara para penghuni menyembah empat penguasa yang memerintah dengan kekuatan supernatural.</p>
      <div class="image-center"><img src="re8-lycan.jpg" alt="Lycans"></div>
    </div>

    <div id="page-6" class="page-content hidden">
      <h2>Bab 4: Kastil Dimitrescu</h2>
      <p>Ethan menghadapi Lady Dimitrescu, vampir bangsawan yang haus darah. Ia harus melawan ketiga putrinya dan sang Lady sendiri untuk melanjutkan perjalanan.</p>
      <div class="image-right"><img src="re8-dimitrescu.jpg" alt="Lady Dimitrescu"></div>
    </div>

    <div id="page-7" class="page-content hidden">
      <h2>Bab 5: Bayang-bayang Beneviento</h2>
      <p>Di rumah boneka Donna Beneviento, Ethan kehilangan semua senjatanya dan terjebak dalam mimpi buruk psikologis. Ia harus memecahkan teka-teki dan menghadapi ketakutannya sendiri.</p>
      <div class="image-center"><img src="re8-donna.jpg" alt="Donna Beneviento"></div>
    </div>

    <div id="page-8" class="page-content hidden">
      <h2>Bab 6: Danau Moreau</h2>
      <p>Salvatore Moreau, monster setengah manusia, menjaga bagian tubuh Rose yang lain. Danau yang tercemar menjadi arena pertempuran yang mematikan.</p>
      <div class="image-center"><img src="re8-moreau.jpg" alt="Salvatore Moreau"></div>
    </div>

    <div id="page-9" class="page-content hidden">
      <h2>Bab 7: Pabrik Heisenberg</h2>
      <p>Heisenberg, sang insinyur gila, menciptakan pasukan mesin pembunuh. Ethan harus menembus pabrik logam dan melawan ciptaan mengerikan Heisenberg.</p>
      <div class="image-right"><img src="re8-heisenberg.jpg" alt="Pabrik Heisenberg"></div>
    </div>

    <div id="page-10" class="page-content hidden">
      <h2>Bab 8: Kebenaran Chris Redfield</h2>
      <p>Chris mengungkapkan bahwa Mia yang dibunuh sebenarnya adalah Eveline yang menyamar. Ia berusaha menyelamatkan Rose dan menebus kesalahannya. Umbrella baru kini mencoba memperbaiki masa lalu.</p>
    </div>

    <div id="page-11" class="page-content hidden">
      <h2>Bab 9: Rose dan Harapan Baru</h2>
      <p>Ethan mengorbankan dirinya untuk menghancurkan Mother Miranda dan menyelamatkan Rose. Chris membawa Rose ke tempat aman, dan dunia akhirnya mendapat harapan baru. Namun, nasib Ethan tetap menjadi misteri...</p>
      <div class="image-center"><img src="re8-ending.jpg" alt="Akhir Resident Evil 8"></div>
    </div>

    <div id="page-12" class="page-content hidden">
      <h2>Galeri Village</h2>
      <div class="image-center"><img src="re8-gallery1.jpg" alt="Desa Bersalju"></div>
      <div class="image-center"><img src="re8-gallery2.jpg" alt="Lady Dimitrescu"></div>
      <div class="image-center"><img src="re8-gallery3.jpg" alt="Mother Miranda"></div>
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
