<!DOCTYPE html>  
<html lang="es"> 
<head>
<meta charset="utf-8" />
<meta name="keywords" content="calendario cubano,noticias,cuba" />

<meta name="description" content="Noticias de Cuba y el mundo con un punto de vista personal.Una celebracion fanatica de la diversidad ideologica. Un portal de internet en espanol." />
<title>Calendario Cubano....con un 99.99% de discrecion filosofica...</title>
 
<link rel="stylesheet" href="{{ asset('css/homepag.css') }}">

<script src="{{ asset('/js/ajaxDate.js')}}"></script>
<script src="{{ asset('/js/ajaxClock.js')}}"></script>
<script src="{{ asset('/js/jquery.js')}}"></script>


 <script type="text/javascript">
//<![CDATA[
   function Zodiaco_Current() 
   {
     var i=6;
     var today = new Date();
     var x = document.getElementById("signo");
      var timer = window.setInterval(function()
	  {
               if( i == 0 )
			   {
                   window.clearInterval( timer );
               }
               if ((today.getMonth()==2 && today.getDate() >= 21) || (today.getMonth()==3 && today.getDate() <= 20))
	           {
		          x.innerHTML = '<h'+i+'>' + "ARIES" +'</h'+i+'>';
				  i--;
               }  
	           else if((today.getMonth()==3 && today.getDate() >= 21) || (today.getMonth()==4 && today.getDate() <= 21))
		       {
                  x.innerHTML = '<h'+i+'>' + "TAURO" +'</h'+i+'>';
		          i--;
		       }
               else if((today.getMonth()==4 && today.getDate() >= 22) || (today.getMonth()==5 && today.getDate() <= 21))
		       {
		          x.innerHTML = '<h'+i+'>' + "GEMINIS" +'</h'+i+'>';
		          i--;
               } 
               else if((today.getMonth()==5 && today.getDate() >= 22) || (today.getMonth()==6 && today.getDate() <= 22))
               {
                  x.innerHTML = '<h'+i+'>' + "CANCER" +'</h'+i+'>';
		          i--;
               }
               else if((today.getMonth()==6 && today.getDate() >= 23) || (today.getMonth()==7 && today.getDate() <= 22))
		       {
                   x.innerHTML = '<h'+i+'>' + "LEO" +'</h'+i+'>';
		           i--;
               }
               else if((today.getMonth()==7 && today.getDate() >= 23) || (today.getMonth()==8 && today.getDate() <= 23))
		       {
                   x.innerHTML = '<h'+i+'>' + "VIRGO" +'</h'+i+'>';
		           i--;
               }
		 
               else if((today.getMonth()==8 && today.getDate() >= 24) || (today.getMonth()==9 && today.getDate() <= 23))
		       {
		           x.innerHTML = '<h'+i+'>' + "LIBRA" +'</h'+i+'>';
		           i--;
               }
               else if((today.getMonth()==9 && today.getDate() >= 24) || (today.getMonth()==10 && today.getDate() <= 22))
		       { 
                   x.innerHTML =  '<h'+i+'>' + "ESCORPION" +'</h'+i+'>';
		           i--;
		       }
               else if((today.getMonth()==10 && today.getDate() >= 23) || (today.getMonth()==11 && today.getDate() <= 21))
		       {
                    x.innerHTML = '<h'+i+'>' + "SAGITARIO" +'</h'+i+'>';
		            i--;
               }
	           else if((today.getMonth()==11 && today.getDate() >= 22) || (today.getMonth()==0 && today.getDate() <= 20))
		       {
                    x.innerHTML = '<h'+i+'>' + "CAPRICORNIO" +'</h'+i+'>';
		            i--;
               }
               else if((today.getMonth()==0 && today.getDate() >= 21) || (today.getMonth()==1 && today.getDate() <= 19))
		       {
		            x.innerHTML = '<h'+i+'>' + "ACUARIO" +'</h'+i+'>';
		            i--;
               }
	           else if((today.getMonth()==1 && today.getDate() >= 20) || (today.getMonth()==2 && today.getDate() <= 20))
		       {
                    x.innerHTML = '<h'+i+'>' + "PISCIS" +'</h'+i+'>';
		            i--;
               } 
      }, 800);	 
   } 
   
