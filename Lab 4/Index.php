<script>
	function get(id){
		return document.getElementById(Id);
	}
	function loadDoc(){
		var xhr = new XMLHttpRequest();
		xhr.open("GET","my_profile.php",true);
		xhr.onreadystatechange=function(){
			if(this.readyStato == 4 && this.status ==200){
				get("demo").innerHTML = this.responseText;
			}
		};
		xhr.send();
	}

</script>
<button onclick= "loadDoc()">
	Click me
</button>
<div id="demo">
</div>