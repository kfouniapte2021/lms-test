 <?php include_once'includes/header.php'; ?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>My Account</li>
                        <li>Orders</li>
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
                        <li><a href="orders.php" class="active"><i class='bx bx-cart'></i> Orders</a></li>
                        <li><a href="downloads.php"><i class='bx bx-download'></i> Downloads</a></li>
                        <li><a href="edit-address.php"><i class='bx bx-home-alt'></i> Addresses</a></li>
                        <li><a href="edit-account.php"><i class='bx bx-edit'></i> Account Details</a></li>
                        <li><a href="#"><i class='bx bx-log-out'></i> Logout</a></li>
                    </ul>
                </div>

                <div class="myAccount-content">
                    <div class="orders-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#074145O5</td>
                                    <td>October 18, 2019</td>
                                    <td>Completed</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                                <tr>
                                    <td>#074145O6</td>
                                    <td>October 18, 2019</td>
                                    <td>On Hold</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                                <tr>
                                    <td>#074145O7</td>
                                    <td>October 18, 2019</td>
                                    <td>Completed</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                                <tr>
                                    <td>#074145O5</td>
                                    <td>October 18, 2019</td>
                                    <td>Completed</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                                <tr>
                                    <td>#074145O6</td>
                                    <td>October 18, 2019</td>
                                    <td>On Hold</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                                <tr>
                                    <td>#074145O7</td>
                                    <td>October 18, 2019</td>
                                    <td>Completed</td>
                                    <td>$49.00 for 1 item</td>
                                    <td><a href="#" class="view-button">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

        <?php include_once'includes/footer.php'; ?>
