$("body").load(() => {


    $('#forms').submit(() => {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "add_data.php",
            data: str,
            dataType: "json",
            success: function (data) {
				alert(data);
			}
        });
		return false;
    });
});	