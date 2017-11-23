<div class="container">

    <?php
    if (isset($warning)) {
        echo "<br><div class=\"alert alert-warning\"> " . $warning . "</div><br>";
    }?>
    <?php
    if (isset($success)) {
        echo "<br><div class=\"alert alert-success\"> " . $success . "</div><br>";
    }?>
    <div class="bg-faded p-4 my-4">

        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contacts</h2>
        <hr class="divider">

        <section>
            <table class="table-hover table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                    <th>REMOVE</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($contacts as $contact) {
                    echo "<tr style='text-align: center'>".
                        "<td>".$contact["id"]."</td>" .
                        "<td>".$contact["name"]."</td>" .
                        "<td>".$contact["email"]."</td>" .
                        "<td><a href=\"" . base_url('index.php/contacts/') . $contact["id"] .
                            "\" class=\"btn btn-secondary\">Edit</a></td>" .
                        "<td>" .
                            "<form method=\"post\" action=\"" . base_url('index.php/contacts/remove/') .
                                $contact["id"] . "\">" .
                                "<div class=\"form-group col-lg-12\">" .
                                    "<button type=\"submit\" class=\"icon-bin btn\"/>" .
                                "</div>" .
                            "</form>" .
                        "</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>

    <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
            <strong>Add Contact</strong>
        </h2>
        <hr class="divider">
        <form method="post" action="<?php base_url();?>index.php/contacts/create" onsubmit="return validateForm()">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label class="text-heading">Name</label>
                    <input id="contactName" name="name" type="text" class="form-control form-con">
                </div>
                <div class="form-group col-lg-6 ">
                    <label class="text-heading">Email Address</label>
                    <input id="contactEmail" name="email" type="text" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                    <button id="btnAddContact" type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>