$(document).ready(() => {


    $('#forms').submit(() => {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "contact_backend.php",
            data: str,
            success: function (data) {
				window.location.href = "index.php"; 
				alert(data);
			}
        });
		return false;
    });
});	