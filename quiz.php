<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Perguntas 💕</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
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

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .question-box {
            background: #1574d3;
            padding: 40px;
            border-radius: 25px;
            width: 90%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.25);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .question {
            font-size: 26px;
            margin-bottom: 25px;
            color: #ffffff;
        }

        input[type="text"] {
            width: 100%;
            padding: 14px 18px;
            font-size: 18px;
            border-radius: 12px;
            border: none;
            outline: none;
        }

        input[type="text"]:focus {
            box-shadow: 0 0 0 3px rgba(255,255,255,0.5);
        }

        .error {
            color: #ffd6d6;
            margin-top: 15px;
            display: none;
            font-size: 16px;
        }

        .success {
            color: #caffd8;
            margin-top: 15px;
            display: none;
            font-size: 16px;
        }

        .next-btn {
            margin-top: 30px;
            background-color: #ffffff;
            color: #1574d3;
            border: none;
            padding: 14px 40px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: none;
        }

        .next-btn:hover {
            background-color: #e6efff;
            transform: translateY(-3px);
        }

        @media (max-width: 600px) {
            .question {
                font-size: 22px;
            }
        }
    </style>
</head>

<body>

<div class="background">
    <div class="question-box">

        <div class="question" id="questionText"></div>

        <input 
            type="text" 
            id="answerInput" 
            placeholder="Digite sua resposta aqui 💌"
        >

        <div class="error" id="errorMsg">
            Hmm… pensa melhor 😏
        </div>

        <div class="success" id="successMsg">
            Certinho! 💕
        </div>

        <button class="next-btn" id="nextBtn" onclick="nextQuestion()">
            próxima pergunta
        </button>

    </div>
</div>

<script>
    const questions = [
        { question: "Essa é fácil. Qual é meu psikolera favorito?", answers: ["franco"] },
        { question: "Qual é meu shipp favorito de hexatombe que eu tanto falo que é a gente?", answers: ["ale e o franco", "alê e o franco", "ale e franco", "alê e franco"] },
        { question: "Qual é meu apelido favorito que você me chama?", answers: ["principe", "príncipe"] },
        { question: "Quem é a gente na Fórmula 1?", answers: ["sainz e charles", "charles e sainz"] },
        { question: "Qual o primeiro shipp que a gente falou que é nois?", answers: ["satosugu"] },
        { question: "Qual é meu animal favorito?", answers: ["pinguim"] },
        { question: "Quando a gente se viu, eu tinha me machucado em qual brinquedo do Hopi Hari?", answers: ["montezum"] },
        { question: "Qual foi a primeira coisa que eu fiz sem jeito quando te vi?", answers: ["te dar um abraço", "dar um abraço", "abraco"] },
        { question: "Qual data comemorativa eu recebi o primeiro texto seu?", answers: ["ano novo", "ano-novo"] },
        { question: "O que eu fiz só para saber se você gostava de mim?", answers: ["tarot", "tarô"] },
        { question: "Seu nome no meu WhatsApp está salvo em que língua?", answers: ["russo"] }
    ];

    let currentQuestion = 0;

    const questionText = document.getElementById("questionText");
    const answerInput = document.getElementById("answerInput");
    const errorMsg = document.getElementById("errorMsg");
    const successMsg = document.getElementById("successMsg");
    const nextBtn = document.getElementById("nextBtn");

    function normalize(text) {
        return text
            .toLowerCase()
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .trim();
    }

    function checkAnswer() {
        const userAnswer = normalize(answerInput.value);
        const validAnswers = questions[currentQuestion].answers.map(a => normalize(a));

        if (validAnswers.includes(userAnswer) && userAnswer !== "") {
            errorMsg.style.display = "none";
            successMsg.style.display = "block";
            nextBtn.style.display = "inline-block";
            answerInput.disabled = true;
        } else {
            errorMsg.style.display = "block";
            successMsg.style.display = "none";
            nextBtn.style.display = "none";
        }
    }

    function nextQuestion() {
        currentQuestion++;

        if (currentQuestion >= questions.length) {
            window.location.href = "frases.php";
            return;
        }

        loadQuestion();
    }

    function loadQuestion() {
        questionText.textContent = questions[currentQuestion].question;
        answerInput.value = "";
        answerInput.disabled = false;
        errorMsg.style.display = "none";
        successMsg.style.display = "none";
        nextBtn.style.display = "none";

        nextBtn.textContent = currentQuestion === questions.length - 1
            ? "Finalizar 💙"
            : "próxima pergunta";

        answerInput.focus();
    }

    
    answerInput.addEventListener("input", checkAnswer);

    answerInput.addEventListener("keydown", (e) => {
        if (e.key === "Enter") {
            checkAnswer();
        }
    });

   
    loadQuestion();
</script>

</body>
</html>
