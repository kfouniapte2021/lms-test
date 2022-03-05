<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>
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
                    <p>The following addresses will be used on the checkout page by default.</p>

                    <div class="myAccount-addresses">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="addresses-title">
                                    <h3>Billing address</h3>
                                    <a href="edit-billing-address.php" class="edit">Edit</a>
                                </div>
                                <address>
                                    James Anderson
                                    <br>
                                    ET
                                    <br>
                                    3774 Joy Lane
                                    <br>
                                    Los Angeles, CA 90071
                                </address>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="addresses-title">
                                    <h3>Shipping address</h3>
                                    <a href="edit-shipping-address.php" class="edit">Add</a>
                                </div>
                                <address>You have not set up this type of address yet.</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->
<?php include_once'includes/footer.php'; ?>