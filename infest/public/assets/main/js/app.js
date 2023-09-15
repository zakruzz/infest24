$(document).on('submit', '#form-post', function(e) {
    e.preventDefault();

    $('.loader-section').css('display', 'block');

    $.ajax({
        url: $("#form-post").attr('action'),
        method: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
    }).then((result) => {
        $('.loader-section').css('display', 'none');
        if (result.success) {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: result.message,
            }).then(function() {
                location.href = result.url;
            });
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: result.message,
            });
        }
    });
});

$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
})
