<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pra Você 💙</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background-image: url('img/1000053937.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.45);
            min-height: 100vh;
            padding: 40px 0;
            display: flex;
            justify-content: center;
        }

        .container {
            background: rgba(21, 116, 211, 0.92);
            border-radius: 25px;
            padding: 40px;
            max-width: 900px;
            width: 90%;
            color: #fff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
        }

        .photos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 15px;
            margin-bottom: 30px;
        }

        .photos img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 20px;
        }

        .text {
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
        }

        .text p {
            margin-bottom: 20px;
        }

        .secret {
            margin-top: 35px;
            text-align: center;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.65);
            font-style: italic;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 26px;
            }

            .text {
                font-size: 16px;
            }

            .secret {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

<audio id="bgMusic" autoplay muted loop>
    <source src="musica/Stray Kids .mp3" type="audio/mpeg">
</audio>

<div class="overlay">
    <div class="container">
        <h1>Pra Você 💙</h1>

        <div class="photos">
            <img src="img/1000054861.jpg">
            <img src="img/1000054860.jpg">
            <img src="img/1000054857.jpg">
            <img src="img/1000054867.jpg">
        </div>

        <div class="text">
            <p>
                Amor, se você chegou até aqui, você mereceu.
                Isso quer dizer que você respondeu tudo corretamente.
                Parabéns, lindo.
            </p>

            <p>
                Você sabe que eu nunca fui muito bom com palavras,
                mas saiba que eu te amo muito e estou extremamente feliz
                com esses cinco meses de namoro.
                Quero muito que esses cinco meses se tornem cinco anos,
                quinze anos e tudo o que vier depois disso.
            </p>

            <p>
                Nosso relacionamento é o melhor que eu já tive,
                porque você é a melhor pessoa que já passou pela minha vida.
                Você me deixa leve, tranquilo e feliz.
            </p>

            <p>
                Mesmo quando pensamentos ruins bagunçam minha mente
                e acabam refletindo no nosso relacionamento,
                você me acalma de um jeito que ninguém nunca conseguiu antes.
            </p>

            <p>
                Mesmo esse tendo sido um ano difícil em muitos aspectos,
                eu tenho certeza absoluta de que foi o melhor ano da minha vida.
                Porque foi nele que eu conheci o amor da minha vida. 💕
            </p>
        </div>

        <div class="secret">
            mande print dessa parte pro zap do seu namorado para ter o segundo presente
        </div>
    </div>
</div>

<script>
    const music = document.getElementById("bgMusic");

    function enableSound() {
        music.muted = false;
        music.play();
        document.removeEventListener("click", enableSound);
        document.removeEventListener("touchstart", enableSound);
    }

    document.addEventListener("click", enableSound);
    document.addEventListener("touchstart", enableSound);
</script>

</body>
</html>
