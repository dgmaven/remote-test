<h3>Customer's List</h3>

<div class="mt-4 col-6">
<ol class="list-group list-group-numbered">
    <?php foreach($data['customer'] as $customer):?>     
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?= $customer['name'];?></div>
            <?= $customer['country'];?> 
            </div>
            <a href="<?=BASEURL;?>/customers/detail/<?= $customer['cust_id'];?>" class="badge text-bg-primary rounded-pill">Detail</a>
        </li>
    <?php endforeach; ?>
        
</ol>
</div>

<!-- <main class="table">
        <section class="table_header">
            <h3 class="mb-3">Customer's List</h3>
        </section>
        <section class="table_body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
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
                        </td>

                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </section>
    </main> -->