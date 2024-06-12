<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $data['item']['name'];?></h5>
                <p class="card-text"><?= $data['item']['description']?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Type: <?= $data['item']['type'];?></li>
                <li class="list-group-item">SKU: <?= $data['item']['sku'];?></li>
                <li class="list-group-item">Unit: <?= $data['item']['unit'];?></li>
                <li class="list-group-item">Selling Price: MYR <?= $data['item']['price'];?></li>
            </ul>
            <div class="card-body">
                <a href="<?=BASEURL;?>/items" class="card-link">Back</a>
                <a href="#" class="card-link">Edit Info</a>
            </div>
        </div>
      </div>
    
      <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
      </div>
    </div>

