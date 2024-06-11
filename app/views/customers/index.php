
<main class="table">
        <section class="table_header">
            <h2 class="mb-3">Customer's List</h2>
        </section>
        <section class="table_body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name </th>
                        <th>Passport</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['customer'] as $customer):?>
                    <tr>
                        <td><?= $customer['name'];?></td>
                        <td><?= $customer['passport'];?></td>
                        <td><?= $customer['address'];?></td>
                        <td><?= $customer['country'];?></td>
                        <td><?= $customer['phone'];?></td>
                        <td><?= $customer['email'];?></td>
                        <td><?= $customer['notes'];?></td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </section>
    </main>