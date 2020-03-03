var errmsg='';

function showClientDate($dt){

    var d = new Date();

    var curr_secs	= d.getSeconds();

    var curr_min 	= d.getMinutes();

    var curr_hour 	= d.getHours();

    var curr_date 	= d.getDate();

    var curr_month	= d.getMonth()+1;

    var curr_year	= d.getFullYear();

    if(curr_month < 10){

            curr_month = '0'+curr_month;

    }

    var dtm = curr_year+'-'+curr_month+'-'+curr_date+' '+curr_hour+':'+curr_min+':'+curr_secs;

    document.getElementById($dt).value = dtm;

}

function resetall(){errmsg='';} // to reset the errmsg so that it can work better for next turn.

function required(obj,title)// checks that the field is not empty

{

	if(errmsg=='')// checks if one message is being displayed before it then this will not be displayed.

	{

		if(obj.value=='')

		{

			errmsg += title+" is required. \n";

			alert(errmsg);

			obj.focus();

		}

//		else{frm.submit();}

	}

}



function minstrlen(obj,len,title)

{

	if(errmsg=='')

	{

		if(obj.value.length < len)//checks if length of the entered string is lesser than the required length

		{

			errmsg += title+" should be at least "+len+" characters long. \n";

			alert(errmsg);

			obj.focus();

			return false;

		}

//		else{frm.submit();}

	}

}



function matchfields(obj1,title1,obj2,title2)

{

	if(errmsg=='')

	{

		if(obj1.value != obj2.value)//checks if obj1 and obj2 values are same

		{

			errmsg += title1+" and "+title2+" should be the same. \n";

			alert(errmsg);

			obj1.focus();

		}

//		else{frm.submit();}

	}

}



function isEmail(obj,title)

{

	if(errmsg=='')

	{

		p=obj.value.split('@');

		if(p[1]){q = p[1].split('.');}

		

		if(!(p[1] && q[1]))//checks if string is having a '@' and '.' characters

		{

			errmsg += title+" should be a valid E-mail Address. eg. john168@gtrecycling.com \n";

			alert(errmsg);

			obj.focus();

		}

/*

		p=obj.value.indexOf('@');

		if( p<1 || p==(obj.value.length-1) )

		{

			errmsg += title+" should be a valid E-mail Address. \n";

			alert(errmsg);

			obj.focus();

		}

//		else{frm.submit();}

*/

	}

}



function checksubmit(frm)

