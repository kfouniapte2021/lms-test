<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>
                        <li>Edit</li>
                    </ul>
                    <h2>My Account</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start My Account Area -->
        <section class="my-account-area ptb-100">
            <div class="container">
                <div class="myAccount-navigation">
                    <ul>
                        <li><a href="my-account.php"><i class='bx bxs-dashboard'></i> Dashboard</a></li>
                        <li><a href="orders.php"><i class='bx bx-cart'></i> Orders</a></li>
                        <li><a href="downloads.php"><i class='bx bx-download'></i> Downloads</a></li>
                        <li><a href="edit-address.php"><i class='bx bx-home-alt'></i> Addresses</a></li>
                        <li><a href="edit-account.php" class="active"><i class='bx bx-edit'></i> Account Details</a></li>
                        <li><a href="#"><i class='bx bx-log-out'></i> Logout</a></li>
                    </ul>
                </div>

                <div class="myAccount-content">
                    <form class="edit-account">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="James">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="Anderson">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Display name <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="JamesET">
                                    <span><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" class="form-control" value="hello@jamesanderson.com">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <legend>Password Change</legend>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Current password (leave blank to leave unchanged)</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>New password (leave blank to leave unchanged)</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Save Changes</span><i class="bx bx-save icon-arrow after"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

      <?php include_once'includes/footer.php'; ?>