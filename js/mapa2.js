/** 
 * Script mapa @cizaquita
**/
$(function(){
	var cod;
	var com=[];
  $('#mapaCol').vectorMap({
	  map: 'co_mill',
	  backgroundColor: 'transparent',
	  zoomOnScroll: false,
	  zoomAnimate: false,
	  regionsSelectable: true,
	  regionsSelectableOne: true,
	  onRegionClick: function(e, code){
	  	console.log("Code debug: " + code);
	      	      if(cod!=code){
	      	      cod = code;

	      }
	      else{
	      	cod=null;
	      }
	  },

	  onRegionOver: function(e, code){
	      console.log("Code debug: " + code);
	      var mapaEx = $('#mapaCol').vectorMap('get', 'mapObject');
          var dpto = mapaEx.getRegionName(code);
          $(".titleComunidades").text("Comunidades en " + dpto);
          if(code == "CO-DC"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-ANT"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/114433641468273078993" target="_blank">Medellín</a></li>');
		      com[2]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[3]=$("#personaContacto").empty();
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JuanDavidLayosArroyave/posts" target="_blank">@nauali (Local & Internacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JuanCamiloAgudelo88/posts" target="_blank">@Jcamiloagudelo</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/112492339227304564316" target="_blank">@Edilay</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[8]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[9]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-NSA"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/102881998506825896095" target="_blank">Cúcuta</a></li>');
		      com[2]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[3]=$("#personaContacto").empty();
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110501538105673564192" target="_blank">@LozanoRincon</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	         
	      }else if(code == "CO-VAC"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/112865388228281916985" target="_blank">Cali</a></li>');
		      com[2]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[3]=$("#personaContacto").empty();
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110272877076271272942/posts" target="_blank">@Elektra1</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JulioC%C3%A9sarM%C3%A1rquezArangoInkRampantWolf/posts" target="_blank">@InkRampantWolf</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JesusHerneyC%C3%A1rdenas/about" target="_blank">@Jecaros</a></li>');
			  com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/105636620735140202268/posts" target="_blank">@Yepeto (Buenaventura)</a></li>');
			  com[8]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[9]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[10]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }
	      else if(code == "CO-CAL"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+DavidFernandoForeroSoler/posts?cfem=1" target="_blank">@Surkadavos</a></li>');
	          com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/103639328560071297656/posts?cfem=1" target="_blank">@Giabaptiss</a></li>');
	          com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-HUI"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/116039273072642678303" target="_blank">@Jose2802</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+CristhianCamiloCorrea/about" target="_blank">@Crisky3c</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-RIS"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+jorgeeduardousmaa/posts?cfem=1" target="_blank">@Jorri</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-CAQ"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111800803479784689699" target="_blank">@Casuo (Local & Internacional)</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-CES"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/106478713767013670922" target="_blank">@4D4</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/117458350967930781808" target="_blank">@Pesadillall</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-SAN"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/115238461878230501296" target="_blank">@Nocturnwolf</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(code == "CO-ATL"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+EmmanuelRosales/posts?cfem=1" target="_blank">@Sepirothem</a></li>');
	          com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/112607506749481800707" target="_blank">@Fittoaf</a></li>');
	          com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-MET"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111947974662819619223" target="_blank">@Kakalo</a></li>');
	          com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/102789170896325477654" target="_blank">@Lhynley</a></li>');
	          com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[7]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-SAP"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110105139987485384766" target="_blank">@Daez</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-QUI"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+WildesJaramillo/posts" target="_blank">@Wild320</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-TOL"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/+JavierAmpudia/posts" target="_blank">@Ampudia</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(code == "CO-BOY"){
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+Iv%C3%A1nReyesSalgado/about" target="_blank">@IvanKnight25</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[6]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else{
		      com[0]=$("#listaComunidades").empty();
		      com[1]=$("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      com[2]=$("#personaContacto").empty();
		      com[3]=$("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      com[4]=$("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      com[5]=$("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }
	      for (var i=0; i<com.length; i++){
	      	com[i];
	      }
	      
	  },
	  	  onRegionOut: function(e, code){
	  	  	if(cod==null){
	  	  		console.log("Code debug: " + code);
          $(".titleComunidades").text("Resistencia Colombia Comunidad");
          $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	  	  	}
	  	  	else{
	  	  		console.log("Code debug: " + cod);
	      var mapaEx = $('#mapaCol').vectorMap('get', 'mapObject');
          var dpto = mapaEx.getRegionName(cod);
          $(".titleComunidades").text("Comunidades en " + dpto);
           if(cod == "CO-DC"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-ANT"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/114433641468273078993" target="_blank">Medellín</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JuanDavidLayosArroyave/posts" target="_blank">@nauali (Local & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JuanCamiloAgudelo88/posts" target="_blank">@Jcamiloagudelo</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/112492339227304564316" target="_blank">@Edilay</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-NSA"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/102881998506825896095" target="_blank">Cúcuta</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110501538105673564192" target="_blank">@LozanoRincon</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-VAC"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="https://plus.google.com/u/0/communities/112865388228281916985" target="_blank">Cali</a></li>');
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110272877076271272942/posts" target="_blank">@Elektra1</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JulioC%C3%A9sarM%C3%A1rquezArangoInkRampantWolf/posts" target="_blank">@InkRampantWolf</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+JesusHerneyC%C3%A1rdenas/about" target="_blank">@Jecaros</a></li>');
			  $("#personaContacto").append('<li><a href="https://plus.google.com/105636620735140202268/posts" target="_blank">@Yepeto (Buenaventura)</a></li>');
			  $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }
	      else if(cod == "CO-CAL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+DavidFernandoForeroSoler/posts?cfem=1" target="_blank">@Surkadavos</a></li>');
	           $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/103639328560071297656/posts?cfem=1" target="_blank">@Giabaptiss</a></li>');
	           $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-HUI"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/116039273072642678303" target="_blank">@Jose2802</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+CristhianCamiloCorrea/about" target="_blank">@Crisky3c</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-RIS"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+jorgeeduardousmaa/posts?cfem=1" target="_blank">@Jorri</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-CAQ"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111800803479784689699" target="_blank">@Casuo (Local & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-CES"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/106478713767013670922" target="_blank">@4D4</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/117458350967930781808" target="_blank">@Pesadillall</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-SAN"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/115238461878230501296" target="_blank">@Nocturnwolf</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	          
	      }else if(cod == "CO-ATL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+EmmanuelRosales/posts?cfem=1" target="_blank">@Sepirothem</a></li>');
	          $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/112607506749481800707" target="_blank">@Fittoaf</a></li>');
	          $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-MET"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/111947974662819619223" target="_blank">@Kakalo</a></li>');
	          $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/102789170896325477654" target="_blank">@Lhynley</a></li>');
	          $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-SAP"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/110105139987485384766" target="_blank">@Daez</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-QUI"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+WildesJaramillo/posts" target="_blank">@Wild320</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-TOL"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+JavierAmpudia/posts" target="_blank">@Ampudia</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else if(cod == "CO-BOY"){
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/0/+Iv%C3%A1nReyesSalgado/about" target="_blank">@IvanKnight25</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }else{
		      $("#listaComunidades").empty();
		      $("#listaComunidades").append('<li><a href="http://is.gd/resco" target="_blank">Resistencia Colombia</a></li>');
		      $("#personaContacto").empty();
		      $("#personaContacto").append('<li><a href="https://plus.google.com/u/1/+CristianIv%C3%A1nIzaquitaMorales" target="_blank">@Cizaquita (Nacional)</a></li>');
		      $("#personaContacto").append('<li><a href="http://is.gd/rataeltriforce" target="_blank">@RATAELTRIFORCE (Nacional & Internacional)</a></li>');
		      $("#personaContacto").append('<li><a href="https://plus.google.com/+VíctorRenéVásquezMuñoz" target="_blank">@VlKTHOR (Nacional)</a></li>');
	      }
	  	  	}
	  	  },
	  onRegionSelected: function(e,code,isSelected,selectedRegions){
	      console.log(selectedRegions);
    			regionStyle:{
    				selectedRegions:{
						fill:"red";
    					}
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
});