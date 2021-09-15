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
window.onscroll = function() { navVisibility()};

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
		var logo = document.querySelector('.main-logo img');
		logo.style.backgroundColor = '#2D2D2D';

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
		navitems[i].style.color = "#2D2D2D";
	    }
		var logo = document.querySelector('.main-logo img');
		logo.style.backgroundColor = 'transparent';
	}
    }
}



// Put footer to the bottom of the page
/*var header_height = 0;
var footer_height = document.getElementById("footer").offsetHeight;
var small_header_height;

if(document.getElementById("pci-small-header")) {
	small_header_height = document.getElementById("pci-small-header").offsetHeight;
}

if(document.getElementById("pci-home-header")) {
	header_height = document.getElementById("pci-home-header").offsetHeight;
}

var margin_content = footer_height + 16 + small_header_height + header_height + 103;

var footer_height = document.getElementById("main-content").setAttribute('style', 'min-height: calc(100vh - ' + margin_content + 'px)');
*/





// DEPRECATED, BECAUSE UNSUCCESSFUL: fix footer to bottom of page if there is not enough content on the page
/*var body = document.querySelector('body');
if (body.clientHeight - 330 < window.innerHeight) {
    var footer = document.querySelector('footer');
    footer.style.position = 'absolute';
    footer.style.bottom = '0';
    footer.style.left = '0';
    footer.style.right = '0';
}*/