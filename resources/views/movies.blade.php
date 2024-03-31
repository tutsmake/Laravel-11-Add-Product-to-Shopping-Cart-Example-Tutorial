@extends('main')
   
@section('content')
    
<div class="row">
    @foreach($movies as $movie)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <img src="{{ $movie->poster }}" alt="{{ $movie->name }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">{{ $movie->name }}</h4>
                    <p>{{ $movie->director }}</p>
                    <input type="hidden" class="product-quantity" value="1">
    <p class="btn-holder"><button class="btn btn-outline-danger add-to-cart" data-product-id="{{ $movie->id }}">Add to cart</button></p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('scripts')

<script type="text/javascript">
    $(".add-to-cart").click(function (e) {
        e.preventDefault();

        var productId = $(this).data("product-id");
        var productQuantity = $(this).siblings(".product-quantity").val();
        var cartItemId = $(this).data("cart-item-id");

        $.ajax({
            url: "{{ route('add-movie-to-shopping-cart') }}",
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}', 
                product_id: productId,
                quantity: productQuantity,
                cart_item_id: cartItemId
            },
            success: function (response) {
                $('#cart-quantity').text(response.cartCount);
                 alert('Cart Updated');
                console.log(response);
            },
            error: function (xhr, status, error) {
                // Handle errors (e.g., display an error message)
                console.error(xhr.responseText);
            }
        });
    });
</script>


@endsection