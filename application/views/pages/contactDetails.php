<?php
$this->load->helper('url');
?>
<div class="container">

    <div class="bg-faded p-4 my-4">

        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
            <strong><?php echo $contact["name"]?></strong>
        </h2>
        <hr class="divider">
        <section>
            <form method="post" action="<?php echo base_url("index.php/contacts/update/") . $contact["id"];?>">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="text-heading">Name</label>
                        <input name="name" type="text" class="form-control form-con"
                               value="<?php echo $contact["name"]?>">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="text-heading">Email Address</label>
                        <input name="email" type="email" class="form-control" value="<?php echo $contact["email"]?>">
                    </div>
                    <div class="form-group col-lg-4">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

</div>