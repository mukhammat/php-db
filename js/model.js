jquery.load(() => {

    $('#forms').submit(() => {
        let name = $('#name').val();
        let email = $('#email').val();
        let captcha = $('#captcha').val();
        let message = $('#message').val();

        let errors = $('#errors').val();
        
        if (name.length <= 3) {
            errors.text('Please enter your name!');
            return false;
        }else $('#name').removeClass('error');

        if (number.length == 0) {
            $( "#number" ).addClass( "error");
            return false;
        }else $('#number').removeClass('error');
    });


    $('#forms').submit(() => {
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