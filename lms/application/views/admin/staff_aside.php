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

            <li class="<?=getActive('dashboard')?>">><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
                <li class="hidden <?=getActive('course_quiz')?>">><a href="course_quiz"><i class="fa fa-th"></i> <span>Quiz & Grade</span></a></li>
                <li class="<?=getActive('enrolledstudents')?>">><a href="enrolledstudents"><i class="fa fa-users"></i> <span>Enrolled students </span></a></li>
                <li class="<?=getActive('teacher_assigned_courses')?>">><a href="teacher_assigned_courses"><i class="fa fa-book"></i> <span>Assigned Courses </span></a></li>
                
                
                  <li class="<?=getActive('librarymanagement')?> "><a href="librarymanagement"><i class="fa fa-book"></i> <span>Library</span></a></li>
                 
                  <li class="<?=getActive('uploadedbystaff')?>"><a href="uploadedbystaff"><i class="fa fa-user"></i> <span>My Books</span></a></li>
                  
                  
                  
                <li ><a href="auth/logout"><i class="fa 
fa-sign-out"></i> <span>Logout </span></a></li>
                
               
              



              <!--  <li><a href="blogpost"><i class="fa fa-th"></i> <span>Blogs</span></a></li>
                <li><a href="pressRelease"><i class="fa fa-th"></i> <span>News </span></a></li>

               
                <li><a href="subscribers"><i class="fa fa-users"></i> <span>Subscribers</span></a></li>

             -->   

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