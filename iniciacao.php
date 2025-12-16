<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniversário de Namoro</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            overflow: hidden;
            font-family: 'Georgia', serif;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/1000053937.jpg');
            background-size: cover;
            background-position: center;
            filter: brightness(0.85);
        }

        .carousel-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 90%;
            max-width: 900px;
            z-index: 10;
        }

        .phrase {
            font-size: 32px;
            line-height: 1.6;
            text-shadow: 2px 2px 12px rgba(0,0,0,0.9);
            opacity: 0;
            transition: opacity 1.2s ease;
            position: absolute;
            width: 100%;
        }

        .phrase.active {
            opacity: 1;
            position: relative;
        }

        /* SETA ÚNICA */
        .single-arrow {
            margin-top: 40px;
            font-size: 50px;
            cursor: pointer;
            user-select: none;
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .single-arrow:hover {
            color: white;
            transform: translateY(6px);
        }

        .button-container {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.8s ease;
        }

        .button-container.visible {
            opacity: 1;
            visibility: visible;
        }

        .cta-button {
            background-color: #9eccfa;
            color: white;
            padding: 16px 50px;
            font-size: 18px;
            font-family: 'Georgia', serif;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(0,0,0,0.4);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #389bff;
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.5);
        }

        @media (max-width: 768px) {
            .phrase {
                font-size: 22px;
            }

            .single-arrow {
                font-size: 40px;
                margin-top: 30px;
            }

            .cta-button {
                font-size: 18px;
                padding: 14px 40px;
            }
        }
    </style>
</head>

<body>

    <div class="background"></div>

    
    <div class="carousel-container">

        <div class="phrase active">
            Olá meu amor, meu príncipe, minha vida, meu lindo 💕
        </div>

        <div class="phrase">
            Você vai ter que responder essas perguntas para chegar no final e ganhar um presente meu!
        </div>

        <div class="phrase">
            E se você me ama mesmo, vai conseguir responder todas... se errar alguma, eu saberei. 😏
        </div>

        <div class="phrase">
            Preparado, meu amor? Vamos começar essa aventura? ❤️
        </div>

        
        <div class="single-arrow" onclick="changePhrase(1)">
            &#10095;
        </div>

    </div>

    
    <div class="button-container" id="buttonContainer">
        <a href="quiz.php" style="text-decoration: none;">
            <button class="cta-button">próximo</button>
        </a>
    </div>

    <script>
        let currentIndex = 0;
        const phrases = document.querySelectorAll('.phrase');
        const total = phrases.length;
        const lastIndex = total - 1;
        const buttonContainer = document.getElementById('buttonContainer');

        function showPhrase(index) {
            phrases.forEach((p, i) => {
                p.classList.toggle('active', i === index);
            });

            if (index === lastIndex) {
                buttonContainer.classList.add('visible');
            } else {
                buttonContainer.classList.remove('visible');
            }
        }

        function changePhrase(direction) {
            currentIndex = (currentIndex + direction + total) % total;
            showPhrase(currentIndex);
        }

        showPhrase(0);
    </script>

</body>
</html>
