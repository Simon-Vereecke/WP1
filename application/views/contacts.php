<div class="container">

    <div class="bg-faded p-4 my-4">

        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contacts</h2>
        <hr class="divider">

        <section>
            <table class="table-hover table table-bordered">
                <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($contacts as $contact) {
                    echo "<tr style='text-align: center'>".
                        "<td>".$contact["id"]."</td>" .
                        "<td>".$contact["name"]."</td>" .
                        "<td>".$contact["email"]."</td>" .
                        "<td><a href=\"contacts/".$contact["id"]."\" class=\"btn btn-secondary\">
                            Details</a></td>" .
                        "</tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>

</div>