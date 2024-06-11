<div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $data['customer']['name'];?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Passport: <?= $data['customer']['passport'];?></li>
                <li class="list-group-item">Address: <?= $data['customer']['address'];?></li>
                <li class="list-group-item">Country: <?= $data['customer']['country'];?></li>
                <li class="list-group-item">Phone: <?= $data['customer']['phone'];?></li>
                <li class="list-group-item">Email: <?= $data['customer']['email'];?></li>
                <li class="list-group-item">Notes</li>: <?= $data['customer']['notes'];?></li>
            </ul>
            <div class="card-body">
                <a href="<?=BASEURL;?>/customers" class="card-link">Back</a>
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

