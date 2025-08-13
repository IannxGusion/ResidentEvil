<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Pemilihan Karakter Resident Evil</title>
<style>
  body {
    background: #111;
    color: white;
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    display: flex;
    height: 100vh;
    align-items: center;
    justify-content: center;
    gap: 40px;
    padding: 20px;
  }

  /* Container pemilihan karakter */
  .character-selection {
    display: flex;
    gap: 15px;
    perspective: 1000px;
  }

  /* Karakter kartunya */
  .character-card {
    width: 120px;
    height: 320px;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    cursor: pointer;
    filter: grayscale(80%);
    transition: filter 0.3s ease, transform 0.3s ease;
    transform-style: preserve-3d;
  }

  .character-card:hover {
    filter: grayscale(30%);
    transform: scale(1.1);
    z-index: 2;
  }

  .character-card.selected {
    filter: none;
    box-shadow: 0 0 15px 5px crimson;
    transform: scale(1.15);
    z-index: 3;
  }

  /* Detail karakter di samping */
  .character-detail {
    max-width: 400px;
    background: #222;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 20px crimson;
  }

  .character-detail h2 {
    margin-top: 0;
    font-family: 'Cinzel Decorative', serif;
    font-weight: 700;
    font-size: 2rem;
    color: crimson;
    margin-bottom: 10px;
  }

  .character-detail img {
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .character-detail p {
    line-height: 1.5;
  }
</style>
</head>

<body>

  <div class="character-selection" id="characterSelection">
    <!-- Karakter akan dimunculkan disini oleh JS -->
  </div>

  <div class="character-detail" id="characterDetail">
    <h2>Pilih Karakter</h2>
    <p>Klik salah satu karakter di sebelah kiri untuk melihat detailnya.</p>
  </div>

  <script>
    const characters = [
      {
        name: "Chris Redfield",
        image: "https://i.imgur.com/1q7f6ru.jpg",
        description: "Chris adalah anggota BSAA dan dikenal dengan keahliannya dalam bertempur serta keberanian menghadapi zombie."
      },
      {
        name: "Leon S. Kennedy",
        image: "https://i.imgur.com/DEfIV4P.jpg",
        description: "Leon adalah polisi rookie yang kemudian menjadi agen pemerintah, terkenal dari Resident Evil 2 dan 4."
      },
      {
        name: "Claire Redfield",
        image: "https://i.imgur.com/6xDtT5p.jpg",
        description: "Claire adalah adik Chris yang mencari saudaranya sambil bertahan hidup dari wabah zombie."
      },
      {
        name: "Jill Valentine",
        image: "https://i.imgur.com/vEArlMf.jpg",
        description: "Jill adalah anggota STARS dengan keahlian membuka kunci dan bertarung melawan monster."
      },
      {
        name: "Albert Wesker",
        image: "https://i.imgur.com/GKYNOqI.jpg",
        description: "Wesker adalah mantan anggota STARS yang menjadi antagonis utama dengan kekuatan luar biasa."
      }
    ];

    const selectionContainer = document.getElementById("characterSelection");
    const detailContainer = document.getElementById("characterDetail");

    // Membuat card karakter
    characters.forEach((char, index) => {
      const card = document.createElement("div");
      card.classList.add("character-card");
      card.style.backgroundImage = `url(${char.image})`;
      card.title = char.name;
      card.addEventListener("click", () => selectCharacter(index));
      selectionContainer.appendChild(card);
    });

    function selectCharacter(index) {
      // Hapus class selected dari semua
      document.querySelectorAll(".character-card").forEach(card => card.classList.remove("selected"));
      // Tambah class selected pada yang diklik
      const cards = document.querySelectorAll(".character-card");
      cards[index].classList.add("selected");

      // Update detail
      const char = characters[index];
      detailContainer.innerHTML = `
        <h2>${char.name}</h2>
        <img src="${char.image}" alt="${char.name}" />
        <p>${char.description}</p>
      `;
    }
  </script>

</body>

</html>
