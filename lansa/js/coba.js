(function() {
    $('form > input#cek').keyup(function() {
        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#add_data').attr('disabled', 'disabled');
        } else {
            $('#add_data').removeAttr('disabled');
        }
    });
})()