<?php
include 'header.php';
?>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">

            <div class="col-sm-9">
                <?php
                include 'connect_db.php';
                $Id = $Category_id = $Title = $Image = $Description = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    if (isset($_POST["Id"])) {
                        $Id = $_POST['Id'];
                    }
                    if (isset($_POST["Category_id"])) {
                        $Category_id = $_POST['Category_id'];
                    }
                    if (isset($_POST["Title"])) {
                        $Title = $_POST['Title'];
                    }
                    if (isset($_POST["Image"])) {
                        $Image = $_POST['Image'];
                    }
                    if (isset($_POST["Description"])) {
                        $Description = $_POST['Description'];
                    }
                    $sql = "INSERT INTO product (Id, Category_id, Title, Image,Description ) VALUES ('$Id', '$Category_id', '$Title', '$Image','$Description')";

                    if (mysqli_query($connect, $sql)) {
                        header('location: admin.php');
                    }
                }
                ?>
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    input {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        box-sizing: border-box;
                    }

                    label {
                        padding: 12px 12px 12px 0;
                        display: inline-block;
                    }

                    input[type="radio"] {
                        background-color: #ddd;
                        background-image: -webkit-linear-gradient(0deg, transparent 20%, hsla(0, 0%, 100%, .7), transparent 80%),
                            -webkit-linear-gradient(90deg, transparent 20%, hsla(0, 0%, 100%, .7), transparent 80%);
                        border-radius: 10px;
                        box-shadow: inset 0 1px 1px hsla(0, 0%, 100%, .8),
                            0 0 0 1px hsla(0, 0%, 0%, .6),
                            0 2px 3px hsla(0, 0%, 0%, .6),
                            0 4px 3px hsla(0, 0%, 0%, .4),
                            0 6px 6px hsla(0, 0%, 0%, .2),
                            0 10px 6px hsla(0, 0%, 0%, .2);
                        cursor: pointer;
                        display: inline-block;
                        height: 15px;
                        margin-right: 15px;
                        position: relative;
                        width: 15px;
                        -webkit-appearance: none;
                    }

                    input[type="radio"]:after {
                        background-color: #444;
                        border-radius: 25px;
                        box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .4),
                            0 1px 1px hsla(0, 0%, 100%, .8);
                        content: '';
                        display: block;
                        height: 7px;
                        left: 4px;
                        position: relative;
                        top: 4px;
                        width: 7px;
                    }

                    input[type="radio"]:checked:after {
                        background-color: #f66;
                        box-shadow: inset 0 0 0 1px hsla(0, 0%, 0%, .4),
                            inset 0 2px 2px hsla(0, 0%, 100%, .4),
                            0 1px 1px hsla(0, 0%, 100%, .8),
                            0 0 2px 2px hsla(0, 70%, 70%, .4);
                    }

                    input[type=submit] {
                        background-color: #04AA6D;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        float: right;
                    }

                    input[type=submit]:hover {
                        background-color: #45a049;
                    }

                    .container {
                        border-radius: 5px;
                        background-color: #f2f2f2;
                        padding: 20px;
                    }

                    .col-25 {
                        float: left;
                        width: 25%;
                        margin-top: 6px;
                    }

                    .col-75 {
                        float: left;
                        width: 75%;
                        margin-top: 6px;
                    }

                    .row:after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    @media screen and (max-width: 600px) {

                        .col-25,
                        .col-75,
                        input[type=submit] {
                            width: 100%;
                            margin-top: 0;
                        }
                    }

                    form {
                        float: right;
                    }

                    button {
                        background-color: #04AA6D;
                        color: white;
                        padding: 12px 20px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        margin-left: 45%;
                    }

                    h2 {
                        text-align: center;
                    }
                </style>
                <form method="post" action="add_new_product.php">
                    <h2>ADD NEWS PRODUCTS</h2>
                    <label for="Id">Product ID : </label>
                    <input type="number" id="Id" name="Id" placeholder="Product ID"><br>
                    <label for="Category_id">Product Category : </label>
                    <input type="radio" id="wood" name="Category_id" value="1" placeholder="Product Category">
                    <label for="Category_id">wood</label>
                    <input type="radio" id="Iron" name="Category_id" value="2">
                    <label for="Category_id">Iron</label>
                    <input type="radio" id="Glass" name="Category_id" value="3">
                    <label for="Category_id">Glass</label>
                    <input type="radio" id="Brass" name="Category_id" value="4">
                    <label for="Category_id">Brass</label>
                    <input type="radio" id="Aluminium" name="Category_id" value="5">
                    <label for="Category_id">Aluminium</label>
                    <input type="radio" id="Decorative" name="Category_id" value="6">
                    <label for="Category_id">Decorative</label><br>
                    <label for="Title">Product Title : </label>
                    <input type="text" id="Title" name="Title" placeholder="Product Title"><br>
                    <label for="Image">Product Image : </label>
                    <input type="text" name="Image" id="Image" placeholder="Product Image">
                    <label for="Description">Product Description : </label>
                    <textarea name="Description" id="Description" style="width: 100% ; height: 200px;"
                        placeholder="Product Description"></textarea><br>
                    <button type="submit">ADD</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>