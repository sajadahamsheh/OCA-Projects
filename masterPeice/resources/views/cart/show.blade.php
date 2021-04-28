@extends('../mainSite/index2')
@section('content')
   	<!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Cart</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Cart</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>
		<!-- Breadcrumbs End -->

        <!-- Cart Page Start Here -->
        <div class="shipping-area sec-spacer mb-5">
			<div class="container">
				<div class="tab-content">
                    @if($cart)
				    <div class="tab-pane active" id="checkout">
                        <div class="row">
				            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="product-list">
                                    <table>
                                        @foreach( $cart->items as $course)
                                       
										<tr>
										<td>
										<form action="{{ route('courses.remove', $course['course_id'] )}}" method="post">
                                                @csrf
                                                @method('delete')
												
												  <button type="submit"  ><i class="fa fa-times"></i></button>
                                                

                                        </form>
										</td>
											<td><img src="images/{{$course['course_img']}}" alt=""/></td>
											<td>
												<div class="des-pro">
													<h4>{{$course['course_name']}}</h4>
												</div>
											</td>
											<td><strong>${{$course['course_price']}}</strong></td>
                                            <td>
												<div class="order-pro order1">
													<input type="number" value="01" />
												</div>
											</td>
											<td><span class="prize">$20.00</span></td>  
											
										</tr>
                                        @endforeach
									</table>							   
								</div><!-- .product-list end -->
							</div>
						</div>
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="order-list">
                                    
                                </div><!-- .order-list end -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="checkout-price order-list">
                                    <h3>Your Order</h3>
                                    <table>
                                        <tr>
                                            <td><b>Product</b></td>
                                            <td><b>Total</b></td>
                                        </tr>
                                        <tr class="row-bold">
                                            <td>Total Quantities</td>
                                            <td>{{$cart->totalQty}}</td>
                                        </tr>
                                        <tr class="row-bold">
                                            <td>Total Amount</td>
                                            <td>${{$cart->totalPrice}}</td>
                                            
                                        </tr>
                                    </table>
                                    <div class="next-step">
                                        <a href="{{ route('cart.checkout', $cart->totalPrice)}}">Proceeed to Checkout</a>
                                    </div>
                                </div><!-- .checkout-price end -->
                            </div>  
                        </div>
					</div>  
                    @else
                        <p>There are no items in the cart</p>

                    @endif                               
				</div>
			</div>
		</div>
        <!-- Cart Page End Here  -->


@endsection

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

