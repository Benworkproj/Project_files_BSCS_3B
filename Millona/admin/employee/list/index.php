<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';

require_once '../../../app/core/Redirect.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);
redirect_cashiers_customers();


?>


<?php require_once '../../../app/src/includes/admin/header.php' ?>
<?php if ($_SESSION['user']['user_level'] === '1') : ?>

    <?php require_once '../../../app/src/includes/admin/panel.php' ?>

<?php endif; ?>


<!-- create a create a modern crud table  -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Employee List</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Phone No.</th>
                                    <th>Address</th>
                                    <th>Civil Status</th>
                                    <th>Employee Status</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>

                            <tfoot>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>

                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 
<div class="card inner_card px-4 py-2">

    <div class="div2 row py-1 px-2">

        <div class="col-7 mt-2">
            <p class="font-weight-bold mb-5 darkWhite heading"> Enjoy smart assistant around the home. </p>
            <p class="mt-3"> June 26 - August 26 </p>
        </div>

        <div class="col-5 d-flex align-items-center">

            <div class="rounded-circle d-flex align-items-center justify-content-center w-100" id="circl2">
                <img src="https://i.imgur.com/yT8K4xZ.png" height="85%" width="40%" alt="">
            </div>

        </div>
    </div>


    <div class="py-2">
        <p class="desc">
            Choose stylish gadgets from Google at great prices. Buy goods at KTC!
        </p>

        <div class="">

            <h6>
                <a href="#"> Learn more
                    <span class="rounded-circle sp1 px-2 py-0 ml-1">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </a>
            </h6>

        </div>

    </div>

</div> -->

<?php require_once '../../../app/src/includes/admin/footer.php'; ?>