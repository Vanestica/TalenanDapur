function buat_ajax(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}
	return null;
}

function hasil(){
	var data;
	if(ajaxku.readyState==4){
		data = ajaxku.responseText;
		document.getElementById("data").innerHTML = data;
	}
}


function pindah(){
	var url = "../kategoriresep/kategoriresep.php?ssid="+Math.random();
	// alert(url);
	ajaxku = buat_ajax();
	ajaxku.onreadystatechange = hasil;
	ajaxku.open("GET",url,true);
	ajaxku.send(null);
}