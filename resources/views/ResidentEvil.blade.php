<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil — Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            background: #000;
            font-family: 'Montserrat', sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Background utama */
        .bg {
            position: fixed;
            inset: 0;
            background: url('residentevil.jpeg') no-repeat center/cover;
            filter: brightness(0.3);
            z-index: -2;
        }

        /* Efek kabut */
        .fog {
            position: fixed;
            inset: 0;
            background: url('residentevil.jpeg') repeat-x;
            opacity: 0.3;
            animation: fogMove 60s linear infinite;
            z-index: -1;
        }
        @keyframes fogMove {
            0% { background-position: 0 0; }
            100% { background-position: 200% 0; }
        }

        /* Hero section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        h1 {
            font-family: 'Cinzel Decorative', serif;
            font-size: 4rem;
            color: #ff0000;
            text-shadow: 0 0 20px red, 0 0 40px darkred;
            margin-bottom: 15px;
        }
        p {
            font-size: 1.3rem;
            max-width: 600px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: darkred;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            background: red;
            transform: scale(1.05);
        }

        /* Grid game list */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 50px;
            background: rgba(0, 0, 0, 0.85);
        }
        .game-card {
            background: #111;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .game-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }
        .game-card h3 {
            padding: 15px;
            font-size: 1.1rem;
            background: #000;
        }
        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px red;
        }

        /* Animasi glow merah */
    @keyframes redGlow {
        0%, 100% { text-shadow: 0 0 20px red, 0 0 40px darkred; }
        50% { text-shadow: 0 0 40px crimson, 0 0 80px red; }
    }

    /* Animasi getar */
    @keyframes shake {
        0%, 100% { transform: translate(0, 0); }
        20% { transform: translate(-2px, 1px); }
        40% { transform: translate(2px, -1px); }
        60% { transform: translate(-1px, 2px); }
        80% { transform: translate(1px, -2px); }
    }

    /* Animasi fade-in masuk */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Efek darah menetes (partikel) */
    .blood-particle {
        position: fixed;
        top: -20px;
        width: 10px;
        height: 10px;
        background: darkred;
        border-radius: 50%;
        animation: bloodFall linear infinite;
        z-index: 1;
        opacity: 0.7;
    }
    @keyframes bloodFall {
        to { transform: translateY(110vh) scale(0.5); opacity: 0; }
    }

    /* Hero title efek */
    h1 {
        font-family: 'Cinzel Decorative', serif;
        font-size: 4rem;
        color: #ff0000;
        animation: redGlow 2s infinite, fadeInUp 1.2s ease-out forwards, shake 3s infinite;
    }
    </style>
</head>
<body>

    <div class="bg"></div>
    <div class="fog"></div>

    <section class="hero">
        <h1>Resident Evil</h1>
        <p>Selamat datang di dunia kengerian. Dari Resident Evil 0 hingga terbaru, siapkah kamu bertahan hidup?</p>
        <a href="/Dashboard.blade.php">Lihat Semua Seri</a>
    </section>

    <script>
    // Buat 20 partikel darah jatuh acak
    for (let i = 0; i < 20; i++) {
        const blood = document.createElement("div");
        blood.classList.add("blood-particle");
        blood.style.left = Math.random() * 100 + "vw";
        blood.style.animationDuration = (3 + Math.random() * 5) + "s";
        document.body.appendChild(blood);
    }
</script>


    <section id="list" class="game-grid">
        <!-- Daftar Game -->
        <div class="game-card">
            <img src="0.png" alt="Resident Evil 0">
            <h3>Resident Evil 0</h3>
        </div>
        <div class="game-card">
            <img src="1.png" alt="Resident Evil 1">
            <h3>Resident Evil</h3>
        </div>
        <div class="game-card">
            <img src="code.png" alt="Resident Evil 1">
            <h3>Resident Evil Code: Veronica</h3>
        </div>
        <div class="game-card">
            <img src="2.png" alt="Resident Evil 2">
            <h3>Resident Evil 2</h3>
        </div>
        <div class="game-card">
            <img src="3.png" alt="Resident Evil 3">
            <h3>Resident Evil 3</h3>
        </div>
        <div class="game-card">
            <img src="4.png" alt="Resident Evil 4">
            <h3>Resident Evil 4</h3>
        </div>
        <div class="game-card">
            <img src="5.png" alt="Resident Evil 5">
            <h3>Resident Evil 5</h3>
        </div>
        <div class="game-card">
            <img src="revelations.png" alt="Resident Evil 3">
            <h3>Resident Evil Revelations </h3>
        </div>
        <div class="game-card">
            <img src="6.png" alt="Resident Evil 6">
            <h3>Resident Evil 6</h3>
        </div>
        <div class="game-card">
            <img src="7.png" alt="Resident Evil 7">
            <h3>Resident Evil 7: Biohazard</h3>
        </div>
        <div class="game-card">
            <img src="8.png" alt="Resident Evil Village">
            <h3>Resident Evil Village</h3>
        </div>
          <div class="game-card">
            <img src="requiem.png" alt="Resident Evil Village">
            <h3>Resident Evil Requiem</h3>
        </div>
    </section>

</body>
</html>
