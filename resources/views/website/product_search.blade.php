

    <div class="container remove_class">
        <div class="row row5 mt30">
            <div id="load_data">


                                            <span id="post-data">
                                                 <ul class="products row row5 mt30">
                                                     <div class="col-sm-12">




                                                         <?php if($products) {  ?>


                                                         @foreach($products as $product)

                                                             <?php
                                                             if ($product->discount_price) {
                                                                 $sell_price = $product->discount_price;
                                                             } else {
                                                                 $sell_price = $product->product_price;
                                                             }
                                                             ?>


                                                             <li style="list-style:none" class="col-xs-6 col-sm-2">
                                                                 <div class="pro-box">
                                                                     <div class="img-box">

                                                                         <div class="imgbox_overflwoe">
                                                                             <a href="javascript:void(0)" class="add_to_wish_list" data-product_id="2330 "
                                                                                title="Wishlist">&nbsp;</a><a
                                                                                     href="{{ url('/')}}/{{$product->product_name}}">
                                                                                 <img src="{{ url('/public/uploads') }}/{{ $product->folder }}/thumb/{{ $product->feasured_image }}"
                                                                                      style="height: 180px;" alt="Dhaka Bazar Product">
                                                                             </a>
                                                                         </div>
                                                                     </div>
                                                                     <div class="pro-desc">
                                                                         <div class="pro-name">
                                                                             <a href="{{ url('/')}}/{{$product->product_name}}">{{$product->product_title}}</a>
                                                                         </div>
                                                                         <div class="clearfix">
                                                                             <h5>Code:{{$product->sku}}</h5>
                                                                             <div class="price"> <?php
                                                                                 if($product->discount_price){


                                                                                 ?>
                                                                                 <del>   @money($product->product_price)</del>

                                                                                 <?php } ?> @money($sell_price)</div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="add-btn-box">
                                                                         <a href="javascript:void(0)" class="add_to_cart" data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}">
                                                                             <span>Add to </span>Cart
                                                                         </a>
                                                                         <a href="javascript:void(0)" class="buy_now" data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}">
                                                                             Order<span> Now</span>
                                                                         </a></div>
                                                                 </div>
                                                             </li>

                                                         @endforeach


                                                         <?php } ?>


                                                     </div>
                                                 </ul>
                                            </span>


            </div>

        </div>
    </div>
