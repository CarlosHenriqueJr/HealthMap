var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];

function initialize() {	
	var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
	
    var options = {
        zoom: 5,
		center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);
}

initialize();

function abrirInfoBox(id, marker) {
	if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
		infoBox[idInfoBoxAberto].close();
	}

	infoBox[id].open(map, marker);
	idInfoBoxAberto = id;
}

function carregarPontos() {
	
	$.ajax({
   url: 'js/pontos.json',
   type: 'GET',
   dataType : "json",
   success: function (data) {
		
		var latlngbounds = new google.maps.LatLngBounds();
		
		$.each(data, function(index, ponto) {
			
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
				
				icon: 'img/marcador.png'
			});
			
			var myOptions = {
				content: "<p><b>Local:</b>" + ponto.Descricao + "<br><b>Endereço:</b> " + ponto.endereco + "<br><b>Contato:</b>" + ponto.telefone + "<br>" + ponto.nleitos + " Leitos disponíveis.<br><b>Áreas disponíveis:</b> Clínico Geral, Nutrição, Psicologia, Pediatra. <br> <a href=../cadastroconsulta.php?id=" + ponto.id + ">Cadastrar Consulta</a></p>",

				pixelOffset: new google.maps.Size(-150, 0)
        	};

			infoBox[ponto.id] = new InfoBox(myOptions);
			infoBox[ponto.id].marker = marker;
			
			infoBox[ponto.id].listener = google.maps.event.addListener(marker, 'click', function (e) {
				abrirInfoBox(ponto.id, marker);
			});
			
			markers.push(marker);
			
			latlngbounds.extend(marker.position);
			
		});
		
		var markerCluster = new MarkerClusterer(map, markers);
		
		map.fitBounds(latlngbounds);
		
	}
	});
}

carregarPontos();