<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simons Auto Body .: Collision :.</title>
    <?php $this->load->view('public/includes/style'); ?>
</head>

<body>
    <!-- MENU -->
    <?php $this->load->view('public/includes/menu'); ?>   


    <header class="header-collision">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo base_url(); ?>assets/images/text-header-collision.png" class="w-100" alt="">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 sc-default p-0 bg-grayscale-light">
                    <img src="<?php echo base_url(); ?>assets/images/text/text-why-us.png" class="w-40 offset-md-5" alt="">
                </div>
                <div class="col-md-6 p-0 bg-blue shape-car-collision">
                </div>
            </div>
        </div>
    </section> 

    <section class="sc-default bg-grayscale">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-none card-item box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/icons/key.png" class="w-20 d-block mx-auto" alt="..." />
                        <div class="card-body">
                            <p class="card-text">
                                We Are Equipped With The Latest Technology And Equipment To Properly Repair Your Vehicle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-none card-item box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/icons/follow.png" class="w-20 d-block mx-auto" alt="..." />
                        <div class="card-body">
                            <p class="card-text">                                
                                We will Help You With Your Claim.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-none card-item box-shadow-none">
                        <img src="<?php echo base_url(); ?>assets/images/icons/repair.png" class="w-20 d-block mx-auto" alt="..." />
                        <div class="card-body">
                            <p class="card-text">
                                You Will leave the shop with a rental car**
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-util">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title text-yellow">Your Insurance <br> Claim Specialists:</h1>
                    <p>Simon’s Works With All Insurance Company’s, However, Once Your Vehicle is Placed in Our Trust, We Work For You to Restore Your Vehicle Properly and Thoroughly.</p>
                    <p>We believe Insurers are obligated to Restore Your Vehicle with the Proper Parts and Procedures to Not Only Restore Your Damage Vehicle’s Original Safety, Function, and Value but Also You and Your Family’s Piece of Mind! Don’t You?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-util bg-1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <h1 class="title text-yellow text-uppercase">We offer 24h <br> towing <span>assistance</span></h1>
                    <p>You can’t predict when your car will leave <br> you stranded on the road or when an accident will occur.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sc-util bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title text-outline text-line-height f-90 text-uppercase">Before <br> <span>& After</span></h1>
                </div>
            </div>
        </div>
    </section>




    <!-- FOOTER -->
    <?php $this->load->view('public/includes/footer'); ?>    

    <!-- SCRIPT -->
    <?php $this->load->view('public/includes/scripts'); ?>
</body>

</html>