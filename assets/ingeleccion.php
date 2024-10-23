<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesingeleccion.css">
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
</head>
<body>
<div class="contenido">
        
    </div>
    <div class="container">
        <div class="container2">
        <h1 style="color: #f78907;">ING</h1>
        <h1 style="color: #1c51ff;">LÉS</h1>
        </div>
        <br>
        <center>
        <div class="button-container">
        <button class="cssbuttons-io-button" onclick="irAPrueba()">
  Basico
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
<button class="cssbuttons-io-button" onclick="irAPrueba2()"> 
Avanzado
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>
    </div>
    </div>
    </center>
    </div>
    
    <button class="back-button" onclick="goBack()">←</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        function irAPrueba() {
            setTimeout (function(){
                window.location.href="/assets/TeoriainglesB.php"
            },700)
        }
        function irAPrueba2() {
            setTimeout (function(){
                window.location.href="/assets/TeoriainglesA.php"
            },700)
        }
        function irAinicio() {
            setTimeout (function(){
                window.location.href="/assets/index.php"
            },700)
        }

    </script>
            <script type="text/javascript">
                const buttons = document.querySelectorAll('button');
        buttons.forEach(btn => {
            btn.addEventListener('click', function(e){
                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;

                let ripples = document.createElement('span');
                ripples.style.left = x + 'px';
                ripples.style.top = y + 'px';
                this.appendChild(ripples);

                setTimeout(() => {
                    ripples.remove()
                },1000);
            })
        })
        </script>

</body>
</html>
