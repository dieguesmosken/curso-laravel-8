 <!DOCTYPE html>
 <html>
 <script data-dapp-detection="">
! function() {
    let e = !1;

    function n() {
        if (!e) {
            const n = document.createElement("meta");
            n.name = "dapp-detected", document.head.appendChild(n), e = !0
        }
    }
    if (window.hasOwnProperty("ethereum")) {
        if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
        n()
    } else {
        var t = window.ethereum;
        Object.defineProperty(window, "ethereum", {
            configurable: !0,
            enumerable: !1,
            set: function(e) {
                window.__disableDappDetectionInsertion || n(), t = e
            },
            get: function() {
                if (!window.__disableDappDetectionInsertion) {
                    const e = arguments.callee;
                    e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf(
                        "getOwnPropertyNames") || n()
                }
                return t
            }
        })
    }
}();
 </script>
 <script>
/** duração em segundos
 * do time do 
 * contador
 */
var contador = '05';

/* A partir daqui, pode ficar em um arquivo .js */
function startTimer(duration, display) {
    const urlParams = new URLSearchParams(location.search);
    console.log(urlParams.get('OriginPage'));
    if (typeof (urlParams.get('OriginPage')) !== 'undefined') 
    {
        var OriginPage = urlParams.get('OriginPage');
    } else {
        var OriginPage = "error";
    }


    var timer = duration,
        minutes, seconds;
    setInterval(function() {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            window.location = "/error?OriginPage=" + OriginPage + "&idError=307";
        }
    }, 1000);
}

window.onload = function() {
    var count = parseInt(contador),
        display = document.querySelector('#time');
    startTimer(count, display);
};
 </script>

 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Hippotec Web - Error 307</title>
     <!--<link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style type="text/css">
     html {
         height: 100%;
         width: 100%;
     }

     #feature {
         width: 960px;
         margin: 75px auto 0 auto;
         overflow: auto;
     }

     #content {
         font-family: "Segoe UI";
         font-weight: normal;
         font-size: 22px;
         color: #ffffff;
         float: left;
         margin-top: 68px;
         margin-left: 0px;
         vertical-align: middle;
     }

     #content h1 {
         font-family: "Segoe UI Light";
         color: #ffffff;
         font-weight: normal;
         font-size: 60px;
         line-height: 48pt;
         width: 800px;
     }

     a,
     a:visited,
     a:active,
     a:hover {
         color: #ffffff;
     }

     #content a.button {
         background: #0DBCF2;
         border: 1px solid #FFFFFF;
         color: #FFFFFF;
         display: inline-block;
         font-family: Segoe UI;
         font-size: 24px;
         line-height: 46px;
         margin-top: 10px;
         padding: 0 15px 3px;
         text-decoration: none;
     }

     #content a.button img {
         float: right;
         padding: 10px 0 0 15px;
     }

     #content a.button:hover {
         background: #1C75BC;
     }
     </style>
     <script type="text/javascript">
     function toggle_visibility(id) {
         var e = document.getElementById(id);
         if (e.style.display == 'block')
             e.style.display = 'none';
         else
             e.style.display = 'block';
     }
     </script>
 </head>
 <?php
 if(!empty($_GET['OriginPage'])){
    $OriginPage = $_GET['OriginPage'];
}else{
    $OriginPage = "error";
}
?>

 <body style="background-color: #00ff;">
     <div id="feature">
         <div id="content">
             <h1><i class="fa fa-exclamation-triangle"></i> 307 redirecionamento temporario. </h1>
             <?php
            if(!empty($OriginPage)){
                    if($OriginPage == "notExists"){
                        echo "<h3>;-; Me Desculpe o erro foi intencional </h3>"; 
                    }else{
                        echo "<h3>/$OriginPage não esta disponivel no momento. </h3>";
                    }
            }else{
                echo "<h3><i class= 'fa fa-exclamation-triangle ></i> Variavel OriginPage vazia. </h3>";
            }?>
             <p> Você pode estar vendo este erro por um dos motivos listados abaixo: </p>
             <ul>
                 <li> O domínio <?php
            if(!empty($OriginPage)){
                    if($OriginPage == "notExists"){
                        echo ";-; KKKK vc é insistente"; 
                    }else{
                        echo "/$OriginPage";
                    }
            }else{
                echo "<i class= 'fa fa-exclamation-triangle ></i> Variavel OriginPage vazia.";
            }?> não esta acessivel para você pois suas permissões não se aplicam aqui </a></li>
                 <li> Vamos redireciona-lo automaticamente para <i>um erro 404 kkkk.</i> </li>
             </ul>
             <div>
                 <p>Redirecionando em <span id="time">Carregando...</span>!
                 </p>
             </div>
             <p>ou <a href="/">clique aqui</a> para Voltar ao Inicio </p>
         </div>
     </div>
 </body>

 </html>