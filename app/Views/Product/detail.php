<style>

</style>
<body>
<div >
    <table border="1px" class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Pcode</th>

            <th>Img</th>

            <th>Height (cm)</th>
            <th>Weight (kg)</th>
            <th>Information</th>
            <th>Price (VNĐ)</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $product ["id"] ?></td>
                <td><?php echo $product ["FullName"] ?></td>
                <td><?php echo $product ["pcode"] ?></td>
                <td><img width="150px" src="img/<?php echo $product["img"] ?>"></td>

                <td><?php echo $product ["height"] ?> cm</td>
                <td><?php echo $product ["weight"] ?> kg</td>
                <td><?php echo $product ["Information"] ?></td>
                <td><?php echo $product ["price"] ?> VNĐ</td>
            </tr>
        </tbody>
    </table>
</div>

