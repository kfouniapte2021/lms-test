 <?php include_once'includes/header.php'; ?>
<style>
.price,.rating{ display:none}
.single-product-box .product-content {
    padding: 5px 0 0 0;
}
.single-product-box .product-content h3 {
    padding: 0 0 3px 0;
}
.single-product-box .product-content h3 {
    padding: 0 0 3px 0;
}

.btnread{
   padding: 5px 5px !important;
    width: 80%;
    margin: 0 0 12px 0;
	}
.single-product-box .product-content h3 {
    padding: 0;
    margin: 0;
    font-size: 15px;
    font-weight: normal;
    text-transform: uppercase;
}
.product-image a img {
    max-height: 150px;
    width: 100%;
}
</style>
        <!-- Start Page Title Area -->
        
        <!-- End Page Title Area -->

        <!-- Start Shop Area -->
        <section class="shop-area ptb-100">
            <div class="container">
            <br>
            <center><h2><?=ucfirst($book->title)?></a></h2></center>
                

                <div class="row">
                
                <iframe src="https://docs.google.com/viewer?url=<?=base_url().$book->bookfile?>&embedded=true"  height="480" style="border: none; width:100%"></iframe>
                </div>
               <hr>
                 <center><h2>Related books</h2></center>
                <div class="row">
               
                <?php
				if($books->num_rows()>0){
					foreach($books->result() as $book){
				 ?>
                    <div class="col-md-3 col-xs-3">
                        <div class="single-product-box mb-30">
                            <div class="product-image">
                                <a href="page/pdfreader/<?=base64_encode($book->id)?>">
                                    <img src="<?=$book->image?>" class="img-responsive" alt="image">
                                    <img src="<?=$book->image?>"  class="img-responsive" alt="image">
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
                    <h2>No book found!</h2>
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
          
        
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <!-- End Shop Area -->

      
       <?php include_once'includes/footer.php'; ?>
