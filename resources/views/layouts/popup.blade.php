<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
<form action="" id="model-add-to-cart-data">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="fp__cart_popup_img">
        <img src="{{ $product->thum_image }}" alt="menu" class="img-fluid w-100">
    </div>
    <div class="fp__cart_popup_text">
        <a href="#" class="title">{{ $product->name }}</a>
        <p class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
            <span>(201)</span>
        </p>
        @if ($product->offer_price > 0)
            <input type="hidden" name="basePrice" value="{{ $product->offer_price }}">
            <h4 class="price">${{ $product->offer_price }} <del>${{ $product->price }}</del> </h4>
        @else
            <input type="hidden" name="basePrice" value="{{ $product->price }}">
            <h4 class="price">${{ $product->price }} </h4>
        @endif
        {{-- @if ($product->productOptions()->exists())
            <div class="details_extra_item">
                <h5>select option <span>(optional)</span></h5>
                @foreach ($product->productOptions as $productOptions)
                    <div class="form-check">
                        <input class="form-check-input" name="productOption[]" type="checkbox"
                            data-payment="{{ $productOptions->price }}" id="option-{{ $productOptions->id }}">
                        <label class="form-check-label" for="option-{{ $productOptions->id }}">
                            {{ $productOptions->option }} <span>+ ${{ $productOptions->price }} </span>
                        </label>
                    </div>
                @endforeach

            </div>
        @endif --}}

        @if ($product->productSizes()->exists())
            <div class="details_size">
                <h5>select size</h5>
                @foreach ($product->productSizes as $productSizes)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="{{ $productSizes->id }}"
                            name="productSize" data-price="{{ $productSizes->prize }}"
                            id="size-{{ $productSizes->id }}">
                        <label class="form-check-label" for="size-{{ $productSizes->id }}">
                            {{ $productSizes->size }} <span>+ ${{ $productSizes->prize }}</span>
                        </label>
                    </div>
                @endforeach



            </div>
        @endif



        <div class="details_quentity">
            <h5>select quentity</h5>
            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                <div class="quentity_btn">
                    <button class="btn btn-danger decreament"><i class="fal fa-minus"></i></button>
                    <input type="text" placeholder="1" value="1" name="quantity" id="quantity">
                    <button class="btn btn-success increament"><i class="fal fa-plus"></i></button>
                </div>
                @if ($product->offer_price > 0)
                    <h3 id="totalprice">${{ $product->offer_price }}</h3>
                @else
                    <h3 id="totalprice">${{ $product->price }}</h3>
                @endif

            </div>
        </div>
        <ul class="details_button_area d-flex flex-wrap">
            {{-- <li><a class="common_btn" href="#">add to cart</a></li> --}}
            <li><button class="common_btn" type="submit">add to cart</button></li>
        </ul>
    </div>
</form>
<script>
    $(document).ready(function() {
        $('input[name="productSize"]').on('change', function() {
            updateTotalPrice();
        });
        $('.increament').on('click', function(e) {
            e.preventDefault()
            let quantity = $('#quantity');
            let currentQuantity = parseFloat(quantity.val())
            quantity.val(currentQuantity + 1)
            updateTotalPrice();

        })
        $('.decreament').on('click', function(e) {
            e.preventDefault()
            let quantity = $('#quantity');
            let currentQuantity = parseFloat(quantity.val())
            if (currentQuantity > 1) {
                quantity.val(currentQuantity - 1)
            }
            updateTotalPrice();

        })

        function updateTotalPrice() {
            let basePrice = parseFloat($('input[name="basePrice"]').val());
            let SelectedSizePrice = 0;
            // let SelectedOptionPrice = 0;
            let quantityValue = 0;
            // let selectedOption = $('input[name="productOption[]"]:checked');
            // $(selectedOption).each(function() {
            //     SelectedOptionPrice += parseFloat($(this).data("payment"));

            // })
            let selectedSize = $('input[name="productSize"]:checked');
            if (selectedSize.length > 0) {

                SelectedSizePrice = parseFloat(selectedSize.data("price"));
            }
            let quantity = $('#quantity')
            quantityValue = quantity.val();




            let totalPrice = (basePrice + SelectedSizePrice) * quantityValue;
            $('#totalprice').text(totalPrice)
        }
        $('#model-add-to-cart-data').on('submit', function(e) {
            e.preventDefault();

            let selectedSize = $('input[name="productSize"]').val();
            if (selectedSize === undefined) {
                toastr.error('please select Size')

                return;

            }
            let FormData = $(this).serialize();
            $.ajax({
                method: 'POST',
                url: '{{ route('add-to-cart') }}',
                data: FormData,
                success: function(response) {

                },
                error: function(xhr, status, error) {
                    let errorMessage = xhr.responseJSON.message
                    toastr.error(errorMessage)
                },


            })
        })
    })
</script>
