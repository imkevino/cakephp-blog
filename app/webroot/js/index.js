var visible;
$('.trigger').on('click', function() {
  var popup = $('.popup');
  
  if(visible === true) {
    popup.velocity("stop", true).velocity("reverse", { begin: visible = false, display: "none" });
  } else {
    popup.velocity("stop", true).velocity({
      opacity: 1,
      height: "220px",
      width: "300px"
    }, {
      display: "block",
      begin: visible = true,
      easing: "easeOutQuad",
      duration: 300
    });
  }
});