{



	if(errmsg=='')

	{

		frm.submit();

//		alert(errmsg);

	}

	else

	{

//		frm.submit=false;

//		alert(errmsg);

		errmsg='';

		return false;

		//frm.submit=false;

	}



}







































	var http = createRequestObject();  

	var response;

	var the_srch_div_id;

	var obj1;





	function callFile(url) 

	{

//		obj1 = obj;

//		document.getElementById(obj).style.visibility = 'visible';

		http.open('get', url);

        http.onreadystatechange = getResponseCallFile;

		http.send(null);

	}

    function getResponseCallFile() {  

       if(http.readyState == 4 && http.status == 200){  

          response = http.responseText;  

//		  document.getElementById(obj1).innerHTML = response;

      }  

	}



	function showTextinObj(obj, url) 

	{

//		http.open('get', 'search_customer.php?q='+obj.value+"&obj="+obj.id);

		

		

//		alert(url);

		obj1 = obj;

		document.getElementById(obj).style.visibility = 'visible';

		http.open('get', url);

        http.onreadystatechange = getResponse;

//		http.send(null);

		/*

		if(http.readyState == 4 && http.status == 200){

  	    	response = http.responseText;

//			document.getElementById(obj).innerHTML = response;

			alert(response);

		}

		*/

/*

//		document.getElementById(obj).innerHTML=url;

//		document.getElementById(obj).style.show='Block';

		return response;

*/

		http.send(null);

		

	}



    function getResponse() {  



       if(http.readyState == 4 && http.status == 200){  

          response = http.responseText;  

		  document.getElementById(obj1).innerHTML = response;



          /*

		  if(response.length > 1) {  

             document.getElementById(the_srch_div_id).style.visibility = "visible";

             document.getElementById(the_srch_div_id).innerHTML = response;  

          } else {

            document.getElementById(the_srch_div_id).style.visibility = "hidden";

		  }

     	  */

      }  

     

    }  



	

	/*

	this function is used to show layer(s)

	*/

	function get_location(theForm, obj, index) {



		theLeft=0;

		theTop=0;

		div_search = eval("prdcode"+index);		



		if (navigator.appName == 'Microsoft Internet Explorer') {



			theLeft = obj.getBoundingClientRect().left - 1;

			theTop = obj.getBoundingClientRect().top + 20;

			

		} else {

			if (navigator.appName == 'Netscape') {



				theLeft = document.getBoxObjectFor(document.getElementById(div_search.id)).x ;

				theTop = document.getBoxObjectFor(document.getElementById(div_search.id)).y ;



			} else {

				alert("Unknow browser! Please contact with website administrator.");

			}

		}



		document.getElementById(div_search.id).style.left = theLeft;

		document.getElementById(div_search.id).style.top = theTop;

		document.getElementById(div_search.id).style.position = 'fixed';

		document.getElementById(div_search.id).style.height = '150px';



		document.getElementById(div_search.id).style.visibility = "visible";



		the_srch_div_id = div_search.id;

//		alert(obj.id);

		http.open('get', 'search_products.php?q='+obj.value+"&obj="+obj.id);

		//c = "includes/search_products.php?q=\""+obj.value+"\"&obj=\""+obj.name+"\"";

		//alert(c);

		//http.open('get', "includes/search_products.php?q=\""+obj.value+"\"&obj=\""+obj.name+"\"");

		

		

        http.onreadystatechange = handleResponse;



		http.send(null);  

		

	}

	

	/*

	this function used to access files

	*/

    function createRequestObject() {  

		//alert(document.simplesearch.name);

		       var req;  

			   if(window.XMLHttpRequest){  

				  // Firefox, Safari, Opera...  

				  req = new XMLHttpRequest();  

			   } else if(window.ActiveXObject) {  

				  // Internet Explorer 5+  

				  req = new ActiveXObject("Microsoft.XMLHTTP");  

			   } else {  

				  // There is an error creating the object,  

				  // just as an old browser is being used.  

				  alert('Problem creating the XMLHttpRequest object');  

			   }  

	   

				if (req.overrideMimeType) {

				  req.overrideMimeType('text/xml');

				}

				if (!req) {

				  alert('Cannot create XMLHTTP instance');

				  //return false;

				}

       return req;  

    }  

     

	/*

	this function controls layer's visibility

	*/     

    function handleResponse() {	 

		if(http.readyState == 4 && http.status == 200){  

          response = http.responseText;  



          if(response.length > 1) {  

             document.getElementById(the_srch_div_id).style.visibility = "visible";

             document.getElementById(the_srch_div_id).innerHTML = response;  

          } else {

            document.getElementById(the_srch_div_id).style.visibility = "hidden";

		  }

     

      }  

     

    }  



	/*

	this function controls the layer's visibitlity

	*/

	function div_state() {

		 document.getElementById(the_srch_div_id).style.height = '1px';

		 document.getElementById(the_srch_div_id).style.visibility = "hidden";

	}

	

	/*

	This function sets the form action

	*/

	function the_frm_process_quotation(theForm, obj) {

		

		if (obj.name == 'btn_reset') {

			theForm.reset();

		} else {

			if (obj.name == 'btn_add') {

				theForm.action = "quotation_detail.php";

				theForm.submit();

			} else {

					if (obj.name == 'btn_complete') {

						theForm.action = "search_products.php";

						theForm.submit();

					} else {

						return false;

					}

			}

		}

		

		return true;

	}

	function pop_fields(fld, data) {

		

		document.getElementById(fld).value = data;

//		fld.value = data;



	}

$( document ).ready(function() {
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy'
    });

    $('.focus').focus();
});
