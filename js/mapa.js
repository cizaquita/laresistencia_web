/** 
 * Script mapa @cizaquita
**/
var isSelected = false;
var codigo;

$(function(){
  $('#mapaCol').vectorMap({
	  map: 'co_mill',
	  backgroundColor: 'transparent',
	  zoomOnScroll: false,
	  zoomAnimate: false,
	  regionsSelectable: true,
	  regionsSelectableOne: true,
	  regionStyle: {
	      selected: {
	        fill: '#0e3a6d'
	      }
	  },
	  onRegionSelected: function(e, code, selected, regions){
	  	isSelected = selected;
	  	if(isSelected){
	  		cambiarInformacion(code);
	  	}
	  },
	  onRegionOver: function(e, code){
	  	if(!isSelected){
	  		cambiarInformacion(code);
	  	}
	  },
	  series: {
	    regions: [{
	      //values: gdpData,
	      scale: ['#C8EEFF', '#FFFFFF'],
	      normalizeFunction: 'polynomial'
	    }]
	  },
	  onRegionTipShow: function(e, el, code){
	    //el.html(el.html()+' (GDP - '+gdpData[code]+')');
	  }
	});
	function infoEstatica(code){
		cambiarInformacion(code);
	}
	
	function cambiarInformacion(code){
	  	console.log("Code debug: " + code);
	    var mapaEx = $('#mapaCol').vectorMap('get', 'mapObject');
          var dpto = mapaEx.getRegionName(code);
          $(".titleComunidades").text("Comunidades en " + dpto);
          if(code == "CO-DC"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/108628716088579854074/posts" target="_blank">@fredsnake</a><a href="http://telegram.me/fredsnake" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
	      }else if(code == "CO-BOL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/108628716088579854074/posts" target="_blank">@fredsnake</a><a href="http://telegram.me/fredsnake" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');		      
	     }else if(code == "CO-ANT"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/114433641468273078993" target="_blank">Medellín</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JuanDavidLayosArroyave/posts" target="_blank">@JLAYOS (Local & Internacional)</a><a href="http://telegram.me/jlayos" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/100502179853632277824/posts" target="_blank">@GIRLPOWERZMB </a><a href="http://telegram.me/girlpowerzmb" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/112492339227304564316" target="_blank">@Edilay</a><a href="http://telegram.me/edilay" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-NSA"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/102881998506825896095" target="_blank">Cúcuta</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/115873095209851964050/posts" target="_blank">@SmartGenius</a><a href="http://telegram.me/smartgenius" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110501538105673564192" target="_blank">@LozanoRincon</a><a href="http://telegram.me/lozanorincon" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-VAC"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/112865388228281916985" target="_blank">Cali</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110272877076271272942/posts" target="_blank">@Elektra1</a><a href="http://telegram.me/elektra1" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/105636620735140202268/posts" target="_blank">@Yepeto (Buenaventura)</a><a href="http://telegram.me/yepeto89" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+DavidStevenG%C3%A1lvezAndrade" target="_blank">@Zerkerus</a><a href="http://telegram.me/zerkerus" target="_blank">-Telegram</a></li>');
			  $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      
	      }else if(code == "CO-CAL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+DavidFernandoForeroSoler/posts?cfem=1" target="_blank">@Surkadavos</a><a href="http://telegram.me/surkadavos" target="_blank">-Telegram</a></li>');
	           $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/103639328560071297656/posts?cfem=1" target="_blank">@Giabastis</a><a href="http://telegram.me/giabastis" target="_blank">-Telegram</a></li>');
	           $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');

	      }else if(code == "CO-CAU"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
	           $("#personaContacto").append('<li><a href="https://plus.google.com/102047830636589158646/posts" target="_blank">@Llaneroebrio </a><a href="http://telegram.me/llaneroebrio " target="_blank">-Telegram</a></li>');
	           $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');		      
	          
	      }else if(code == "CO-HUI"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
			$("#personaContacto").append('<li><a href="https://plus.google.com/+fabianStevensVaronValencia" target="_blank">@fabianv</a><a href="http://telegram.me/fabianv" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-RIS"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111605119050616286988/posts" target="_blank">@krishnnon</a><a href="http://telegram.me/krishnnon" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-CAQ"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111800803479784689699" target="_blank">@Casuo (Local & Internacional)</a><a href="http://telegram.me/casuo" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-CAS"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/117458350967930781808" target="_blank">@Pesadillall</a><a href="http://telegram.me/pesadillaii" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-CES"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/106478713767013670922" target="_blank">@4D4</a><a href="http://telegram.me/ada_st" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/117458350967930781808" target="_blank">@Pesadillall</a><a href="http://telegram.me/pesadillaii" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-SAN"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/115238461878230501296" target="_blank">@Nocturnwolf</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	          
	      }else if(code == "CO-ATL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+EmmanuelRosales/posts?cfem=1" target="_blank">@Sepirothem</a><a href="http://telegram.me/emmanuelrc" target="_blank">-Telegram</a></li>');
	          $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		           
	      }else if(code == "CO-SAP"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110105139987485384766" target="_blank">@Daez</a><a href="http://telegram.me/daezz" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-QUI"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+WildesJaramillo/posts" target="_blank">@Wild320</a><a href="http://telegram.me/wild320" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/104540783365320114590/posts" target="_blank">@SANTI4AGO</a><a href="http://telegram.me/santi4ago" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-TOL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+JavierAmpudia/posts" target="_blank">@Ampudia</a><a href="http://telegram.me/ampudia" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-BOY"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/1/communities/106524920492333270270" target="_blank">Ingress Cartagena Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110409347471476601684/posts" target="_blank">@LoganXs</a><a href="http://telegram.me/loganxs" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-MAG"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/116784758742632031817" target="_blank">@BLAKISTOK</a><a href="http://telegram.me/comiendoalpinitosincucharita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href"http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');

}else if(code == "CO-COR"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/116784758742632031817" target="_blank">@BLAKISTOK</a><a href="http://telegram.me/comiendoalpinitosincucharita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href"http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else if(code == "CO-NAR"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/100521329540693047673" target="_blank">@Zhioon</a><a href="http://telegram.me/zhioon" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }else{
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#listaComunidades").append('<li><a href="https://telegram.me/rescol" target="_blank">Chat Telegram Nacional</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+CristianIv%C3%A1nIzaquitaMorales/posts" target="_blank">@Cizaquita (Nacional )</a><a href="http://telegram.me/cizaquita" target="_blank">-Telegram</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a><a href="http://telegram.me/rataeltriforce" target="_blank">-Telegram</a></li>');
		      
	      }
	}
});
