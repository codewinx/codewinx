$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'send_email.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if(response.status === 'success') {
                    $('#formMessage').php('<p class="text-green-500">' + response.message + '</p>');
                    $('#contactForm')[0].reset();
                } else {
                    $('#formMessage').php('<p class="text-red-500">' + response.message + '</p>');
                }
            },
            error: function() {
                $('#formMessage').php('<p class="text-red-500">There was an error sending your message. Please try again later.</p>');
            }
        });
    });
});