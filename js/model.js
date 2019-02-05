$(document).ready(function () {
    $('#forms').submit(function () {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "add_data.php",
            data: str,
            success: function (data) {
				window.location.href = "index.php";
				alert(data);
			}
        });
		return false;
    });
});	