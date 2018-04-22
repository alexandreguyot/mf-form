var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
	var x = $(".tab");
	x[n].style.display = "block";
	if (n === 0) {
		$("#previous").style.display = "none";
	} else {
		$("#previous").css('display', "inline");
	}
	if (n === (x.length - 1)) {
		$("#next").text("Valider");
	} else {
		$("#next").text("Suivant");
	}
}

function nextPrev(n) {
	var x = $(".tab");
	if (n === 1 && !validateForm()) return false;
	x[currentTab].style.display = "none";
	currentTab = currentTab + n;
	if (currentTab >= x.length) {
		$("#cahier_charges").submit();
		return false;
	}
	showTab(currentTab);
}

function validateForm() {
	var x, y, i, valid = true;
	x = $(".tab");
	y = x[currentTab].getElementsByTagName("input");
	for (i = 0; i < y.length; i++) {
		if (y[i].value == "") {
			y[i].className += " invalid";
			valid = false;
		}
	}
	return valid;
}