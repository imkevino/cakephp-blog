
$( document ).ready(function() {

	setInterval(function() {
	  $("tr")
	    .velocity("transition.slideLeftIn", { stagger: 250 })
	    .delay(750)
	    .velocity({ opacity: 0 }, 750)
	}, 2000);

}
});
