 <aside class="main-sidebar">

   <!-- sidebar: style can be found in sidebar.less -->

   <section class="sidebar">

     <!-- Sidebar user panel -->

     <div class="user-panel hidden">

       <div class="pull-left image">

         <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

       </div>

       <div class="pull-left info">

         <p>Alexander Pierce</p>

         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

       </div>

     </div>

     <!-- search form -->

     <form action="#" method="get" class="sidebar-form hidden">

       <div class="input-group">

         <input type="text" name="q" class="form-control" placeholder="Search...">

         <span class="input-group-btn">

           <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>

           </button>

         </span>

       </div>

     </form>

     <!-- /.search form -->

     <!-- sidebar menu: : style can be found in sidebar.less -->

     <ul class="sidebar-menu" data-widget="tree">

       <li class="header">MAIN NAVIGATION</li>



       <li>

         <a href="dashboard">

           <i class="fa fa-dashboard"></i> <span>Dashboard</span>



         </a>

       </li>
       <li><a href="<?= base_url() ?>"><i class="fa fa-th"></i> <span>Visit Site</span></a></li>
       <li class="<?= getActive('order') ?>"><a href="order"><i class="fa fa-th"></i> <span>All Order</span></a></li>
       <li class="<?= getActive('delivered') ?>"><a href="order/delivered"><i class="fa fa-th"></i> <span>Deliverd Order</span></a></li>
       <li class="<?= getActive('todayorder') ?>"><a href="order/todayorder"><i class="fa fa-th"></i> <span>Today's Order</span></a></li>
       <li class="<?= getActive('ads') ?>"><a href="ads"><i class="fa fa-th"></i> <span>Ads</span></a></li>
       <li class="<?= getActive('product') ?>"><a href="product"><i class="fa fa-th"></i> <span>Product</span></a></li>
       <li class="<?= getActive('offers_management') ?>"><a href="offers_management"><i class="fa fa-th"></i> <span>Offers Management</span></a></li>
       <li class="<?= getActive('offer_orders') ?>"><a href="offer_orders"><i class="fa fa-th"></i> <span>Offers Order</span></a></li>
       <li class="<?= getActive('offers_booking') ?>"><a href="offers_booking"><i class="fa fa-th"></i> <span>Booking</span></a></li>





       <!--        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>

        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>

-->
     </ul>

   </section>

   <!-- /.sidebar -->

 </aside>