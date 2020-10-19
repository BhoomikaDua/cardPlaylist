$(document).ready(function() {

    /* 
    FORM SUBMISSION PREVENTION
     */

    $("form").submit(function(e) {
        e.preventDefault();
    });


    /* 
    REGISTER ITEM
     */

    $("body").on('click', '#add', function() {
        var title = $('#title').val();
        var desc = $('#bio').val();
        var img = $('#image').val();

        if (title === '') {
            alert("Please Enter The Title");
            return false;
        }
        if (desc === '') {
            alert("Please Enter The Description");
            return false;
        }
        if (img === '') {
            alert("Please Enter The Image Link/URL");
            return false;
        }

        $.ajax({
            type: "post",
            url: "ajax/requests.php", //backend page
            data: {
                title: title,
                desc: desc,
                img: img,
                action: 'register'
            },
            dataType: 'html',
            beforeSend: function() {},
            success: function(data) {
                if (data === 'TRUE') {
                    alert("Item Registered Successfully!");
                    reset();
                } else {
                    alert("Try Again!");
                }
            }
        });
    });

    /* 
    RESET
     */

    $("body").on('click', '#reset', function() {
        reset();
    });


});


function reset() {
    $('#title').val("");
    $('#bio').val("");
    $('#image').val("");
    $('#title').focus();
}