$(document).ready(function() {

    function refresh_list () {
        $.ajax({
            url: "get_list.php?_=" + new Date().getTime(),
            dataType: "json",
            success: function (list) {
                if (!list.success) {
                    alert (list.message);
                    return;
                }
                $("#list").html (list.message);
            }
        })
    }

    $('#form').submit(function() {
        var str = $(this).serialize();
        $.post({
            url: "add_data.php",
            data: str,
            dataType: "json",
            success: function (data) {
        if (!data.success) {
                    alert (data.message);
                    return
                }

                refresh_list ();
      }
        })
    return false;
    })

    refresh_list ();
})