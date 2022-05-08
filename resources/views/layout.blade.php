<div class="wrap-menu-desktop bg-light">
	<nav class="limiter-menu-desktop container">

		<!-- Logo desktop -->
		<a href="#" class="logo">
			<img src="images/icons/logo-01.png" alt="IMG-LOGO">
		</a>

		<!-- Menu desktop -->
		<div class="menu-desktop">
			<ul class="main-menu">
				<li class="">
					<a href="/">Trang chủ</a>
					<ul class="sub-menu">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
				</li>

				<li>
					<a href="/san-pham">Sản phẩm</a>
				</li>

				<li class="label1" data-label1="hot">
					<a href="shoping-cart.html">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
				<i class="zmdi zmdi-search"></i>
			</div>

			<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
						
						</div>
						<a  href="#" class="text-dark js-show-cart" style="display: -webkit-box;
						display: -moz-box;
						display: -ms-flexbox;
						display: -webkit-flex;
						display: flex;
						
						flex-direction: column;
						font-size: 20px;
						justify-content: center;
						align-items: center;
						position: relative;
						width: 40px;
						height: 40px;
						color: #1e1e27;
						-webkit-transition: color 0.3s ease;
						-moz-transition: color 0.3s ease;
						-ms-transition: color 0.3s ease;
						-o-transition: color 0.3s ease;
						transition: color 0.3s ease;">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							@if(Session::has('cart') != null)
							<span id="totalQty-show"  class="checkout_items" style="display: -webkit-box;
							display: -moz-box;
							display: -ms-flexbox;
							display: -webkit-flex;
							display: flex;
							flex-direction: column;
							justify-content: center;
							align-items: center;
							position: absolute;
							top: -9px;
							left: 22px;
							width: 20px;
							height: 20px;
							border-radius: 50%;
							background: #fe4c50;
							font-size: 12px;
							color: #FFFFFF;">{{Session::get("cart")->totalQty}}</span>
							@else
							<span id="totalQty-show"  class="checkout_items" style="display: -webkit-box;
							display: -moz-box;
							display: -ms-flexbox;
							display: -webkit-flex;
							display: flex;
							flex-direction: column;
							justify-content: center;
							align-items: center;
							position: absolute;
							top: -9px;
							left: 22px;
							width: 20px;
							height: 20px;
							border-radius: 50%;
							background: #fe4c50;
							font-size: 12px;
							color: #FFFFFF;">0</span>
							@endif
						</a>
					</div>

			<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
				data-notify="0">
				<i class="zmdi zmdi-favorite-outline"></i>
			</a>
		</div>
	</nav>
</div>