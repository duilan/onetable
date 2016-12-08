<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Appartable') }}</title>
    <!-- Styles -->
    <link href="{{asset('css/semantic.css')}}" rel="stylesheet">
    <link href="{{asset('css/web.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Page Contents -->
    <div class="pusher ">
        <div class="ui inverted vertical masthead center aligned segment ">
            <div class="ui text container ">
                <div class="animated fadeIn">
                    <h1 class="ui inverted header">ApparTable</h1>
                    <h2 class="subtitulo">Haz reservaciones <b class="banda">Rapidas y Seguras </b> en tu restaurante favorito</h2>
                </div>
                <div class="logo animated bounceInDown">
                    <a href="/"><img class="img_logo" src="/images/logo.png"></a>
                </div>
                <div class="row downloads animated fadeInUp">
                    <a href="#" class="ui inverted button small  green"><i class="icon large android"></i>Android</a>
                    <a href="#"class="ui inverted button small  white"><i class="icon large apple"></i>iOS</a>
                    <a href="#"class="ui inverted button small  blue"><i class="icon large windows"></i>Windows</a>
                </div>
            </div>
        </div>
        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable centered grid container">
                <div class="row ">

                    <div id="caracteristicas" class="nine wide column">
                        <h2 class="ui header horizontal divider">Principales Caracteristicas</h2>
                        <p>
                            <i class="icon empty star small"></i> Muestra una lista de los mejores restaurantes <br>
                            <i class="icon map outline small"></i> Restaurantes más cercanos a tu ubicacion <br>
                            <i class="icon hand peace small"></i> Reservacion super sencilla  <br>
                            <i class="icon columns small"></i> Menús del dia!

                        </p>
                    </div>
                    <div id="image1" class="seven wide right floated column">
                        <div class="ui fluid image ui bordered rounded">
                            <div class="ui ribbon label">
                                <i class="spoon icon "></i> En accion
                            </div>
                            <img src="images/web/appHome.png" class="appscreenshot">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="image2" class="seven wide left floated column">
                        <div class="ui fluid image ui bordered rounded">
                            <div class="ui ribbon label">
                                <i class="spoon icon "></i> En accion
                            </div>
                            <img src="images/web/appNegocios.png" class="appscreenshot">
                        </div>
                    </div>
                    <div id="reservapasos" class=" nine wide column centered right aligned">
                        <h2 class="ui header horizontal divider ">Reserva tu mesa en 3 pasos!</h2>
                        <p>Sabemos que no te gusta tener millones de contraseñas y mucho menos recordarlas, por ello para reservar <br> <b>No necesitas de ningun registro </b></p>
                        <div class="ui three steps ">
                            <div class="link step">
                                <i id="elige" class="hand pointer icon "></i>
                                <div class="content">
                                    <div class="title">Elige</div>
                                    <div class="description">Restaurante</div>
                                </div>
                            </div>
                            <div class="link step">
                                <i id="reserva" class="check circle icon green "></i>
                                <div class="content">
                                    <div class="title">Reserva</div>
                                    <div class="description">Mesa para cuantos?</div>
                                </div>
                            </div>
                            <div class=" link step ">
                                <i id="confirma" class="qrcode icon blue "></i>
                                <div class="content ">
                                    <div class="title">Confirma</div>
                                    <div class="description" >Listo!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="ui horizontal header divider">Socios y Comentarios</h1>
    <div class="ui vertical stripe quote segment  ">
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <img src="images/web/sliderhomepage.gif" height="">
                </div>
                <div class="column">
                    <div class="comentario ui">"Soy directivo por lo que no tengo tiempo ni hora de comida.Ahora con #ApparTable solo busco y reservo donde comer cuando yo quiera. <br>Gracias!"
                    </div>
                    <div class="ui blue pointing image label ">
                        <img src="/images/web/people.jpg">@duilan
                        <div class="detail">CEO</div>
                    </div>
                    <div class="comentario ui">"Soy directivo por lo que no tengo tiempo ni hora de comida.Ahora con #ApparTable solo busco y reservo donde comer cuando yo quiera. <br>Gracias!"
                    </div>
                    <div class="ui teal pointing left image label ">
                        <img src="/images/web/people.jpg">@duilan
                        <div class="detail">CEO</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment center aligned">
        <div class="ui text container">
            <h3 class="ui  header ">Restauranteros, únanse a nosotros</h3>
            <p>
                Únanse a nuestra plataforma de reservaciones Appartable,
                para que todo mundo conosca tus platillos y sucursales.
                <br>
                <a class="leermas" href="#">Contactar</a>
            </p>
            <div class="ui small statistic">
                <div class="value">34</div>
                <div class="label">Negocios </div>
            </div>
            <div class="ui small statistic">
                <div class="value">7,143</div>
                <div class="label">Reservaciones </div>
            </div>
            <div class="ui small statistic">
                <div class="value">282</div>
                <div class="label">Sucursales </div>
            </div>
        </div>
    </div>

    <div class="ui inverted vertical footer segment">
        <div class="ui container">
            <div class="ui stackable inverted divided equal height stackable grid">
                <div class="three wide column">
                    <h4 class="ui inverted header">Contacto</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">appartable@mail.com</a>
                        <a href="#" class="item">(55) - 31950000</a>
                    </div>
                </div>
                <div class="five wide column">
                    <h4 class="ui inverted header">Quienes Somos</h4>
                    <p>Startup integrada por : <br>@Duilan, @Frediie, @Gabo1001, @Christiandm</p>
                </div>
                <div class="three wide column">
                    <h4 class="ui inverted header">Aviso de Privacidad</h4>
                    <div class="ui inverted link list">
                        <a href="#" class="item">Politicas</a>
                        <a href="#" class="item">Copyright</a>
                    </div>
                </div>
                <div class="three wide column">
                    <h4 class="ui inverted header">Sistema web</h4>
                    @if (Route::has('login'))
                        <div class="ui inverted link list">
                            <a href="{{ url('/login') }}" class="item"><i class="icon sign in"></i>Iniciar Sesión</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/semantic.js"></script>
<script>
$(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        if (scroll <= 200) {
            $(".logo").removeClass("animated bounceInDown");
            $(".logo").addClass("animated bounce");
        }else{
            $(".logo").removeClass("animated bounce");
        }
        if (scroll >= 300) {
            $("#image1").addClass("animated fadeInRight");
        }else{
            $("#image1").removeClass("animated fadeInRight");
        }
        if (scroll >= 700) {
            $("#image2").addClass("animated fadeInLeft");
        }else{
            $("#image2").removeClass("animated fadeInLeft");
        }
        if (scroll >= 1100) {
            $("#elige").addClass("animated tada");
            $('#elige').one(animationEnd, function(){
                $("#reserva").addClass("animated bounceIn").one(animationEnd,function(){
                    $("#confirma").addClass("animated swing");
                });
            });
        }else{
            $("#elige").removeClass("animated tada");
            $("#reserva").removeClass("animated bounceIn");
            $("#confirma").removeClass("animated swing");
        }
    });
});
</script>
</html>
