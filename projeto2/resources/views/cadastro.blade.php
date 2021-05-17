
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
    
    </style>
</head>

<body>
<script>
var contador = '5';

/* A partir daqui, pode ficar em um arquivo .js */
function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function() {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + ":" + seconds;

    if (--timer < 0) {
        window.location = "/error?OriginPage=Cadastro";
    }
  }, 1000);
}

window.onload = function() {
  var count = parseInt(contador),
    display = document.querySelector('#time');
  startTimer(count, display);
};
</script>
<div>Redirecionando em <span id="time">Carregando...</span>!</div>
</body>

</html>