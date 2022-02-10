<?php include_once'includes/header.php'; ?>
        <!-- Start Cart Area -->
		<section class="cart-area ptb-100">
            <div class="container">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="public/img/shop/1.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Novel Bunch</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$455.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$455.00</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="public/img/shop/2.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Book Chicks</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$541.50</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$541.50</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="public/img/shop/3.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Book Divas</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$140.50</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$140.50</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="public/img/shop/4.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">Book Smart</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">$547.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">$547.00</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                <a href="#" class="default-btn"><i class='bx bx-cart icon-arrow before'></i><span class="label">Update Cart</span><i class="bx bx-cart icon-arrow after"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>$1683.50</span></li>
                            <li>Shipping <span>$30.00</span></li>
                            <li>Total <span>$1713.50</span></li>
                        </ul>
                        
                        <a href="#" class="default-btn"><i class='bx bx-shopping-bag icon-arrow before'></i><span class="label">Proceed to Checkout</span><i class="bx bx-shopping-bag icon-arrow after"></i></a>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Cart Area -->
<?php include_once'includes/footer.php'; ?>