<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';

require_once '../../../app/core/Redirect.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);
redirect_not_admin();

?>


<?php require_once '../../../app/src/includes/admin/header.php' ?>

<?php require_once '../../../app/src/includes/admin/panel.php' ?>

<div class="row align-items-start">
    <div class="col-12 col-md-6 col-sm-12 col-xs-12">

        <div class="card p-3">
            <div class="card inner_card px-4 py-2 mb-3">

                <div class="div1 row py-1 px-2">

                    <div class="col-7 mt-2">
                        <p class="font-weight-bold mb-5 darkWhite heading"> Favorable discounts on Bluedio headsets </p>
                        <p class="mt-3"> June 26 - August 26 </p>
                    </div>


                    <div class="col-5 d-flex align-items-center">

                        <div class="rounded-circle d-flex align-items-center justify-content-center w-100" id="circl1">
                            <img src="https://i.imgur.com/6doCIZE.png" height="80%" width="60%" alt="">
                        </div>

                    </div>
                </div>



                <div class="py-2">
                    <p class="desc">
                        Take away every second Bluedio headset with a 50% discount. Be smart - buy cheaply with KTS!
                    </p>

                    <div>

                        <h6>
                            <a href="#"> Learn more
                                <span class="rounded-circle sp1 px-2 py-0 ml-1">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h6>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-sm-12 col-xs-12">

        <div class="card p-3">
            <div class="card inner_card px-4 py-2 mb-3">

                <div class="div1 row py-1 px-2">

                    <div class="col-7 mt-2">
                        <p class="font-weight-bold mb-5 darkWhite heading"> Favorable discounts on Bluedio headsets </p>
                        <p class="mt-3"> June 26 - August 26 </p>
                    </div>


                    <div class="col-5 d-flex align-items-center">

                        <div class="rounded-circle d-flex align-items-center justify-content-center w-100" id="circl1">
                            <img src="https://i.imgur.com/6doCIZE.png" height="80%" width="60%" alt="">
                        </div>

                    </div>
                </div>



                <div class="py-2">
                    <p class="desc">
                        Take away every second Bluedio headset with a 50% discount. Be smart - buy cheaply with KTS!
                    </p>

                    <div>

                        <h6>
                            <a href="#"> Learn more
                                <span class="rounded-circle sp1 px-2 py-0 ml-1">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </h6>

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