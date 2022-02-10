<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
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
                        <li><a href="edit-address.php" class="active"><i class='bx bx-home-alt'></i> Addresses</a></li>
                        <li><a href="edit-account.php"><i class='bx bx-edit'></i> Account Details</a></li>
                        <li><a href="#"><i class='bx bx-log-out'></i> Logout</a></li>
                    </ul>
                </div>

                <div class="myAccount-content">
                    <form class="edit-account">
                        <h3>Billing Address</h3>

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

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Company name (optional)</label>
                                    <input type="text" class="form-control" value="ET">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Country <span class="required">*</span></label>
                                    <select>
                                        <option>Belgium</option>
                                        <option>Brazil</option>
                                        <option>France</option>
                                        <option>Hong Kong</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="3774 Joy Lane">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="Los Angeles">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Postcode <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="90071">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" value="3108696134">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" class="form-control" value="hello@jamesanderson.com">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><i class='bx bx-save icon-arrow before'></i><span class="label">Save Address</span><i class="bx bx-save icon-arrow after"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

   <?php include_once'includes/footer.php'; ?>