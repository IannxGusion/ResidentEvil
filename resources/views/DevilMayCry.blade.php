<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Devil May Cry — Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
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
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 200% 0;
            }
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
            animation: redGlow 2s infinite, fadeInUp 1.2s ease-out forwards, shake 3s infinite;
        }

        p {
            font-size: 1.3rem;
            max-width: 600px;
        }

        a.button {
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

        a.button:hover {
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

        /* Jadikan game card sebagai link */
        .game-card {
            background: #111;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;

            /* Supaya elemen a tetap blok dan vertical */
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
        }

        .game-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            filter: brightness(0.9);
            transition: filter 0.3s ease;
        }

        .game-card h3 {
            padding: 15px;
            font-size: 1.1rem;
            background: #000;
            margin: 0;
        }

        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px red;
        }

        .game-card:hover img {
            filter: brightness(1);
        }

        /* Animasi glow merah */
        @keyframes redGlow {

            0%,
            100% {
                text-shadow: 0 0 20px red, 0 0 40px darkred;
            }

            50% {
                text-shadow: 0 0 40px crimson, 0 0 80px red;
            }
        }

        /* Animasi getar */
        @keyframes shake {

            0%,
            100% {
                transform: translate(0, 0);
            }

            20% {
                transform: translate(-2px, 1px);
            }

            40% {
                transform: translate(2px, -1px);
            }

            60% {
                transform: translate(-1px, 2px);
            }

            80% {
                transform: translate(1px, -2px);
            }
        }

        /* Animasi fade-in masuk */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            to {
                transform: translateY(110vh) scale(0.5);
                opacity: 0;
            }
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <div class="bg"></div>
    <div class="fog"></div>

    <section class="hero">
        <h1>Devil May Cry</h1>
        <p>Selamat datang di dunia pemburu iblis. Dari Dante hingga Nero, siapkah kamu bertarung melawan kegelapan?</p>
        <a href="#list" class="button">Lihat Semua Seri</a>
    </section>

    <section id="list" class="game-grid">
        <!-- Daftar Game dengan link -->
        <a href="/devil-may-cry-1" class="game-card">
            <img src="dmc1.jpg" alt="Devil May Cry 1" />
            <h3>Devil May Cry</h3>
        </a>
        <a href="/devil-may-cry-2" class="game-card">
            <img src="dmc2.jpg" alt="Devil May Cry 2" />
            <h3>Devil May Cry 2</h3>
        </a>
        <a href="/devil-may-cry-3" class="game-card">
            <img src="dmc3.jpg" alt="Devil May Cry 3" />
            <h3>Devil May Cry 3: Dante's Awakening</h3>
        </a>
        <a href="/devil-may-cry-4" class="game-card">
            <img src="dmc4.jpg" alt="Devil May Cry 4" />
            <h3>Devil May Cry 4</h3>
        </a>
        <a href="/dmc-devil-may-cry" class="game-card">
            <img src="dmc.jpg" alt="DmC Devil May Cry" />
            <h3>DmC: Devil May Cry</h3>
        </a>
        <a href="/devil-may-cry-5" class="game-card">
            <img src="dmc5.jpg" alt="Devil May Cry 5" />
            <h3>Devil May Cry 5</h3>
        </a>
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

</body>

</html>
