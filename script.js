$(document).ready(function() {

	if (Notification.permission == "granted") {
	  $(".permissao").addClass("d-none");
	  $(".envio").removeClass("d-none");
	} else {
	  $(".permissao").removeClass("d-none");
	  $(".envio").addClass("d-none");
	}

	$("#BPermissao").on("click", function() {
		Notification.requestPermission().then(function(permission) {
			if (permission == "granted") {
				$(".permissao").addClass("d-none");
				$(".envio").removeClass("d-none");
			} else {
				$(".permissao").removeClass("d-none");
				$(".envio").addClass("d-none");
			}
		});
	});


	$("#BEnviar").on("click", function() {
		var n = new Notification($("#ITitulo").val(), {
			body: $("#TMensagem").val(),
			icon: "notificacao.png"
		});


		n.addEventListener("click", function() {
			n.close();
			window.focus();
			window.location.href = $("#TLink").val();
		});/* */

	});



});

