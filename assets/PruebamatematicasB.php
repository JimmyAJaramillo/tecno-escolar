<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylepruebamatB.css">
    <title>Cuestionario de Matemáticas Básicas</title>
</head>
<body>

    <h1>Prueba de Matemáticas Básicas</h1>
    <div id="quiz">
        <div class="question">
            <label for="q1">1. ¿Cuánto es 5 + 3?</label><br>
            <input type="number" id="q1">
        </div>
        <div class="question">
            <label for="q2">2. ¿Cuánto es 10 - 4?</label><br>
            <input type="number" id="q2">
        </div>
        <div class="question">
            <label for="q3">3. ¿Cuánto es 6 × 7?</label><br>
            <input type="number" id="q3">
        </div>
        <div class="question">
            <label for="q4">4. ¿Cuánto es 8 + 12?</label><br>
            <input type="number" id="q4">
        </div>
        <div class="question">
            <label for="q5">5. ¿Cuánto es 15 - 9?</label><br>
            <input type="number" id="q5">
        </div>
        <button onclick="checkAnswers()">Enviar respuestas</button>

        <div id="result" class="result"></div>
    </div>

    <button onclick="location.href='./TeoriamatematicasB.php'" style="margin-top: 20px;">Volver a la teoría</button>

    <script>
        function checkAnswers() {
            const answers = [8, 6, 42, 20, 6];
            let score = 0;

            const userAnswers = [
                parseInt(document.getElementById("q1").value),
                parseInt(document.getElementById("q2").value),
                parseInt(document.getElementById("q3").value),
                parseInt(document.getElementById("q4").value),
                parseInt(document.getElementById("q5").value)
            ];

            for (let i = 0; i < answers.length; i++) {
                if (userAnswers[i] === answers[i]) {
                    score++;
                }
            }

            const resultDiv = document.getElementById("result");
            resultDiv.innerHTML = `¡Has obtenido ${score} de 5 puntos!`;
        }
    </script>

</body>
</html>
