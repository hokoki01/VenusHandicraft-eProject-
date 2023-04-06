<?php
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    ?>
    <div class="col-sm-4">

        <?php
        $image = $row["Image"];
        echo "<img src='image_DTB/$image' class='img-responsive' style='width:300% ; height :250px' alt='Image'>";
        ?>

    </div>

    <h4>
        <?php echo $row["Title"]; ?>
    </h4>
    <br>
    <div class="panel">
        <p>
            <?php echo $row["Description"]; ?>
        </p>
    </div>
    <?php
    $i++;
}
?>
<style>
    button {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 45%;
        margin-top: 30px;
    }
</style>
