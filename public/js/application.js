var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
	// This function will display the specified tab of the form ...
	var x = document.getElementsByClassName("tab");
	x[n].style.display = "block";
	// ... and fix the Previous/Next buttons:
	if (n == 0) {
		document.getElementById("previous").setAttribute("readonly", "readonly");
	} else {
		document.getElementById("previous").setAttribute("readonly", false);
		document.getElementById("previous").style.display = "inline";
	}
	if (n == (x.length - 1)) {
		document.getElementById("next").innerHTML = "Envoyer";
	} else {
		document.getElementById("next").innerHTML = "Suivant";
	}
}

function nextPrev(n) {
	// This function will figure out which tab to display
	var x = document.getElementsByClassName("tab");
	// Exit the function if any field in the current tab is invalid:
	if (n === 1 && !validateForm()){
		return false;
	}
	if (currentTab === 0 && n === -1) {
		return false;
	}
	// Hide the current tab:
	x[currentTab].style.display = "none";
	// Increase or decrease the current tab by 1:
	currentTab = currentTab + n;
	// if you have reached the end of the form... :
	if (currentTab >= x.length) {
		//...the form gets submitted:
		document.getElementById("cahier_charges").submit();
		return false;
	}
	// Otherwise, display the correct tab:
	showTab(currentTab);
}

function validateForm() {
	// This function deals with validation of the form fields
	var x, y, i, valid = true;
	x = document.getElementsByClassName("tab");
	y = x[currentTab].getElementsByTagName("input");
	// A loop that checks every input field in the current tab:
	for (i = 0; i < y.length; i++) {
		console.log(y[i].value == "" && y[i].hasAttribute('required'));
		if (y[i].value == "" && y[i].hasAttribute('required')) {
			y[i].className += " invalid";
			valid = false;
		}
	}
	return valid; // return the valid status
}

function showDomainModel(input){
	console.log(input.value);
	var $domainName = $('input[name="domain_name"]').parent().parent().parent();
	var $domainWanted = $('input[name="domain_wanted"]').parent().parent().parent();
	if(input.value == 1) {
		$domainName.show();
		$domainWanted.hide();
	}else if (input.value == 0) {
		$domainName.hide();
		$domainWanted.show();
	}

}