function generateGallery() {
    /* 
    PREPARE GALLERY
     */
    $('#exampleModal').modal('hide');
    $(".modal-backdrop").remove();

    $.ajax({
        type: "post",
        url: "ajax/requests.php", //backend page
        data: {
            action: 'gallery'
        },
        dataType: 'html',
        beforeSend: function() {},
        success: function(data) {
            if (data == 'END') {
                clearInterval(interval);
            } else {
                $(".container").html(data);
            }
        }
    });
}

generateGallery();

var interval = setInterval(function() {
    generateGallery()
}, 10000)