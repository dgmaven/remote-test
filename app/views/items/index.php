<div class="row mb-2">
    <div class="col-lg-6">
    <?php Flasher::flash();?>
    </div>
</div>

<h3 class="mb-4">All Items</h3>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
  Add New Item
</button>

<div class="mt-4 col-6">
<ol class="list-group list-group-numbered">
    <?php foreach($data['item'] as $item):?>     
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
            <div class="fw-bold"><?= $item['name'];?></div>
            <?= $item['price'];?> 
            </div>
            <a href="<?=BASEURL;?>/items/detail/<?= $item['item_id'];?>" class="mx-2 badge text-bg-primary rounded-pill">Detail</a>
            <a href="<?=BASEURL;?>/items/delete/<?= $item['item_id'];?>" class="badge text-bg-danger rounded-pill" onclick="return confirm('Confirm delete this item?')">Delete</a>
        </li>
    <?php endforeach; ?>
        
</ol>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalTitle">New Item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL;?>/items/add" method="post">
            
            <select class="form-select" aria-label="type" id="type" name="type">
                <option selected>Item's type?</option>
                <option value="Goods">Goods</option>
                <option value="Service">Service</option>
            </select>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Rocky Bolboa">
            </div>
            <div class="mb-3">
                <label for="sku" class="form-label">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" placeholder="">
            </div>
            <select class="form-select" aria-label="unit" id="unit" name="unit">
                <option selected value="unit">unit</option>
                <option value="pcs">pcs</option>
                <option value="pax">pax</option>
                <option value="person">person</option>
                <option value="box">box</option>
                <option value="kilo">kilo</option>
                <option value="meter">meter</option>
                <option value="cm">cm</option>
                <option value="m2">m2</option>
                <option value="ft">ft</option>
                <option value="liter">liter</option>
                <option value="ml">ml</option>
            </select>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Item</button>
      </div>
    </div>
  </div>
</div>
