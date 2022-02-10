<?php include_once'includes/header.php'; ?>
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>
                        <li>Downloads</li>
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
                        <li><a href="downloads.php" class="active"><i class='bx bx-download'></i> Downloads</a></li>
                        <li><a href="edit-address.php"><i class='bx bx-home-alt'></i> Addresses</a></li>
                        <li><a href="edit-account.php"><i class='bx bx-edit'></i> Account Details</a></li>
                        <li><a href="#"><i class='bx bx-log-out'></i> Logout</a></li>
                    </ul>
                </div>

                <div class="myAccount-content">
                    <div class="downloads-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Support Expires</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Novel Bunch</a></td>
                                    <td>April 15, 2020</td>
                                    <td><a href="#" class="downloads-button">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Book Chicks</a></td>
                                    <td>Never</td>
                                    <td><a href="#" class="downloads-button">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Book Divas</a></td>
                                    <td>April 16, 2020</td>
                                    <td><a href="#" class="downloads-button">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Book Smart</a></td>
                                    <td>April 17, 2020</td>
                                    <td><a href="#" class="downloads-button">Click Here</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Book Broads</a></td>
                                    <td>Never</td>
                                    <td><a href="#" class="downloads-button">Click Here</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

 <?php include_once'includes/footer.php'; ?>