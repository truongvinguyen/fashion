@if(Session::has('cart') != null)
  

<div class="header-cart-content flex-w js-pscroll">
    <ul class="header-cart-wrapitem w-full">
         @foreach(Session::get('cart')->products as $item) 
        <li class="header-cart-item flex-w flex-t m-b-12">
            <div class="header-cart-item-img">
                <img src="/upload/product/{{$item['productInfo']->product_image}}" alt="IMG">
                
            </div>

            <div class="header-cart-item-txt p-t-8">
                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                    {{$item['productInfo']->product_name}}
                </a>

                <span class="header-cart-item-info">
                  {{number_format($item['productInfo']->product_price)}} x {{$item['quanty']}}
                </span>
            </div>
            <a href="javascript:" class="delete-item-cart" data-id="{{$item['productInfo']->id}}">X</a>
        </li>
         @endforeach

    </ul>
    
    <div class="w-full">
        <div class="header-cart-total w-full p-tb-40">
            Tổng tiền :  {{number_format(Session::get('cart')->totalPrice)}} VNĐ
        </div>
        <input hidden id="totalQty" type="number" value="{{Session::get('cart')->totalQty}}">

        <div class="header-cart-buttons flex-w w-full">
            <a href="/view-cart"
                class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                View Cart
            </a>

           
            <?php
                          $customer_id = Session::get('customer_id');
                          $shipping_id = Session::get('shipping_id');
                          if($customer_id !=null && $shipping_id ==null){  
                        ?>
                        <a href="/checkout"
								class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
								Thanh toán
						</a>
                        <?php
                          }elseif($customer_id !=null && $shipping_id !=null){
                        ?>
                      <a href="/payment"
								class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
								Thanh toán
						</a>
                        <?php
                          }else{
                        ?>
                          <a href="/login-checkout"
								class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
								Thanh toán
						</a>
                        <?php
                          }
                        ?>
        </div>
    </div>
</div>
@endif