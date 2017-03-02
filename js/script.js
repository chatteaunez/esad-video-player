// XHR ///////////////////////////////////////////////////////////////////////////////////////////
function xhr_new(f,e){
	var wtr = new XMLHttpRequest();
	wtr.onreadystatechange = function(){
		if(wtr.readyState==4)
			if(wtr.status==200){
				if(f) f(wtr.responseText);
			}
			else if(e) e(wtr.status);
	};
	return wtr;
}
function xhr_call(url,data,f,e){
	var formData = new FormData();
	for(var key in data)
		switch(typeof(data[key])){
			case 'string': case 'number': case 'boolean': formData.append(key,data[key]); break;
			case 'object': formData.append(key,data[key],data[key].name); break; // File
		}
	var xhr = xhr_new(f,e);
	xhr.open("POST",url);
	xhr.send(formData);
	return xhr;
}


///////// FUNCTIONS /////////

function getVideo(name){
  var data = {"name":name};
  xhr_call("php/videoMarkup.php",data,injectVideoMarkup);
}

function injectVideoMarkup(data){
  alert(data);
}

function menuhover(e){
	document.body.style.backgroundImage = "url('"+e.dataset.image+"')";
}
