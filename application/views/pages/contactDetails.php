<?php
$this->load->helper('url');
?>
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Contact
        <strong><?php echo $contact["name"]?></strong>
    </h2>
    <hr class="divider">
    <div class="row">
        <div id="logo" class="col-lg-4">
            <img class="img-fluid float-left mr-4 d-none d-lg-block"
             src="../../public/img/contact_logo.png" alt="">
        </div>
        <div class="col-lg-8">
            <h2 class="card-title text-shadow text-uppercase mb-0">Name</h2>
            <h3 class="text-shadow"><?php echo $contact["name"]?></h3>
            <h2 class="card-title text-shadow text-uppercase mb-0">Email</h2>
            <h3 class="text-shadow"><?php echo $contact["email"]?></h3>
        </div>
    </div>
</div>