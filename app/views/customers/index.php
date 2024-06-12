<h3 class="mb-4">All Customers</h3>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
  Add New Customer
</button>


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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTitle">New Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="<?= BASEURL;?>/customers/add" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Rocky Bolboa">
            </div>
            <div class="mb-3">
                <label for="passport" class="form-label">Passport</label>
                <input type="text" class="form-control" id="passport" name="passport" placeholder="">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="London">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="England">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@gmail.com">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notes</label>
                <textarea class="form-control" id="notes" name="notes"rows="3"></textarea>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>
      </div>
    </div>
  </div>
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