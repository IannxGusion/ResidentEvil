<!-- resources/views/silenthill.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Silent Hill — Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            background: #111;
            font-family: 'Montserrat', sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Background utama */
        .bg {
            position: fixed;
            inset: 0;
            background: url('silenthill_bg.jpg') no-repeat center/cover;
            filter: brightness(0.3) contrast(1.1);
            z-index: -2;
        }

        /* Efek kabut tebal */
        .fog {
            position: fixed;
            inset: 0;
            background: url('fog-thick.png') repeat-x;
            opacity: 0.4;
            animation: fogMove 100s linear infinite;
            z-index: -1;
        }
        @keyframes fogMove {
            0% { background-position: 0 0; }
            100% { background-position: 150% 0; }
        }

        /* Hero section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        h1 {
            font-family: 'Cinzel Decorative', serif;
            font-size: 4.5rem;
            color: #a52a2a;
            text-shadow: 0 0 25px #a52a2a, 0 0 50px #800000;
            margin-bottom: 15px;
            animation: titleGlow 3s infinite alternate;
        }
        @keyframes titleGlow {
            0% { text-shadow: 0 0 25px #a52a2a, 0 0 50px #800000; }
            100% { text-shadow: 0 0 40px #800000, 0 0 80px #b22222; }
        }

        p {
            font-size: 1.3rem;
            max-width: 650px;
            color: #ddd;
            margin-bottom: 15px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #800000;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            background: #b22222;
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
            background: #222;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            border: 1px solid rgba(139, 0, 0, 0.6);
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
            background: #111;
            color: #f5f5f5;
        }
        .game-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px #b22222;
        }
    </style>
</head>
<body>

    <div class="bg"></div>
    <div class="fog"></div>

    <section class="hero">
        <h1>Silent Hill</h1>
        <p>Masuki kota kabut penuh misteri dan kengerian. Dari petualangan pertama hingga cerita kelam terbaru, hadapi ketakutan terdalammu.</p>
        <a href="#list">Lihat Semua Seri</a>
    </section>

    <section id="list" class="game-grid">
        <!-- Daftar Game -->
        <div class="game-card">
            <img src="sh1.jpg" alt="Silent Hill 1" />
            <h3>Silent Hill</h3>
        </div>
        <div class="game-card">
            <img src="sh2.jpg" alt="Silent Hill 2" />
            <h3>Silent Hill 2</h3>
        </div>
        <div class="game-card">
            <img src="sh3.jpg" alt="Silent Hill 3" />
            <h3>Silent Hill 3</h3>
        </div>
        <div class="game-card">
            <img src="sh4.jpg" alt="Silent Hill 4" />
            <h3>Silent Hill 4: The Room</h3>
        </div>
        <div class="game-card">
            <img src="shorigin.jpg" alt="Silent Hill Origins" />
            <h3>Silent Hill: Origins</h3>
        </div>
    </section>

</body>
</html>
