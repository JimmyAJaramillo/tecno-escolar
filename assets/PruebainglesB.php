<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylepruebaingB.css">
  <title>Prueba de Inglés Básica para Niños</title>

</head>
<body>
  <h1>Prueba de Inglés Básica</h1>

  <form id="quizForm">
    <div class="question">
      <label>1. Complete the sentence: "The cat is ____ the table."</label>
      <input type="text" id="q1" required>
    </div>

    <div class="question">
      <label>2. Choose the correct picture: "This is a dog."</label>
      <div>
        <label>
          <input type="radio" name="q2" value="wrong" required>
          <img src="https://via.placeholder.com/100?text=Cat" alt="Cat">
        </label>
        <label>
          <input type="radio" name="q2" value="correct">
          <img src="https://via.placeholder.com/100?text=Dog" alt="Dog">
        </label>
      </div>
    </div>

    <div class="question">
      <label>3. Drag the correct word to complete the sentence: "She is a ____."</label>
      <div>
        <span id="q3-answer" ondrop="drop(event)" ondragover="allowDrop(event)" style="border: 1px solid #000; padding: 5px; width: 100px; display: inline-block;"></span>
        <br><br>
        <span draggable="true" ondragstart="drag(event)" id="word1" style="padding: 5px; border: 1px solid #000; cursor: grab;">girl</span>
        <span draggable="true" ondragstart="drag(event)" id="word2" style="padding: 5px; border: 1px solid #000; cursor: grab;">boy</span>
      </div>
    </div>

    <div class="question">
      <label>4. Choose the correct word: "The sky is ____."</label>
      <select id="q4" required>
        <option value="">Select</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
      </select>
    </div>

    <div class="question">
      <label>5. Spell the word: "____ (Hint: It's a type of fruit that is yellow.)"</label>
      <input type="text" id="q5" required>
    </div>

    <button type="button" class="submit-btn" onclick="submitQuiz()">Submit</button>
  </form>

  <div class="result" id="result"></div>

  <script>
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }

    function submitQuiz() {
      let score = 0;
      
      const q1 = document.getElementById('q1').value.toLowerCase();
      if (q1 === 'under') {
        score++;
      }

      const q2 = document.querySelector('input[name="q2"]:checked').value;
      if (q2 === 'correct') {
        score++;
      }

      const q3 = document.getElementById('q3-answer').textContent.trim();
      if (q3 === 'girl') {
        score++;
      }

      const q4 = document.getElementById('q4').value;
      if (q4 === 'blue') {
        score++;
      }

      const q5 = document.getElementById('q5').value.toLowerCase();
      if (q5 === 'banana') {
        score++;
      }

      const result = document.getElementById('result');
      result.style.display = 'block';
      result.innerHTML = `You scored ${score} out of 5!`;

      if (score === 5) {
        result.innerHTML += " Great job!";
      } else if (score >= 3) {
        result.innerHTML += " Good effort, keep practicing!";
      } else {
        result.innerHTML += " Keep trying, you can do it!";
      }
    }
  </script>

</body>
</html>
