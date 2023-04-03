<?php
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    ?>
    <div style="pading-top: 20%; padding-bottom: 20%;">
        <div class="col-sm-4" style="pading-top: 20%; padding-bottom: 20%;">

            <?php
            $image = $row["Image"];
            echo "<img src='image_DTB/$image' class='img-responsive' style='width:300% ; height :250px' alt='Image'>";
            ?>

        </div>
        <h4>
            <?php echo $row["Title"]; ?>
        </h4>
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

    img {
        --s: 250px;
        /* the size of the image */
        --b: 8px;
        /* the border thickness*/
        --g: 14px;
        /* the gap */
        --c: #4ECDC4;
        /* the color */

        width: var(--s);
        aspect-ratio: 1;
        outline: calc(var(--s)/2) solid #0009;
        outline-offset: calc(var(--s)/-2);
        cursor: pointer;
        transition: 0.3s;
    }

    img:hover {
        outline: var(--b) solid var(--c);
        outline-offset: var(--g);
    }

    img+img {
        border-radius: 50%;
    }
</style>