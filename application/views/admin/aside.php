<aside class="main-sidebar">
<style>

</style>
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

<li class="<?=getActive('dashboard')?>"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="<?=getActive('batch_management')?>"><a  href="batch_management"><i class="fa fa-book"></i> <span>Batch management</span></a></li>
                <li class="<?=getActive('classes')?>"><a  href="classes"><i class="fa fa-book"></i> <span>Classes</span></a></li>
             <li class="<?=getActive('registration_pricing')?>"><a  href="registration_pricing"><i class="fa fa-book"></i> <span>Registration Form</span></a></li>
           <li class="<?=getActive('send_notifications')?>"><a  href="send_notifications"><i class="fa fa-bell"></i> <span>Send Notifications</span></a></li>
           
           <li class="<?=getActive('course')?>"><a  href="course"><i class="fa fa-video-camera"></i> <span>Courses Management </span></a></li>
           
           
          <li class="<?=getActive('event')?>"><a  href="event"><i class="fa fa-list"></i> <span>Event Management </span></a></li>
            
            
            <li class="<?=getActive('librarymanagement')?> "><a href="librarymanagement"><i class="fa fa-book"></i> <span>Library</span></a></li>
            <li class="<?=getActive('bookcategories')?> "><a href="bookcategories"><i class="fa fa-book"></i> <span>Book categories</span></a></li>
            
            <li class="<?=getActive('membership_plans')?> "><a  href="membership_plans"><i class="fa fa-money"></i> <span>Membership Plans</span></a></li>
            
            <li class="treeview">
            
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Users Management</span>
                        <span class="pull-right-container">
               	 <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url();?>auth/view_users"><i class="fa fa-user"></i> <span>Students</span></a></li>
                         <li class="<?=getActive('staff')?>"><a href="staff"><i class="fa fa-user"></i> <span>Staff</span></a></li>
                        <li class="<?=getActive('admins')?>"><a href="auth/admins"><i class="fa fa-user"></i> <span>Admins</span></a></li> 
                        <li class="<?=getActive('create_user')?>"><a data-toggle="tooltip"   title="Create account for admin, trainer and user " href="auth/create_user"><i class="fa fa-user"></i> <span>Create Account</span></a></li>
                        
                    </ul>

                </li>
        <!--user end -->
                
            
                
              <li class="treeview hidden">

                    <a href="#">

                        <i class="fa fa-laptop"></i>

                        <span>Slider Management</span>

                        <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

                    </a>

                    <ul class="treeview-menu">

                        <li><a href="slider"><i class="fa fa-list"></i> <span>Slider</span></a></li>

                        <li><a href="slider/add"><i class="fa fa-list"></i> <span>Add slider</span></a></li>

                    </ul>

                </li>

               <li class="<?=getActive('cms')?> "><a href="blogpost"><i class="fa fa-th"></i> <span>Blogs</span></a></li>
                
                <li class="<?=getActive('cms')?> "><a href="cms"><i class="fa fa-list"></i> <span>CMS Pages</span></a></li>
<?php /*?>                 <li><a href="imageurl"><i class="fa fa-th"></i> <span> Get Image URL</span></a></li>
                  

                <li><a href="teams"><i class="fa fa-users"></i> <span>Team</span></a></li>
                <li><a href="pressRelease"><i class="fa fa-th"></i> <span>News </span></a></li>

                <li class="hidden"><a href="product"><i class="fa fa-list"></i> <span>Products</span></a></li>

                <li><a href="faqs"><i class="fa fa-search"></i> <span>Faqs</span></a></li>
<?php */?>
                <li  class="<?=getActive('testimonial')?> "><a href="testimonial"><i class="fa fa-th"></i> <span> Testimonial</span></a></li>

                <li  class="<?=getActive('subscribers')?> "><a href="subscribers"><i class="fa fa-users"></i> <span>Subscribers</span></a></li>

                <li  class="<?=getActive('setting/edit')?>"><a href="setting/edit"><i class="fa fa-pencil"></i> <span>Setting</span></a></li>

                

<!--<li><a href="extras" ><i class="fa fa-th"></i> <span>Extras</span></a></li>

<li ><a href="order" ><i class="fa fa-th"></i> <span>Order</span></a></li>

<li><a href="order/completed" ><i class="fa fa-th"></i> <span>completed Order</span></a></li>

<li><a href="slider"  ><i class="fa fa-th"></i> <span>Slider</span></a></li>

<li><a href="urls" ><i class="fa fa-th"></i> <span>Urls</span></a></li>

<li><a href="coupon" ><i class="fa fa-th"></i> <span>Coupon</span></a></li> -->

        </ul>

    </section>

    <!-- /.sidebar -->

</aside>