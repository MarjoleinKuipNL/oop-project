<div id="main">
    <div id="page">
        <div id="intro" class="intro">
            <img class="inset" src="<?php echo 
            url_for('/images/AdobeStock_55') ?>" />
            <h2>Our inventory of used bicycles</h2>
            <p>Choose the bike you love</p>
            <p>We will deliver it to your door and let you try it before you buy it. </p>
        </div>
        <table id="inventory" class="table table-inverted">
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Category</th>
                <th>Gender</th>
                <th>Color</th>
                <th>Weight</th>
                <th>Condition</th>
                <th>Price</th>
            </tr>
            <!-- <?php 
                // $parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
                // $bike_array = $parser->parse();
            ?> -->

            <?php
            $bikes = Bicycle::find_all();
            ?>
            <?php foreach($bikes as $bike) { ?>
                <?php $bike = new Bicycle($args); ?>
                <tr>
                    <td><?php echo h($bike->brand); ?></td>
                    <td><?php echo h($bike->model); ?></td>
                    <td><?php echo h($bike->year); ?></td>
                    <td><?php echo h($bike->category); ?></td>
                    <td><?php echo h($bike->gender); ?></td>
                    <td><?php echo h($bike->color); ?></td>
                    <td><?php echo h($bike->weight_kg() . ' / '. h(bike->weight_lbs())); ?></td>
                    <td><?php echo h($bike->condition()); ?></td>
                    <td><?php echo h(money_format('$%i', $bike->price)); ?></td>
                </tr>
           <?php  } ?>
        </table>
        <?php
            $result = Bicycle::find_all();


            $result->free();

            echo "BRAND: " . $row['brand'];

            
        ?>
    </div>
</div>