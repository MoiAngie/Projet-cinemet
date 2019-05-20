(function (){
	function sliClick(e) {
		//alert(e.target.value);
		for (var i = 1; i <= 7; i++) {
			if (i<e.target.value){
				document.getElementById("c" + i).classList.add("leftC");
				document.getElementById("c" + i).classList.remove("rightC");
				document.getElementById("c" + i).style.zIndex = i;
			} else if (i>e.target.value){
				document.getElementById("c" + i).classList.remove("leftC");
				document.getElementById("c" + i).classList.add("rightC");
				document.getElementById("c" + i).style.zIndex = e.target.value - i;
			} else{
				document.getElementById("c" + i).classList.remove("leftC");
				document.getElementById("c" + i).classList.remove("rightC");
				document.getElementById("c" + i).style.zIndex = 10;
			}
		}

	}
	carouSlider.addEventListener("change", sliClick);
	function cardClick(e) {
		var index = e.target.id[1];
		carouSlider.value = index;
		e.target = carouSlider;
		e.target.value = index;
		sliClick(e);
	}
	for (var i = 1; i < 8; i++) {
		document.getElementById("c" + i).addEventListener("click", cardClick);
	}
	carouCard.addEventListener("change", sliClick);
}())