//]]>  
</script> 


 <script type="text/javascript" >
 //<![CDATA[

$(document).ready(function() {
  Zodiaco_Current();
  setInterval ( "callAjaxDate()", 600 );
  setInterval ( "callAjaxClock()", 600 );

});
</script>
</head>
<body>

<div class="container">
<div id="top">
<div id="pluton">
<h1>
<a href="/"  <span style="text-decoration:none;color:black;">Calendario Cubano...con un 99.99% de discrecion filosofica...</span></a>
</h1>

</div>
 </div>
<div id="urano">
<img height="260" id="fotos" src="/pictures/IMG_0174.JPG" width="300" alt="Urano"/>

</div>

<div id="neptuno">
 <div id="clock"> </div>
 <div id="date"> </div>
  <div id="signo"> </div>
</div> 

<div class="planetas">
 <h1>  <a href="/signos/sol.php" > Sol </a></h1>
<p>&nbsp; Volvamos a los "Origenes".<br /> A la epoca de la abundancia.<br />La unica epoca en que la Republica Cubana florecia verdaderamente.<br />Año de 1944,el mundo se caia a pedazos<br />sin embargo,en la Habana,<a href="https://es.wikipedia.org/wiki/Jos%C3%A9_Lezama_Lima" target="blank"> <br />Jose Lezama Lima, </a>  tenia tiempo para algo tan descabellado y ambicioso como crear de la nada , en el Caribe,<br />su sistema poetico del mundo.</p> 
</div>
 
 <div class="zodiacoleft">
<h4><a href="/signos/cancer.html" > Cancer </a></h4>
<p>&nbsp;&nbsp;Si tu crias a un cubano en Texas<br />probablemente saldra algo como<br /><a href="https://es.wikipedia.org/wiki/Ted_Cruz"> Ted Cruz.</a> El ya se siente raptado por Dios <br /> muy lejos de todo pensamiento liberal<br /> y muy lejos del sentido comun.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/leo.html" > Leo </a></h4>
<p>&nbsp;&nbsp;El ciudadano español Alvaro Lopez Tardon,ha sido condenado en Miami, nada menos que a 150 años de prision. El era buscado en su pais como el mas sanguinario narcotraficante.Sin embargo en un lujoso apartamento de South Beach habia encontrado refugio<br /> rodeado de Bugattis y Ferraris.</p>
</div>

<div class="planetas">
<h2><a href="http://theamericancalendar.com" > Luna</a></h2>
<p>&nbsp; El llamado Real Estate developer <a href="https://en.wikipedia.org/wiki/Tibor_Hollo" target="_blank">Tibor Hollo,</a> <br />es uno de los principales responsables de la actual <br />belleza del Downtown de Miami, y al mismo tiempo tambien<br />de la estampida hacia los suburbios de sus mas antiguos residentes. <br /> No por casualidad, el esta ahora envuelto en el emblematico negocio de construir, la torre mas alta de la ciudad..</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/geminis.html" > Geminis</a></h4>
<p>Cuando ocurrio  la sucesion<br /> algunos depositaron sus esperanzas en el.Otros no.<br /> Algo se movio en la Habana en los ultimos años pero<br /> los hechos prueban que para <a href="http://es.wikipedia.org/wiki/Ra%C3%BAl_Castro" target="_blank" >Raul Castro </a>las tan esperadas Reformas nunca deberan suplantar la Revolucion.</p> 
</div>

<div class="zodiacoright">
<h4><a href="/signos/virgo.html" > Virgo </a></h4>
<p>&nbsp;&nbsp;&nbsp;"La era esta pariendo un corazon,no puede mas se <br />muere de dolor..."<br />De tanto darle a la lata la era finalmente pario.<br />Pero no exactamente lo que en los romanticos sesentas soñara <a href="http://es.wikipedia.org/wiki/Silvio_Rodriguez" target="_blank"> Silvio</a>,sino al reves.Como cuando el lado izquierdo del cerebro controla el lado derecho del cuerpo y viceversa.</p>
</div>

