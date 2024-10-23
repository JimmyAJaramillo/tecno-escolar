<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TECNOESCOLAR</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styleEmpecemos.css">
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <a  style="color: #f78907;"><h1>TECNO</h1></a>
        <a  style="color: #1947E4;"><h1>ESCOLAR</h1></a>
        <br>
        <button onclick="irAPrueba()">Empecemos</button>
    </div>

    <script>
        function irAPrueba() {
            setTimeout(function(){
                window.location.href = "EleccionP.php";
            }, 700);  
        }

        const buttons = document.querySelectorAll('button');
        buttons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                let x = e.clientX - e.target.offsetLeft;
                let y = e.clientY - e.target.offsetTop;

                let ripples = document.createElement('span');
                ripples.style.left = x + 'px';
                ripples.style.top = y + 'px';
                this.appendChild(ripples);

                setTimeout(() => {
                    ripples.remove();
                }, 1000);
            });
        });
    </script>
</body>
</html>
