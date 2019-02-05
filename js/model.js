jquery.load(function () {

    $('#forms').submit(function () {
        var name = $('#name').val();
        var email = $('#email').val();
        var captcha = $('#captcha').val();
        var message = $('#message').val();

        var errors = $('#errors').val();
        
        if (name.length <= 3) {
            errors.text('Please enter your name!');
            return false;
        }else $('#name').removeClass('error');

        if (number.length == 0) {
            $( "#number" ).addClass( "error");
            return false;
        }else $('#number').removeClass('error');
    });


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