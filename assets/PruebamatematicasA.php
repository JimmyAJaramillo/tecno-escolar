<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylepruebamatA.css">
    <title>Prueba Interactiva de Matemáticas</title>
</head>
<body>
<h1>Prueba Interactiva de Matemáticas</h1>

<div class="question" id="q1">
    <p>1. ¿Cuál es el resultado de <strong>15 + 7</strong>?</p>
    <input type="number" id="q1-answer" placeholder="Escribe tu respuesta">
</div>

<div class="question" id="q2">
    <p>2. ¿Cuál es el resultado de <strong>20 - 9</strong>?</p>
    <input type="number" id="q2-answer" placeholder="Escribe tu respuesta">
</div>

<div class="question" id="q3">
    <p>3. ¿Cuál es el resultado de <strong>6 × 8</strong>?</p>
    <input type="number" id="q3-answer" placeholder="Escribe tu respuesta">
</div>

<div class="question" id="q4">
    <p>4. ¿Cuál es el resultado de <strong>24 ÷ 6</strong>?</p>
    <input type="number" id="q4-answer" placeholder="Escribe tu respuesta">
</div>

<div class="question" id="q5">
    <p>5. Si tienes una pizza y te comes <strong>3/4</strong> de ella, ¿qué fracción de la pizza queda?</p>
    <input type="text" id="q5-answer" placeholder="Escribe tu respuesta en formato de fracción (ejemplo: 1/4)">
</div>

<button onclick="checkAnswers()">Ver Resultados</button>

<div id="result"></div>

<script>
    function checkAnswers() {
        let correctAnswers = 0;
        const feedback = [];

        const answers = [22, 11, 48, 4, "1/4"];

        const userAnswers = [
            document.getElementById("q1-answer").value,
            document.getElementById("q2-answer").value,
            document.getElementById("q3-answer").value,
            document.getElementById("q4-answer").value,
            document.getElementById("q5-answer").value
        ];

        for (let i = 0; i < answers.length; i++) {
            if (userAnswers[i] == answers[i]) {
                correctAnswers++;
                feedback.push(`Pregunta ${i + 1}: ¡Correcto!`);
            } else {
                feedback.push(`Pregunta ${i + 1}: Incorrecta.`);
            }
        }

        const resultDiv = document.getElementById("result");
        resultDiv.innerHTML = `<strong>Has respondido correctamente ${correctAnswers} de ${answers.length} preguntas.</strong><br>${feedback.join('<br>')}`;

        const theoryButton = document.createElement("button");
        theoryButton.innerText = "Volver a la Teoría";
        theoryButton.onclick = function() {
            window.location.href = './TeoriamatematicasA.php';
        };
        resultDiv.appendChild(theoryButton);
    }
</script>
</body>
</html>
