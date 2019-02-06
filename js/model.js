$(document).ready(function() {


    $('#form').submit(() => {
        var str = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "add_data.php",
            data: str,
            dataType: "json",
            success: function (data) {
				if (!data.success) {
                    alert (data.message);
                    return
                }

                $.ajax({
                    url: "get_list.php",
                    dataType: "json",
                    success: function (list) {
                        if (!list.success) {
                            alert ('Ошибка при обращении к БД');
                            return;
                        }
                        $("#list").html (list.message);
                    }
                })
			}
        })
		return false;
    })

})