<script type="text/javascript" >



</script>

<div class="planetas" >
<h3> <a  href="/bautismo5.php" > Mercurio </a></h3> 
<p>&nbsp; El Centro donde todos los caminos convergen  <br />no esta en Times Square </a> sino en Lawton o en Nuevo Vedado.<br />Alli todos los secretos se atan y desatan queramoslo o no<br />y Alfredo Duran le pregunta a los Espiritus <br />si hay respuestas para hoy o si habra que esperar<br /> unos dias mas tarde.</p>

</div>

<div class="zodiacoleft">
<h4><a href="/signos/tauro.html" > Tauro </a></h4>
<p>&nbsp;Algunos ahora pueden vivir en real time <br />sus teorias conspiratorias favoritas.<br />Algunos otros ahora tienen su guerra comercial con China.<br /><a href="https://es.wikipedia.org/wiki/Mitch_McConnell " target="blank"> Mitch McConnell </a> tiene sus jueces baratos.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/libra.html" > Libra </a></h4>
<p>El 1 de enero de 1959,<a href="http://es.wikipedia.org/wiki/Fidel_Castro" target="_blank"> Fidel Castro </a>tomo el control <br />del&nbsp;poder en Cuba e implanto un sistema dictatorial que <br />se ha mantenido intacto por mas de 50 años.<br /> Medio siglo es mas que suficiente para probar un <br />hecho historico consumado.</p>
</div>

<div class="planetas">
 <h4><a href="/bautismo4.php"> Venus </a></h4>
<p>&nbsp; No se puede tener una teoria de la Social-Democracia coherente,si vives en la ciudad de Miami.<br />Es necesario haber nacido y crecido en la Isla<br />y despues emigrar a cualquier otro lugar q no sea el Norte,asi como le paso al Profesor <a href="https://es.wikipedia.org/wiki/Rafael_Rojas_Guti%C3%A9rrez" target="_blank"> Rafael Rojas</a>,quien desde su Exilio Mexicano<br /> disfruta,una vision panoramica envidiable.</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/aries.html" > Aries </a></h4>
<p>&nbsp;&nbsp;Es muy facil ser Senador en el estado de Florida.<br />Nadie cuestiona tus acciones.<br /> ..y <a href="http://en.wikipedia.org/wiki/Marco_Rubio" target="_blank"> Marco Rubio</a> lo sabe.Por eso se apuro en absolver a Trump durante el Impeachment <br />sabiendo que iba a seguir caminando tranquilamente por la calle 8 como si nada hubiera pasado.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/escorpion.html" > Escorpion </a></h4>
 Producto de una fusion entre la cultura empresarial disruptora de Silicon Valley <br /> y la filosofia libertaria al borde de la ley de su fundador
 <a href="https://es.wikipedia.org/wiki/Travis_Kalanick" target="_blank">Travis Kalanick</a>, Uber Technologies,Inc ha estado sirviendo ultimamente como fuente de trabajo para todo un ejercito de choferes independientes.<br /><br />
</div>

