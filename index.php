<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniversário de namoro</title>
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

        .button-container {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
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
            background-color: #389bffff;
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <div class="button-container">
        <a href="iniciacao.php" style="text-decoration: none;">
            <button class="cta-button">Iniciar</button>
        </a>
    </div>
</body>
</html>