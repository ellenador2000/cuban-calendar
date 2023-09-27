<!DOCTYPE html>  
<html lang="es"> 
<head>
<meta charset="utf-8" />
<meta name="keywords" content="calendario cubano,noticias,cuba" />

<meta name="description" content="Noticias de Cuba y el mundo con un punto de vista personal.Una celebracion fanatica de la diversidad ideologica. Un portal de internet en espanol." />
<title>The American Calendar vs. The Matrix Resurrections...</title>
 
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
<a href="/"  <span style="text-decoration:none;color:black;">The American Calendar vs. The Matrix Resurrections...</span></a>
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
 <h1>  <a href="/planetas/sol.php" > NEO </a></h1>
<p>&nbsp; Our favorite movie: Matrix part one.<br /> Our favorite scene: the last one<br />when bullets were stopped in the air and <a href="https://en.wikipedia.org/wiki/Neo_(The_Matrix)" target="blank"> <br />Neo </a><br />finally begins defeating his enemies<br />fighting them without looking to them<br />as if he was meditating.</p> 
</div>
 
 <div class="zodiacoleft">
<h4><a href="/signos/cancer.html" > Smith#11 </a></h4>
<p>&nbsp;&nbsp;Si tu crias a un cubano en Texas<br />probablemente saldra algo como<br /><a href="https://es.wikipedia.org/wiki/Ted_Cruz"> Ted Cruz.</a> El ya se siente raptado por Dios <br /> muy lejos de todo pensamiento liberal<br /> y muy lejos del sentido comun.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/leo.html" > Smith#12 </a></h4>
<p>&nbsp;&nbsp;Spanish citizen Alvaro Lopez Tardon has been sentenced in Miami to no less than 150 years in prison. He was wanted in his country as the most bloodthirsty drug trafficker. However, in a luxurious apartment in South Beach he had found refuge,<br />
  surrounded by Bugattis and Ferraris.</p>
</div>

<div class="planetas">
<h2><a href="/planetas/luna.php" > The Agents</a></h2>
<p>&nbsp; The American Empire is run from the offices <br /> of the Federal Reserve. <a href="https://en.wikipedia.org/wiki/Alan_Greenspan" target="_blank">Allan Greenspan</a> <br />taught very well to his bureaucrats <br />how to bend the hardest knees<br />just by pressing a few buttons.<br /> ...TINA !!..."there is not alternative"<br /> No matter what...you will end up feeding the beast !!</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/geminis.html" > Smith#9</a></h4>
<p>Cuando ocurrio  la sucesion<br /> algunos depositaron sus esperanzas en el.Otros no.<br /> Algo se movio en la Habana en los ultimos años pero<br /> los hechos prueban que para <a href="http://es.wikipedia.org/wiki/Ra%C3%BAl_Castro" target="_blank" >Raul Castro </a>las tan esperadas Reformas nunca deberan suplantar la Revolucion.</p> 
</div>

<div class="zodiacoright">
<h4><a href="/signos/virgo.html" > Smith#10 </a></h4>
<p>&nbsp;&nbsp;&nbsp;"La era esta pariendo un corazon,no puede mas se <br />muere de dolor..."<br />De tanto darle a la lata la era finalmente pario.<br />Pero no exactamente lo que en los romanticos sesentas soñara <a href="http://es.wikipedia.org/wiki/Silvio_Rodriguez" target="_blank"> Silvio</a>,sino al reves.Como cuando el lado izquierdo del cerebro controla el lado derecho del cuerpo y viceversa.</p>
</div>

<script type="text/javascript" >



</script>

<div class="planetas" >
<h3> <a  href="/planetas/mercurio.php" > Morpheus </a></h3> 
<p>&nbsp; El Centro donde todos los caminos convergen  <br />no esta en Times Square </a> sino en Lawton o en Nuevo Vedado.<br />Alli todos los secretos se atan y desatan queramoslo o no<br />y Alfredo Duran le pregunta a los Espiritus <br />si hay respuestas para hoy o si habra que esperar<br /> unos dias mas tarde.</p>

</div>

<div class="zodiacoleft">
<h4><a href="/signos/tauro.html" > Smith#7 </a></h4>
<p>&nbsp;Some can now live in real time
  their favorite <br />conspiracy theories.<br />
  Some others now have their trade war with China.
 <br /><a href="https://en.wikipedia.org/wiki/Mitch_McConnell" target="blank"> Mitch McConnell </a> has his cheap judges.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/libra.html" > Smith#8 </a></h4>
<p>El 1 de enero de 1959,<a href="http://es.wikipedia.org/wiki/Fidel_Castro" target="_blank"> Fidel Castro </a>tomo el control <br />del&nbsp;poder en Cuba e implanto un sistema dictatorial que <br />se ha mantenido intacto por mas de 50 años.<br /> Medio siglo es mas que suficiente para probar un <br />hecho historico consumado.</p>
</div>

<div class="planetas">
 <h4><a href="/planetas/venus.php"> The Oracle </a></h4>
