<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylepruebaingA.css">
    <title>Interactive English Test</title>
</head>
<body>
<h1>¡Prueba de Inglés!</h1>
<div class="container">


    <div id="quiz">
        <div class="question">
            <p><strong>1. ¿Cómo se dice "yo fui" en inglés?</strong></p>
            <input type="radio" name="q1" value="a"> I go<br>
            <input type="radio" name="q1" value="b"> I went<br>
            <input type="radio" name="q1" value="c"> I gone<br>
        </div>
        <div class="question">
            <p><strong>2. ¿Cuál es un sinónimo de "grande"?</strong></p>
            <input type="radio" name="q2" value="a"> Small<br>
            <input type="radio" name="q2" value="b"> Huge<br>
            <input type="radio" name="q2" value="c"> Tiny<br>
        </div>
        <div class="question">
            <p><strong>3. Pon las palabras en el orden correcto: "El / perro / corre / rápido".</strong></p>
            <input type="text" name="q3" placeholder="Escribe tu respuesta aquí...">
        </div>
        <div class="question">
            <p><strong>4. ¿Verdadero o falso? "El sol sale por el oeste."</strong></p>
            <input type="radio" name="q4" value="true"> Verdadero<br>
            <input type="radio" name="q4" value="false"> Falso<br>
        </div>
        <div class="question">
            <p><strong>5. ¿Cómo se dice "corro" en pasado?</strong></p>
            <input type="radio" name="q5" value="a"> Ran<br>
            <input type="radio" name="q5" value="b"> Run<br>
            <input type="radio" name="q5" value="c"> Running<br>
        </div>

        <button id="submitBtn">!Terminado¡</button>
        <div class="result" id="resultMessage"></div>
    </div>
</div>

<script>
    const submitBtn = document.getElementById('submitBtn');
    const resultMessage = document.getElementById('resultMessage');

    submitBtn.addEventListener('click', () => {
        let score = 0;
        const q1 = document.querySelector('input[name="q1"]:checked');
        const q2 = document.querySelector('input[name="q2"]:checked');
        const q3 = document.querySelector('input[name="q3"]').value.trim().toLowerCase();
        const q4 = document.querySelector('input[name="q4"]:checked');
        const q5 = document.querySelector('input[name="q5"]:checked');

        if (q1 && q1.value === 'b') score++;
        if (q2 && q2.value === 'b') score++;
        if (q3 === 'el perro corre rápido') score++;
        if (q4 && q4.value === 'false') score++;
        if (q5 && q5.value === 'a') score++;

        resultMessage.textContent = `¡Has terminado la prueba! Tu puntaje es: ${score}/5.`;
        resultMessage.style.display = 'block';

        setTimeout(() => {
            alert("¡Genial! Ahora, vuelve a la teoría y repite la prueba. ¡Buena suerte!");
            window.location.href = './TeoriainglesA.php';
        }, 1000);
    });
</script>

</body>
</html>
