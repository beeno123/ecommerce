<script>
    function LoadProductModel(productId) {

        $.ajax({
            method: 'GET',
            url: "{{ route('load-product-model', ':productId') }}".replace(':productId', productId),
            beforeSend: function() {
                $('.overlay').addClass('active');
            },
            success: function(response) {
                $(".load-model-body").html(response)
                $('#cartModal').modal('show')
            },
            error: function(xhr, status, error) {
                console.error(error);
            },
            complete: function() {
                $('.overlay').removeClass('active')
            }

        })
    }
</script>