<p>&nbsp; No se puede tener una teoria de la Social-Democracia coherente,si vives en la ciudad de Miami.<br />Es necesario haber nacido y crecido en la Isla<br />y despues emigrar a cualquier otro lugar q no sea el Norte,asi como le paso al Profesor <a href="https://es.wikipedia.org/wiki/Rafael_Rojas_Guti%C3%A9rrez" target="_blank"> Rafael Rojas</a>,quien desde su Exilio Mexicano<br /> disfruta,una vision panoramica envidiable.</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/aries.html" > Smith#5 </a></h4>
<p>&nbsp;&nbsp;&nbsp;Un conservadurismo suave, aristocratico,de herencia Burkeana, es el que nos trasmite subliminalmente el periodista  <a href="https://en.wikipedia.org/wiki/Ricardo_Brown_(journalist)" target="_blank">Ricardo Brown.</a> <br />La teoria de la zanahoria.La mayoria silenciosa.<br />Todo es posible, siempre y cuando, Les Républicains se mantengan a las puertas de Paris.</p>

</div>

<div class="zodiacoright">
<h4><a href="/signos/escorpion.html" > Smith#6 </a></h4>
 Producto de una fusion entre la cultura empresarial disruptora de Silicon Valley <br /> y la filosofia libertaria al borde de la ley de su fundador
 <a href="https://es.wikipedia.org/wiki/Travis_Kalanick" target="_blank">Travis Kalanick</a>, Uber Technologies,Inc ha estado sirviendo ultimamente como fuente de trabajo para todo un ejercito de choferes independientes.<br /><br />
</div>

<div class="planetas">
<h5><a href="/planetas/marte.php"> The Architect</a></h5><p>&nbsp; The American journalist and writer  <a href="https://en.wikipedia.org/wiki/Joe_Scarborough" target="_blank"> Joe Scarborough</a> is a typical representative of liberal thought, although in this case we are talking about liberalism in the nineteenth-century sense.<br /> Unlike other Republicans, <br /> he did know how to place himself clearly on the only correct side:<br /> of The Never Trumpers.</p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/piscis.html" > Smith#3 </a></h4>
<p>&nbsp;&nbsp;It is very easy to be a Senator in the state of Florida.<br />Nobody questions your actions.<br /> ..and <a href="https://en.wikipedia.org/wiki/Marco_Rubio" target="_blank"> Marco Rubio</a> knows it.That's why he rushed to acquit Trump during the Impeachment process <br />knowing that he was going to continue walking calmly down 8th Street as if nothing had happened.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/sagitario.html" > Smith#4 </a></h4>
<p>&nbsp;&nbsp;&nbsp;El blog de Yoani Sanchez fue bastante popular desde el año 2008 hasta alrededor del 2013 cuando abruptamente empezo a perder interes. Si el gobierno cubano no esta acusandola de ser financiada por <a href="https://es.wikipedia.org/wiki/George_Soros" target="_blank"> George Soros</a>, debe ser porque en Cuba la CIA es mas popular que el fundador de Quantum Fund  y de la Open Society. </p>
</div>

<div class="planetas">
<h6><a href="/planetas/jupiter.php" >Trinity</a></h6>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The  <a href="https://en.wikipedia.org/wiki/Catherine,_Princess_of_Wales" target="_blank">Duchess of Cambridge</a> dominates very well<br /> the covers of Vanity Fair! <br />By just following the seemingly chaotic cycle of photos, one can stay updated all the time on multiple kind of things like what will be the best clothes to wear next summer or what would be the best age to take our children to Disneyland.</p>
</div>

<div class="zodiacoright">
<h4><a href="/signos/capricornio.html" > Smith#2</a></h4>
<p>&nbsp; <a href="https://en.wikipedia.org/wiki/Donald_Trump" target="_blank"> Donald Trump</a>  is the most popular person at Sunday barbecues in the suburbs of any big US city. <br /> 
  After the third beer he is declared president by large majorities.<br /> Welcome hate and stupidity! <br />Welcome to the end of American democracy!</p>
</div>




<div id="saturno">
<p><a href="/planetas/saturno.html"  > The Matrix</a></p>
<p>&nbsp; <a href="https://en.wikipedia.org/wiki/Vladimir_Putin" target="_blank" style="color:blue"> Vladimir Putin</a> <br /> ,is a faithful follower <br />of the Werstern tradition of thougth<br />known as a Realpolitik. <br />This tradition, skipping all ethics,proclaims<br /> that only the balance of power between nations matters.<br />If now this in the hands of Russians seems cruel,<br /> the reality is that it always was.</p> 
<p><a href="#top"> back to top </a></p>
</div>

<div class="zodiacoleft">
<h4><a href="/signos/acuario.html" > Smith#1 </a></h4>
<p>&nbsp;&nbsp;&nbsp;On March 10, 2023, the Saudi monarchy and the Republic of Iran reached a peace agreement with Chinese mediation.<br /> Despite constant accusations of human rights violations within his reactionary society, the <a href="https://en.wikipedia.org/wiki/Mohammed_bin_Salman" target="_blank" >crown prince </a> <br />manages to gain unexpected alliances thanks to his bag full of money.</p> 
</div> 

<div>
 

   

</div>
<id id="footer" style="color:black;clear:both;text-align:center;">
  The American Calendar vs. The Matrix Resurrections...</id>
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