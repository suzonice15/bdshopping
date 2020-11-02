


    <?php foreach ( $products->unique('product_name') as $product) {

    if ($product->discount_price) {
        $sell_price = $product->discount_price;
    } else {
        $sell_price = $product->product_price;
    }

    ?>
    <li class="col-sm-2">
        <div class="pro-box">
            <div class="img-box">
                <div class="add-btn-box"><a href="javascript:void(0)" class="add_to_cart"
                                            data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}">
                        <i class="fa fa-shopping-cart"></i> Add to Cart </a> <a
                            href="javascript:void(0)" class="buy_now"  data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}">Order Now</a>
                </div>
                <a href="{{ url('/') }}/{{$product->product_name}}"> <img
                            src="{{ url('/public/uploads') }}/{{ $product->folder }}/thumb/{{ $product->feasured_image }}"
                            alt="{{ $product->product_title }}"> </a></div>
            <div class="pro-desc">
                <div class="pro-name"><a
                            href="{{ url('/') }}/{{$product->product_name}}"> {{ $product->product_title }}</a></div>
                <div class="clearfix">
                    <div class="price bn"> ৳ 850.00</div>
                </div>
            </div>
        </div>
    </li>


    <?php  }?>
