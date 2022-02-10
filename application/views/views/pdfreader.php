 <?php include_once'includes/header.php'; ?>
<style>
.price,.rating{ display:none}
.single-product-box .product-content {
    padding: 5px 0 0 0;
}
.single-product-box .product-content h3 {
    padding: 0 0 3px 0;
}
</style>
        <!-- Start Page Title Area -->
        
        <!-- End Page Title Area -->

        <!-- Start Shop Area -->
        <section class="shop-area ptb-100">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                           <h2><?=ucfirst($book->title)?></a></h2>
                        </div>
                    </div>
                </div>
            
                <div class="woocommerce-topbar">
                    <div class="row align-items-center">
                        

                        
                    </div>
                </div>

                <div class="row">
                
                <iframe src="http://docs.google.com/viewer?url=<?=base_url().$book->bookfile?>&embedded=true"  height="480" style="border: none; width:100%"></iframe>
                </div>
            </div>
            
            <div class="row">
               <h2>Explore Related books</h2>
                <?php
				if($books->num_rows()>0){
					foreach($books->result() as $book){
				 ?>
                    <div class="col-md-3 col-xs-6">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="single-product.php">
                                    <img src="<?=$book->image?>" style="height:300px; width:100%" alt="image">
                                    <img src="<?=$book->image?>" style="height:300px; width:100%" alt="image">
                                </a>
 <?php
						
							
							if($this->session->userdata('userlogin')==1){
								
							?>
                                <a href="<?=$book->bookfile?>" download class="add-to-cart-btn">Download <i class='bx bx-download'></i></a>
                                <?php } ?>
                                
                            </div>

                            <div class="product-content">
                                <h3><a ><?=$book->title?></a>
                                
                                </h3>
                              
                                <div class="col-xs-12">
                                <a class="btnread btn"  href="page/pdfreader/<?=base64_encode($book->id)?>"  class="add-to-cart-btn">Read Book <i class='bx bx-book-open'></i></a>
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
                    
<?php } ?>
                    </div>
        </section>
        <!-- End Shop Area -->

      
       <?php include_once'includes/footer.php'; ?>
