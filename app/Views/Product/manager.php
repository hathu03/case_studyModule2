
<div>
    <div class="card-header">
        <a href="index.php?page=create-p"><button type="button" class="btn btn-success">Them</button></a>
    </div class="row ">
    <div class=" col-3">
        <?php foreach ($products as $product): ?>
            <div class="card " style="width: 18rem;">
                <img height="150px" width="150px" src="img/<?php echo $product ["img"] ?>">
                <div class="card-body">
                    <?php echo $product ["id"] ?>
                    <?php echo $product ["name"] ?>
                    <?php echo $product ["pcode"] ?>
                    <a href="index.php?page=delete-p&id=<?php echo $product['id']?>">
                        <button type="button" class="btn btn-danger">xoa</button>
                    </a>
                    <button type="button" class="btn btn-primary">Primary</button>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
