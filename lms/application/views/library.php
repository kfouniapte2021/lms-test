 <?php include_once'includes/header.php'; ?>
<style>
.price,.rating{ display:none}
.single-product-box .product-content {
    padding: 5px 0 0 0;
}
.single-product-box .product-content h3 {
    padding: 0 0 3px 0;
}

.btnread{color:#000; float:right}
.btnread:hover{ color:#06F !important;}
</style>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Library</li>
                    </ul>
                    <h2>Download books for free</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Shop Area -->
        <section class="shop-area ptb-100">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Explore top books</h2>
                        </div>
                    </div>
                </div>
             <p>One of the largest and most authoritative collections of online journals, books, and research resources, covering life, health, social, and physical sciences.</p>
                <div class="woocommerce-topbar">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 hidden">
                            <div class="topbar-result-count">
                                <p>Showing 1 – 6 of 54</p>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="topbar-ordering-and-search">
                                <div class="row align-items-center">
                                
                                    <div class="col-lg-3 col-md-5 offset-lg-4 offset-md-1 col-sm-6 hidden">
                                        <div class="topbar-ordering">
                                            <select>
                                                <option>Sort by popularity</option>
                                                <option>Sort by latest</option>
                                                <option>Default sorting</option>
                                                <option>Sort by rating</option>
                                                <option>Sort by new</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6 col-sm-6 hidden ">
                                    
                                        <div class="topbar-search ">
                                            <form>
                                                <label><i class="bx bx-search"></i></label>
                                                <input type="text" class="input-search" placeholder="Search here...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
               
                <?php
				if($books->num_rows()>0){
					foreach($books->result() as $book){
				 ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="<?=$book->image?>" alt="image">
                                    <img src="<?=$book->image?>" alt="image">
                                </a>

                                <a href="<?=$book->bookfile?>" download class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                                
                            </div>

                            <div class="product-content">
                                <h3><a ><?=$book->title?></a>
                                <a class="btnread"  href="page/pdfreader/<?=base64_encode($book->id)?>"  class="add-to-cart-btn">Read Book <i class='bx bx-book-open'></i></a>
                                </h3>
                              
                                <div class="row">
                                
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                             
                        </div>
                        
                    </div>
<?php }}else { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="public/img/shop/2.jpg" alt="image">
                                    <img src="public/img/shop/2-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>

                                <div class="sale-btn">Sale!</div>
                            </div>

                            <div class="product-content">
                                <h3><a href="single-product.php">Book Chicks</a></h3>

                                <div class="price">
                                    <span class="old">$652.50</span>
                                    <span class="new">$541.50</span>
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="public/img/shop/3.jpg" alt="image">
                                    <img src="public/img/shop/3-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                            </div>

                            <div class="product-content">
                                <h3><a href="single-product.php">Book Divas</a></h3>

                                <div class="price">
                                    <span class="new">$140.50</span>
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="public/img/shop/4.jpg" alt="image">
                                    <img src="public/img/shop/4-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                            </div>

                            <div class="product-content">
                                <h3><a href="single-product.php">Book Smart</a></h3>

                                <div class="price">
                                    <span class="old">$600.00</span>
                                    <span class="new">$547.00</span>
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="public/img/shop/5.jpg" alt="image">
                                    <img src="public/img/shop/5-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                            </div>

                            <div class="product-content">
                                <h3><a href="single-product.php">Book Broads</a></h3>

                                <div class="price">
                                    <span class="new">$655.50</span>
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="public/img/shop/6.jpg" alt="image">
                                    <img src="public/img/shop/6-1.jpg" alt="image">
                                </a>

                                <a href="#" class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                            </div>

                            <div class="product-content">
                                <h3><a href="single-product.php">Page Turners</a></h3>

                                <div class="price">
                                    <span class="new">$415.00</span>
                                </div>

                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 hidden">
                        <div class="pagination-area text-center">
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Area -->

      
       <?php include_once'includes/footer.php'; ?>
