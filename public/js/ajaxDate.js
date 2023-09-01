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



function callAjaxDate()

  {

     

     var url = "planetas/date.php";

	 var myRandom = parseInt(Math.random()*99999999);

	 myRequestD.open("GET", url + "?rand=" + myRandom,true);

	 myRequestD.onreadystatechange = responseAjaxDate;

	 myRequestD.send(null);

  }

  

 function responseAjaxDate()

  {

    

    if(myRequestD.readyState == 4)

	{

	   if(myRequestD.status == 200)

	   {

		 var serverDate = myRequestD.responseText;

		 document.getElementById("date").innerHTML = serverDate;

	   }

	    

	}

  } 



var myRequestD = getXMLHttpRequest();