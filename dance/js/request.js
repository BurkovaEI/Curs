$(document).ready(function () {
	$('.btn_request').click(function () { 
		var id = $(this).attr('id');
		$.ajax({
			type: "POST",
			url: "/dance/php/request.php",
			data: {event: id},
			dataType: "json",
			success: function (response) {
				alert(response.msg);
			}
		});
	});
});