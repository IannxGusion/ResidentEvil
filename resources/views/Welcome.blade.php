<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resident Evil — Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    <style>
        body {
            margin: 0;
            background: #000;
            font-family: 'Montserrat', sans-serif;
            color: white;
            overflow-x: hidden;
        }

        /* Background */
        .bg {
            position: fixed;
            inset: 0;
            background: url('residentevil.jpeg') no-repeat center/cover;
            filter: brightness(0.3);
            z-index: -2;
        }

        /* Fog effect */
        .fog {
            position: fixed;
            inset: 0;
            background: url('residentevil.jpeg') repeat-x;
            opacity: 0.3;
            animation: fogMove 60s linear infinite;
            z-index: -1;
        }

        @keyframes fogMove {
            from { background-position: 0 0; }
            to { background-position: 200% 0; }
        }

        /* Hero Section */
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

        /* Game List Grid */
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
            color: white;
            text-decoration: none;
            display: flex;
            flex-direction: column;
        }

        .game-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
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
            filter: brightness(0.9);
        }

        /* Animations */
        @keyframes redGlow {
            0%, 100% { text-shadow: 0 0 20px red, 0 0 40px darkred; }
            50% { text-shadow: 0 0 40px crimson, 0 0 80px red; }
        }

        @keyframes shake {
            0%, 100% { transform: translate(0, 0); }
            20% { transform: translate(-2px, 1px); }
            40% { transform: translate(2px, -1px); }
            60% { transform: translate(-1px, 2px); }
            80% { transform: translate(1px, -2px); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Slider */
        .container {
            display: flex;
            align-items: center;
            gap: 40px;
            max-width: 1000px;
            width: 100%;
            padding: 20px;
            margin: auto;
        }

        .slider {
            position: relative;
            width: 400px;
            height: 500px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,0,0,0.5);
        }

        .slide {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            opacity: 0;
            transform: scale(0.9) rotateY(15deg);
            transition: all 0.7s ease;
        }

        .slide.active {
            left: 0;
            opacity: 1;
            transform: scale(1) rotateY(0deg);
            z-index: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Navigation Arrows */
        .nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,0,0,0.6);
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            color: white;
            font-size: 20px;
            z-index: 10;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .nav:hover {
            background: rgba(255,0,0,0.9);
        }

        .nav.left { left: 10px; }
        .nav.right { right: 10px; }

        /* Character Details */
        .details { flex: 1; }
        .details h2 { margin-top: 0; color: #ff3333; }
        .details p { line-height: 1.5; font-size: 16px; color: #ccc; }
        .character-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    padding: 40px;
    background: rgba(0,0,0,0.85);
}

.character-card {
    background: #111;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 15px rgba(255,0,0,0.5);
    transition: transform 0.3s, box-shadow 0.3s;
    text-align: center;
    padding-bottom: 20px;
}

.character-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-bottom: 2px solid red;
}

.character-card h3 {
    color: #ff3333;
    font-family: 'Cinzel Decorative', serif;
    margin: 15px 0 10px;
}

.character-card p {
    color: #ccc;
    font-size: 0.95rem;
    padding: 0 15px;
    line-height: 1.4;
}

.character-card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px red;
}
    </style>
</head>

<body>

    <div class="bg"></div>
    <div class="fog"></div>

    <!-- Hero -->
    <section class="hero">
        <h1>Resident Evil</h1>
        <p>Selamat datang di dunia kengerian. Dari Resident Evil 0 hingga terbaru, siapkah kamu bertahan hidup?</p>
        <a href="#list" class="button">Lihat Semua Seri</a>
    </section>

    <!-- Game List -->
    <section id="list" class="game-grid">
        @foreach ([
            ['0.png','Resident Evil 0','/Residentdetail'],
            ['1.png','Resident Evil','/resident-evil-1'],
            ['code.png','Resident Evil Code: Veronica','/resident-evil-code-veronica'],
            ['2.png','Resident Evil 2','/resident-evil-2'],
            ['3.png','Resident Evil 3','/resident-evil-3'],
            ['4.png','Resident Evil 4','/resident-evil-4'],
            ['5.png','Resident Evil 5','/resident-evil-5'],
            ['revelations.png','Resident Evil Revelations','/resident-evil-revelations'],
            ['6.png','Resident Evil 6','/resident-evil-6'],
            ['7.png','Resident Evil 7: Biohazard','/resident-evil-7'],
            ['8.png','Resident Evil Village','/resident-evil-village'],
            ['requiem.png','Resident Evil Requiem','/resident-evil-requiem'],
        ] as [$img, $title, $link])
            <a href="{{ $link }}" class="game-card">
                <img src="{{ $img }}" alt="{{ $title }}">
                <h3>{{ $title }}</h3>
            </a>
        @endforeach
    </section>

    <div class="character-grid">
    @foreach ([
        ['chris.jpg','Chris Redfield',"Chris Redfield adalah anggota S.T.A.R.S. yang handal dan berani, dikenal dengan kekuatan dan kemampuannya melawan zombie dan bio-organik."],
        ['leon.jpg','Leon Kennedy',"Leon Kennedy adalah agen pemerintah yang profesional dan ahli dalam menghadapi situasi berbahaya dan wabah virus di Raccoon City."],
        ['jill.jpg','Jill Valentine',"Jill Valentine adalah anggota S.T.A.R.S. dan ahli membuka kunci, dikenal karena kecerdikan dan kemampuannya bertahan hidup."],
        ['ada.jpg','Ada Wong',"Ada Wong adalah wanita misterius yang cerdik dan penuh intrik, sering muncul sebagai mata-mata dalam kisah Resident Evil."],
        ['claire.jpg','Claire Redfield',"Claire Redfield adalah saudari Chris yang pemberani, berusaha mencari saudaranya sekaligus melawan kekacauan zombie."]
    ] as [$img, $name, $desc])
        <div class="character-card">
            <img src="{{ $img }}" alt="{{ $name }}">
            <h3>{{ $name }}</h3>
            <p>{{ $desc }}</p>
        </div>
    @endforeach
</div>


    </script>
</body>
</html>
