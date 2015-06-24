function displayimage(integer){

	name1 = "fileToUpload"+integer;
	var f = document.getElementById(name1).files[0];	
	name= "image"+integer;
	var i = document.getElementById(name);
	i.src=window.URL.createObjectURL(f);
	
	
}