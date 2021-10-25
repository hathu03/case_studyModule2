<style>
td, th{
    text-align: center;
}
</style>
<body>
<div >
    <table border="1px" class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Pcode</th>
            <th>Img</th>
            <th>Height (cm)</th>
            <th>Weight (kg)</th>
            <th>From</th>
            <th>Price (VNĐ)</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product ["id"] ?></td>
                <td><?php echo $product ["name"] ?></td>
                <td><?php echo $product ["pcode"] ?></td>
                <td><img height="150px" width="150px" src="img/<?php echo $product ["img"] ?>"></td>
                <td><?php echo $product ["height"] ?> cm</td>
                <td><?php echo $product ["weight"] ?> kg</td>
                <td><?php echo $product ["infor"] ?></td>
                <td><?php echo $product ["price"] ?> VNĐ</td>
                <td ><a class="w3-button w3-blue" href="index.php?page=detail&id=<?php echo $product['id']?>">Detail</a></td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</div>

