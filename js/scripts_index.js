// function to close nav upon click of nav link
function closeNav() {
    var navbutton = document.getElementById("navbutton");
    navbutton.setAttribute("aria-expanded", "false");
    navbutton.classList.add("collapsed");

    var mobile_collapse = document.getElementById("mobile_collapse_front");
    mobile_collapse.setAttribute("aria-expanded", "false");
    mobile_collapse.style.height = "1px";
    mobile_collapse.classList.remove("in");
}


// Contact modal
// Get the modal
var modal = document.getElementById("modal-contact");

// Get the button that opens the modal
var btn = document.getElementById("button-contact");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
// END: Contact modal

// stickiness of navbar
window.onscroll = function() { navVisibility() };

function navVisibility() {
    if (window.innerWidth > 991) {
	if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
	    var nav = document.getElementById("navbar-dynamic");
	    if (nav.style.position === 'absolute') {
		
		//nav.style.position = 'fixed';
		nav.classList.add('navbar-back');
		var navitems = document.getElementsByClassName("nav-item");
		for (i = 0; i < navitems.length; i++) {
		    navitems[i].style.color = "black";
		}

		var borders = document.getElementsByClassName("borders-out");
		for (i = 0; i < borders.length; i++) {
		    var borders_li = borders[i].getElementsByTagName("a");
		    for (j = 0; j < borders_li.length; j++) {
		    }
		}

		nav.style.top = "-100px";
		nav.style.position = "fixed";

		let current_pos = -100;
		var interv = setInterval(increase, 1);
		function increase() {
		    current_pos++;
		    nav.style.top = current_pos + "px";
		    if (current_pos === 0) {
			clearInterval(interv);
		    }
		}
	    }
	}
	else {
	    var nav = document.getElementById("navbar-dynamic");
	    nav.style.position = 'absolute';
	    nav.classList.remove('navbar-back');
	    var navitems = document.getElementsByClassName("nav-item");
	    for (i = 0; i < navitems.length; i++) {
		navitems[i].style.color = "white";
	    }
	}

    
}

}