<div class="planetas">
<h5><a href="/planetas/marte"> Marte </a></h5><p>&nbsp; El periodista y escritor cubano <a href="https://es.wikipedia.org/wiki/Carlos_Alberto_Montaner" target="_blank"> Carlos Alberto Montaner</a> es un tipico representante del pensamiento liberal aunque en este caso estamos hablando de un liberalismo en sentido decimononico.<br /> A diferencia de otros Republicanos, <br />el si supo ubicarse con claridad en el unico lado correcto: <br /> el de los Never Trumpers.</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/piscis.html" > Piscis </a></h4>
<p>&nbsp;&nbsp;&nbsp;Un conservadurismo suave, aristocratico,de herencia Burkeana, es el que nos trasmite subliminalmente el periodista  <a href="https://en.wikipedia.org/wiki/Ricardo_Brown_(journalist)" target="_blank">Ricardo Brown.</a> <br />La teoria de la zanahoria.La mayoria silenciosa.<br />Todo es posible, siempre y cuando, Les Républicains se mantengan a las puertas de Paris.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/sagitario.html" > Sagitario </a></h4>
<p>&nbsp;&nbsp;&nbsp;El blog de Yoani Sanchez fue bastante popular desde el año 2008 hasta alrededor del 2013 cuando abruptamente empezo a perder interes. Si el gobierno cubano no esta acusandola de ser financiada por <a href="https://es.wikipedia.org/wiki/George_Soros" target="_blank"> George Soros</a>, debe ser porque en Cuba la CIA es mas popular que el fundador de Quantum Fund  y de la Open Society. </p>
</div>

<div class="planetas">
<h6><a href="/bautismo2.php" >Jupiter</a></h6>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuando  <a href="https://es.wikipedia.org/wiki/Gloria_Estefan" target="_blank">Gloria Estefan</a> escribio la cancion "Mi Tierra" ella seguro pensaba en algun lugar de la geografia cubana. <br />Sin embargo, para muchos otros que desde Cuba escuchaban la misma cancion, "su tierra" no tenia nada que ver con la que pisaban sino con aquella otra imaginaria, que a 90 millas en el exilio parecia destinada a guardar celosamente el espiritu originario de la cubaneidad.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/capricornio.html" > Capricornio</a></h4>
<p>&nbsp;Con  <a href="https://en.wikipedia.org/wiki/Alexander_Otaola" target="_blank"> Alexander Otaola</a> no tenemos nada novedoso. <br /> 
Es la misma vieja fauna de Vigilia Mambisa q antes rompia Discos en las calles
y ahora aparece reciclada desde YouTube.
Lo unico nuevo aqui es que antes la ignorancia y la estupidez eran corrientes secundarias<br /> y ahora son mainstream.</p>
</div>




<div id="saturno">
<p><a href="/bautismo1.php"  > Saturno</a></p>
<p>&nbsp;El "Singao" de <a href="https://es.wikipedia.org/wiki/Miguel_D%C3%ADaz-Canel" target="_blank" style="color:blue"> Canel</a> <br /> tuvo su bautismo de fuego<br />el 11 de Julio del 2021.<br />Saltandose todo el capitulo del debate ideologico <br />Cuba termina su transicion <br />y se adentra apresuradamente <br />en el campo geopolitico Oriental. </p> 
<p><a href="#top"> back to top </a></p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/acuario.html" > Acuario </a></h4>
<p>&nbsp;&nbsp;&nbsp;El proximo 4 de Mayo,todos los Monarquicos<br /> nostalgicos del Ancien Regime de la Nueva España, <br />se reuniran en la Comunidad de Madrid para rendir pleistecia a las novisimas estrellas del partido  <a href="https://es.wikipedia.org/wiki/Santiago_Abascal_Conde" target="_blank" >Vox </a> <br />Todos estan de acuerdo en el regreso de los Borbones.<br />El unico punto de debate es: como?</p> 
</div> 

<div>
 

   

</div>
<id id="footer" style="color:black;clear:both;text-align:center;">
Calendario Cubano...con un 99.99% de discrecion filosofica...</id>
</div>
<div id="result"></div>


<script type="text/javascript">
 //<![CDATA[
  var image = document.getElementById("fotos");
  var imageArray = [ "/pictures/IMG_1214.JPG","/pictures/IMG_1216.JPG","/pictures/IMG_1218.JPG","/pictures/IMG_1223.JPG","/pictures/IMG_1233.JPG","/pictures/IMG_1249.JPG"];
  var imageIndex = 0;
function slideit()
{
  image.setAttribute("src",imageArray[imageIndex]);
  
  imageIndex++;
  if(imageIndex >= imageArray.length)
  {
      imageIndex = 0;
  }
}
 
var intervalHandler = setInterval(slideit,2500);

//]]>  
</script>

</body>
</html>