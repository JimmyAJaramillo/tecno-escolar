<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesteoriainglesB.css">
    <title>Teoría de Inglés para Niños</title>
</head>
<body>

<div class="container">
    <h1>¡Hola, pequeños exploradores del inglés! 🌍💬</h1>
    <p>Hoy vamos a aprender algunas cositas geniales sobre el inglés que te ayudarán a convertirte en todo un experto. Vamos a viajar por el mundo de los <span class="highlight">verbos</span>, las <span class="highlight">palabras</span> y ¡hasta poner nuestras frases en orden! 🚀</p>
<div class="section">
<h2>1. Los verbos en pasado (Past tense) ⏳🕰️</h2>
    <p>¿Sabías que cuando hablas de algo que pasó antes (como lo que hiciste ayer), usamos una forma especial del verbo llamada <span class="highlight">pasado</span>?  
    Por ejemplo:</p>
    <ul>
        <li>Hoy: "I <span class="highlight">go</span> to the park." (Yo voy al parque).</li>
        <li>Ayer: "I <span class="highlight">went</span> to the park." (Yo fui al parque).</li>
    </ul>
    <p>¡Es como si el <span class="highlight">verbo</span> viajara en una máquina del tiempo! 🕰️✨</p>
</div>

<div class="section">
<h2>2. Sinónimos: Palabras que son amigas 👫💡</h2>
<p>Las palabras tienen amigos que significan casi lo mismo. Estas palabras amigas se llaman <span class="highlight">sinónimos</span>. Por ejemplo, si digo <span class="highlight">big</span> (grande), su amigo cercano es <span class="highlight">huge</span> (enorme). ¡Son como dos gigantes que caminan juntos! 🌳🌳</p>
</div>

<div class="section">
<h2>3. Pon las palabras en el orden correcto 🧩</h2>
    <p>A veces, las palabras pueden ser como piezas de un rompecabezas. Tenemos que organizarlas en el orden correcto para que la oración tenga sentido. Mira este ejemplo:</p>
    <p>"quickly / she / the / finished / homework / her."</p>
    <p>Si juntamos estas piezas, la oración correcta es:</p>
    <p><strong>"She finished her homework quickly."</strong> (Ella terminó su tarea rápidamente).</p>
    <p>¡Es como organizar juguetes en una estantería! 🎲🏆</p>
</div>

<div class="section">
<h2>4. ¿Verdadero o Falso? 🤔❌✅</h2>
    <p>¡Esto es fácil y divertido! A veces, hay cosas que son verdad y otras que no lo son.</p>
    <p>Por ejemplo: "The sun rises in the west." (El sol sale por el oeste).  
    ¿Es cierto? ¡No! El sol <strong>siempre</strong> sale por el este. 🌞🌄</p>
    <p>Así que esa afirmación es <span class="highlight">falsa</span>. Aprende estos datos curiosos y acertarás todas las respuestas.</p>
</div>

<div class="section">
<h2>5. ¡Verbos que corren rápido! (Past tense) 🏃‍♂️</h2>
    <p>Algunos <span class="highlight">verbos</span> son tan rápidos que cambian completamente en pasado. ¡Como el <span class="highlight">verbo</span> <span class="highlight">run</span> (correr)!</p>
    <ul>
        <li>Hoy: "I <span class="highlight">run</span> fast." (Corro rápido).</li>
        <li>Ayer: "I <span class="highlight">ran</span> fast." (Corrí rápido).</li>
    </ul>
    <p>El <span class="highlight">verbo</span> <span class="highlight">run</span> cambia a <span class="highlight">ran</span> cuando hablamos del pasado. ¡Es como si el <span class="highlight">verbo</span> corriera hacia atrás en el tiempo! 🏃‍♂️💨</p>
</div>

</div>

<a href="./PruebainglesA.php" class="boton">Ir a Ejemplo</a>

<script>
    const highlights = document.querySelectorAll('.highlight');

    highlights.forEach((element) => {
        const word = element.textContent.trim();
        const image = document.createElement('img');
        switch (word.toLowerCase()) {
            case 'verbos':
            case 'verbo':
                image.src = 'https://via.placeholder.com/150?text=Verb';
                break;
            case 'palabras':
                image.src = 'https://via.placeholder.com/150?text=Word';
                break;
            case 'pasado':
                image.src = 'https://via.placeholder.com/150?text=Past+Tense';
                break;
            case 'go':
                image.src = 'https://via.placeholder.com/150?text=Go';
                break;
            case 'went':
                image.src = 'https://via.placeholder.com/150?text=Went';
                break;
            case 'big':
                image.src = 'https://via.placeholder.com/150?text=Big';
                break;
            case 'huge':
                image.src = 'https://via.placeholder.com/150?text=Huge';
                break;
            case 'run':
                image.src = 'https://via.placeholder.com/150?text=Run';
                break;
            case 'ran':
                image.src = 'https://via.placeholder.com/150?text=Ran';
                break;
            case 'falsa':
                image.src = 'https://via.placeholder.com/150?text=False';
                break;
            default:
                image.src = 'https://via.placeholder.com/150?text=Word';
        }
        element.appendChild(image);
    });
</script>

</body>
</html>
