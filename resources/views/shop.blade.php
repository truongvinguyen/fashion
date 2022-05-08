<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>mua sắm</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

	<!-- Styles -->
	<style>
		/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
		html {
			line-height: 1.15;
			-webkit-text-size-adjust: 100%
		}

		body {
			margin: 0
		}

		a {
			background-color: transparent
		}

		[hidden] {
			display: none
		}

		html {
			font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
			line-height: 1.5
		}

		*,
		:after,
		:before {
			box-sizing: border-box;
			border: 0 solid #e2e8f0
		}

		a {
			color: inherit;
			text-decoration: inherit
		}

		svg,
		video {
			display: block;
			vertical-align: middle
		}

		video {
			max-width: 100%;
			height: auto
		}

		.bg-white {
			--bg-opacity: 1;
			background-color: #fff;
			background-color: rgba(255, 255, 255, var(--bg-opacity))
		}

		.bg-gray-100 {
			--bg-opacity: 1;
			background-color: #f7fafc;
			background-color: rgba(247, 250, 252, var(--bg-opacity))
		}

		.border-gray-200 {
			--border-opacity: 1;
			border-color: #edf2f7;
			border-color: rgba(237, 242, 247, var(--border-opacity))
		}

		.border-t {
			border-top-width: 1px
		}

		.flex {
			display: flex
		}

		.grid {
			display: grid
		}

		.hidden {
			display: none
		}

		.items-center {
			align-items: center
		}

		.justify-center {
			justify-content: center
		}

		.font-semibold {
			font-weight: 600
		}

		.h-5 {
			height: 1.25rem
		}

		.h-8 {
			height: 2rem
		}

		.h-16 {
			height: 4rem
		}

		.text-sm {
			font-size: .875rem
		}

		.text-lg {
			font-size: 1.125rem
		}

		.leading-7 {
			line-height: 1.75rem
		}

		.mx-auto {
			margin-left: auto;
			margin-right: auto
		}

		.ml-1 {
			margin-left: .25rem
		}

		.mt-2 {
			margin-top: .5rem
		}

		.mr-2 {
			margin-right: .5rem
		}

		.ml-2 {
			margin-left: .5rem
		}

		.mt-4 {
			margin-top: 1rem
		}

		.ml-4 {
			margin-left: 1rem
		}

		.mt-8 {
			margin-top: 2rem
		}

		.ml-12 {
			margin-left: 3rem
		}

		.-mt-px {
			margin-top: -1px
		}

		.max-w-6xl {
			max-width: 72rem
		}

		.min-h-screen {
			min-height: 100vh
		}

		.overflow-hidden {
			overflow: hidden
		}

		.p-6 {
			padding: 1.5rem
		}

		.py-4 {
			padding-top: 1rem;
			padding-bottom: 1rem
		}

		.px-6 {
			padding-left: 1.5rem;
			padding-right: 1.5rem
		}

		.pt-8 {
			padding-top: 2rem
		}

		.fixed {
			position: fixed
		}

		.relative {
			position: relative
		}

		.top-0 {
			top: 0
		}

		.right-0 {
			right: 0
		}

		.shadow {
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
		}

		.text-center {
			text-align: center
		}

		.text-gray-200 {
			--text-opacity: 1;
			color: #edf2f7;
			color: rgba(237, 242, 247, var(--text-opacity))
		}

		.text-gray-300 {
			--text-opacity: 1;
			color: #e2e8f0;
			color: rgba(226, 232, 240, var(--text-opacity))
		}

		.text-gray-400 {
			--text-opacity: 1;
			color: #cbd5e0;
			color: rgba(203, 213, 224, var(--text-opacity))
		}

		.text-gray-500 {
			--text-opacity: 1;
			color: #a0aec0;
			color: rgba(160, 174, 192, var(--text-opacity))
		}

		.text-gray-600 {
			--text-opacity: 1;
			color: #718096;
			color: rgba(113, 128, 150, var(--text-opacity))
		}

		.text-gray-700 {
			--text-opacity: 1;
			color: #4a5568;
			color: rgba(74, 85, 104, var(--text-opacity))
		}

		.text-gray-900 {
			--text-opacity: 1;
			color: #1a202c;
			color: rgba(26, 32, 44, var(--text-opacity))
		}

		.underline {
			text-decoration: underline
		}

		.antialiased {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		.w-5 {
			width: 1.25rem
		}

		.w-8 {
			width: 2rem
		}

		.w-auto {
			width: auto
		}

		.grid-cols-1 {
			grid-template-columns: repeat(1, minmax(0, 1fr))
		}

		@media (min-width:640px) {
			.sm\:rounded-lg {
				border-radius: .5rem
			}

			.sm\:block {
				display: block
			}

			.sm\:items-center {
				align-items: center
			}

			.sm\:justify-start {
				justify-content: flex-start
			}

			.sm\:justify-between {
				justify-content: space-between
			}

			.sm\:h-20 {
				height: 5rem
			}

			.sm\:ml-0 {
				margin-left: 0
			}

			.sm\:px-6 {
				padding-left: 1.5rem;
				padding-right: 1.5rem
			}

			.sm\:pt-0 {
				padding-top: 0
			}

			.sm\:text-left {
				text-align: left
			}

			.sm\:text-right {
				text-align: right
			}
		}

		@media (min-width:768px) {
			.md\:border-t-0 {
				border-top-width: 0
			}

			.md\:border-l {
				border-left-width: 1px
			}

			.md\:grid-cols-2 {
				grid-template-columns: repeat(2, minmax(0, 1fr))
			}
		}

		@media (min-width:1024px) {
			.lg\:px-8 {
				padding-left: 2rem;
				padding-right: 2rem
			}
		}

		@media (prefers-color-scheme:dark) {
			.dark\:bg-gray-800 {
				--bg-opacity: 1;
				background-color: #2d3748;
				background-color: rgba(45, 55, 72, var(--bg-opacity))
			}

			.dark\:bg-gray-900 {
				--bg-opacity: 1;
				background-color: #1a202c;
				background-color: rgba(26, 32, 44, var(--bg-opacity))
			}

			.dark\:border-gray-700 {
				--border-opacity: 1;
				border-color: #4a5568;
				border-color: rgba(74, 85, 104, var(--border-opacity))
			}

			.dark\:text-white {
				--text-opacity: 1;
				color: #fff;
				color: rgba(255, 255, 255, var(--text-opacity))
			}

			.dark\:text-gray-400 {
				--text-opacity: 1;
				color: #cbd5e0;
				color: rgba(203, 213, 224, var(--text-opacity))
			}

			.dark\:text-gray-500 {
				--tw-text-opacity: 1;
				color: #6b7280;
				color: rgba(107, 114, 128, var(--tw-text-opacity))
			}
		}
	</style>

	<style>
		body {
			font-family: 'Nunito', sans-serif;
		}
	</style>
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="{{asset('fon-end/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="{{asset('fon-end/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/fonts/linearicons-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/css/modal.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/css/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fon-end/css/alert.css')}}">
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

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
					<!-- cart -->

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						@if(Session::has('customer_img') != null)
						<img src="/upload/product/{{Session::get('customer_img')}}" width="40px" height="40px"
							style="border-radius: 50px;margin-right: 10px;" alt="">
						@endif
						<?php
                          $customer_id = Session::get('customer_id');
                         
                          if($customer_id !=null){  
                        ?>

						<a href="/logout-checkout">Đăng xuất</a>
						<?php
                          }else{
                        ?>
						<a href="/login-checkout">Đăng nhập</a>
						<?php
                          }
                        ?>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">

						</div>
						<a href="#" class="text-dark js-show-cart" style="display: -webkit-box;
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
							<span id="totalQty-show" class="checkout_items" style="display: -webkit-box;
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
							<span id="totalQty-show" class="checkout_items" style="display: -webkit-box;
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
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->


			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
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

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="" method="post">
					@csrf
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
					<button type="submit">Tìm</button>
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>


			<div id="change-cart">
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
							Tổng tiền : {{number_format(Session::get('cart')->totalPrice)}} VNĐ
						</div>

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
			</div>



		</div>
	</div>


	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						<a href="/san-pham">Tất cả sản phẩm</a>
					</button>
					@foreach($category as $cat)
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						{{$cat->name_cat}}
					</button>
					@endforeach


				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div
						class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<form action="" method="get">
						@csrf
						<div class="bor8 dis-flex p-l-15">

							<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>

							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search_product"
								placeholder="Search">
							<input name="tim" type="submit" value="Tìm">

						</div>
					</form>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#"
									class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#"
									class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#"
									class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#"
									class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#"
									class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
				@foreach($product_all as $pd)

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="/upload/product/{{$pd->product_image}}" alt="IMG-PRODUCT">

							<a href="#" data-toggle="modal" data-target="#exampleModalCenter{{$pd->id}}"
								class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Xem nhanh
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$pd->product_name}}
								</a>

								<span class="stext-105 cl3">
									{{number_format($pd->product_price). ' VND'}}
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png"
										alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l"
										src="images/icons/icon-heart-02.png" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">

				

			</div>
		</div>
	</div>


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
						on (+1) 96 716 6879
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
								placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved |Made with <i
						class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com"
						target="_blank">ThemeWagon</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
												href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat
								ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number"
												name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button
											class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#"
										class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
										data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
									data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@foreach($product_all as $pdd )
	<div class="modal fade" id="exampleModalCenter{{$pdd->id}}" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close d-flex align-items-center justify-content-center"
						data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" class="fa fa-times text-dark"></span>
					</button>
				</div>
				<div class="row no-gutters">
					<div class="col-md-5 d-flex">
						<div class="modal-body p-5 img d-flex text-center d-flex align-items-center"
							style="background-image: url(/upload/product/{{$pdd->product_image}}); background-repeat: no-repeat repeat;">

						</div>
					</div>
					<div class="col-md-7 d-flex">
						<div class="modal-body p-4 p-md-5 d-flex align-items-center color-1">
							<div class="col-md-12 ">

								<!-- @csrf
								<input type="hidden" name="id_cart"  value="{{$pdd->id}}" class="product_id_{{$pdd->id}}">
								<input type="hidden" name="name_cart" value="{{$pdd->product_name}}" class="product_name_{{$pdd->id}}">
								<input type="hidden" name="img_cart" value="{{$pdd->product_image}}" class="product_image_{{$pdd->id}}">
								<input type="hidden" name="price_cart" value="{{$pdd->product_price}}" class="product_price_{{$pdd->id}}">
								<input type="hidden" name="qty" value="1" class="qty_{{$pdd->id}}"> -->

								<div class="small mb-1 text-dark">MÃ HÀNG: {{$pdd->id}}</div>
								<h3 class="display-5 fw-bolder text-dark">{{$pdd->product_name}}</h3>
								<div class="fs-5 mb-5">
									<h5 class="text-decoration-line-through text-danger">
										{{number_format($pdd->product_price). ' VND'}}</h5>
								</div>
								<p class="lead text-dark" style="margin-top:-30px;">{!! $pdd->product_content !!}</p>
								<div class="">
									<a onclick="addcart({{$pdd->id}})" class="btn btn-dark flex-shrink-0 add-cart"
										style="padding:10px;" href="javascript:">

										<i class="bi-cart-fill me-1"></i>
										Thêm vào giỏ hàng

									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('fon-end/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/select2/select2.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('fon-end/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('fon-end/js/slick-custom.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/parallax100/parallax100.js')}}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/isotope/isotope.pkgd.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('fon-end/js/main.js')}}"></script>

	<script>
		function addcart(id) {
			$.ajax({
				url: 'add-to-cart/' + id,
				type: 'GET',
			}).done(function (response) {
				renderCart(response);
				alertify.message('Thêm vào giỏ hàng thành công');
			});

		}
		$("#change-cart").on("click", ".delete-item-cart", function () {
			$.ajax({
				url: 'delete-cart/' + $(this).data("id"),
				type: 'GET',
			}).done(function (response) {
				renderCart(response);
				alertify.warning('Đã xóa sản phẩm');
			});
		});
		function renderCart(response) {
			$("#change-cart").empty();
			$("#change-cart").html(response);
			$("#totalQty-show").text($("#totalQty").val());

		}
	</script>


</body>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

</html>