@if(Session::has('cart') != null)
<div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
    <div class="m-l-25 m-r--38 m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1">Sản phẩm</th>
                    <th class="column-2"></th>
                    <th class="column-3">giá</th>
                    <th class="column-4">số lượng</th>
                    <th class="column-5">tổng tiền</th>
                    <th class="column-5">Hành động</th>
                </tr>
                @foreach(Session::get('cart')->products as $item)
                <tr class="table_row">
                    <td class="column-1">
                        <div class="how-itemcart1">
                            <img src="/upload/product/{{$item['productInfo']->product_image}}" alt="IMG">
                        </div>
                    </td>
                    <td class="column-2"> {{$item['productInfo']->product_name}}</td>
                    <td class="column-3">{{number_format($item['productInfo']->product_price)}}</td>
                    <td class="column-4">
                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                <i class="fs-16 zmdi zmdi-minus"></i>
                            </div>

                            <input id="quanty-item-{{$item['productInfo']->id}}"
                                class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1"
                                value="{{$item['quanty']}}">

                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                <i class="fs-16 zmdi zmdi-plus"></i>
                            </div>
                        </div>
                    </td>
                    <td class="column-5">{{number_format($item['price'])}} VNĐ</td>
                    <td class="column-5"><a href="javascript:" class="btn "
                            onclick="deleteListItem({{$item['productInfo']->id}})"><i class="fa fa-times"></i></a>
                        <a href="javascript:" onclick="upDateCart({{$item['productInfo']->id}})" class="btn "><i
                                class="fa fa-save"></i></a>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>


    </div>
</div>
<div class="col-xl-7"></div>
<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63  m-lr-0-xl p-lr-15-sm">
        <h4 class="mtext-109 cl2 p-b-30">
            Thanh toán
        </h4>

        <div class="flex-w flex-t bor12 p-b-13">
            <div class="size-208">
                <span class="stext-110 cl2">
                    Tổng thanh toán
                </span>
            </div>

            <div class="size-209">
                <span class="mtext-110 cl2">
                    {{number_format(Session::get('cart')->totalPrice)}} VNĐ
                </span>
            </div>
        </div>





        <div class="row">
            <a class="col-md-5 btn bg-dark text-white" href="">Thanh toán</a>
            <div class="col-md-1"></div>
            <a class="col-md-5 btn bg-dark text-white" href="/san-pham">Tiếp tục mua sắm</a>
           </div>
    </div>
</div>
@endif