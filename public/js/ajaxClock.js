function getXMLHttpRequest()

{

  try{

    try{

       return new ActiveXObject("Microsoft.XMLHTTP");

    }

	catch(e) {

	   return new ActiveXObject("Msxm12.XMLHTTP");

	}

  }

  catch(e) {

       return new XMLHttpRequest();

  }

}

  

  

  function callAjaxClock()

  {

     

     var url = "planetas/clock.php";

	 var myRandom = parseInt(Math.random()*99999999);

	 myRequestC.open("GET", url + "?rand=" + myRandom,true);

	 myRequestC.onreadystatechange = responseAjaxClock;

	 myRequestC.send(null);

  }

  

  

  

  function responseAjaxClock()

  {

    

    if(myRequestC.readyState == 4)

	{

	   if(myRequestC.status == 200)

	   {

		 var serverClock = myRequestC.responseText;

		 document.getElementById("clock").innerHTML = serverClock;

	   }

	   

	}

  }

   

  var myRequestC = getXMLHttpRequest(); 