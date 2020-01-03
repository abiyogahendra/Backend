var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("custom-navbar").style.top = "0";
  } else {
    document.getElementById("custom-navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}


$(document).ready(function(){
	$("#transaction-question").click(function(){
	  $("#content_question").load(URL="./assets/data_external/cara_transaksi.txt", function(responseTxt, statusTxt, xhr){
		if(statusTxt == "error")
		  alert("Error: " + xhr.status + ": " + xhr.statusText);
	  });
	});
  });

  $(document).ready(function(){
    $("#carabayar-question").click(function(){
      $("#content_question").load(URL="./assets/data_external/cara_bayar_tunai.txt", function(responseTxt, statusTxt, xhr){
      if(statusTxt == "error")
        alert("Error: " + xhr.status + ": " + xhr.statusText);
      });
    });
    });