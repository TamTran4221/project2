$( document ).ready(function() {
    $( ".addtocart" ).each(function() {
        $(this).on('click', function() {
            $.ajax({
                url: '',
                type: 'POST',
                dataType: 'JSON',
                beforeSend: function() {
                
                },
                data: {
                    productId: `${$(this).find('.product-id').val()}`
                }
            }).done(function(req) {
                console.log('123')
            }). fail(function(err) {
                console.log(err)
            });
        });
    });
});