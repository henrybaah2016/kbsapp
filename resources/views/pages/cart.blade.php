@extends('layout.app')

@section('content')

<!-- Breadcrumb Area start -->
<section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Cart</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- cart area start -->
            <div class="cart-main-area mtb-60px">
                <div class="container">
                    <h3 class="cart-page-title">Your cart items</h3>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Until Price</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/1.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">₵60.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">₵70.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/2.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">₵50.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">₵80.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#"><img src="assets/images/product-image/mini-cart/3.jpg" alt="" /></a>
                                                </td>
                                                <td class="product-name"><a href="#">Product Name</a></td>
                                                <td class="product-price-cart"><span class="amount">₵70.00</span></td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">₵90.00</td>
                                                <td class="product-remove">
                                                    <a href="#"><i class="fa fa-pencil-alt"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="#">Continue Shopping</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button>Update Shopping Cart</button>
                                                <a href="#">Clear Shopping Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="cart-tax">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                        </div>
                                        <div class="tax-wrapper">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <div class="tax-select-wrapper">
                                                <div class="tax-select">
                                                    <label>
                                                        *Region
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Bono East Region</option>
                                                        <option>Ahafo Region</option>
                                                        <option>Bono Region</option>
                                                        <option>North East Region</option>
                                                        <option>Western North Region</option>
                                                        <option>Western Region</option>
                                                        <option>Volta Region</option>
                                                        <option>Greater Accra Region</option>
                                                        <option>Eastern Region</option>
                                                        <option>Ashanti Region</option>
                                                        <option>Central Region</option>
                                                        <option>Northern Region</option>
                                                        <option>Upper East Region</option>
                                                        <option>Upper West Region</option>
                                                        <option>Oti Region</option>
                                                        <option>Savannah Region</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select">
                                                    <label>
                                                        * Region / City
                                                    </label>
                                                    <select class="email s-email s-wid">
                                                        <option>Dambai</option>
                                                        <option>Techiman</option>
                                                        <option>Goaso</option>
                                                        <option>Sunyani</option>
                                                        <option>Nalerigu</option>
                                                        <option>Damango</option>
                                                        <option>Sefwi Wiawso</option>
                                                        <option>Sekondi</option>
                                                        <option>Ho</option>
                                                        <option>Accra</option>
                                                        <option>Koforidua</option>
                                                        <option>Kumasi</option>
                                                        <option>Cape Coast</option>
                                                        <option>Tamale</option>
                                                        <option>Bolgatanga</option>
                                                        <option> Wa</option>
                                                    </select>
                                                </div>
                                                <div class="tax-select mb-25px">
                                                    <label>
                                                        * Zip/Postal Code
                                                    </label>
                                                    <input type="text" />
                                                </div>
                                                <button class="cart-btn-2" type="submit">Get A Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="discount-code-wrapper">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                        </div>
                                        <div class="discount-code">
                                            <p>Enter your coupon code if you have one.</p>
                                            <form>
                                                <input type="text" required="" name="name" />
                                                <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="grand-totall">
                                        <div class="title-wrap">
                                            <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                        </div>
                                        <h5>Total products <span>₵260.00</span></h5>
                                        <div class="total-shipping">
                                            <h5>Total shipping</h5>
                                            <ul>
                                                <li><input type="checkbox" /> Standard <span>₵20.00</span></li>
                                                <li><input type="checkbox" /> Express <span>₵30.00</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="grand-totall-title">Grand Total <span>₵260.00</span></h4>
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart area end -->

@endsection