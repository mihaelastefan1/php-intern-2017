<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php include 'C:\xampp\htdocs\lib\header.php'; ?>
    <!-- content -->
    <div class="wrapper row2">
        <div id="container" class="clear">
            <!-- content body -->


            <div class="container">

                <?php
                if(isset($_POST['submit'])){
                $id = '';
                $name = $_POST['name'];
                $details = $_POST['details'];
                $price = $_POST['price'];
                $favorite_product = $_POST['favorite_product'];
                $user_job = $_POST['user_job'];
                //$image= addslashes(file_get_contents ($_FILES['image']['tmp_name']));
                }
                ?>

                <form action="add-product.php" method="post" name="form_adddata" onsubmit="return validateForm()" enctype="multipart/form-data">

                    <h1>Add a product</h1>

                    <fieldset>
                        <legend>Product Details</legend>
                        <label for="name"> Product Name:</label>
                        <input type="text" id="name" name="name">

                        <label for="decription"> Description:</label>
                        <textarea id="decription" name="details"></textarea>

                        <label for="input_price"> Price:</label>
                        <input type="text" id="input_price" name="price">

                        <label>Favorite:</label>
                        <input type="radio" name="favorite_product" value="yes" class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Yes
                        <input type="radio" name="favorite_product" value="no"  class="radio" <?php if (isset($_POST['radio']) && $_POST['radio'] == 'no'): ?>checked='checked'<?php endif; ?> /> No
                    </fieldset>

                    <fieldset>
                        <label for="job">Category:</label>
                        <select id="job" name="user_job">
                            <optgroup label="First">
                                <option value="tech">tech</option>
                                <option value="funny">funny</option>
                                <option value="gadget">gadget</option>
                            </optgroup>
                            <optgroup label="Second">
                                <option value="somthing">somthing</option>
                                <option value="funny">funny</option>
                                <option value="gadget">gadget</option>
                            </optgroup>
                            <optgroup label="Third">
                                <option value="else">else</option>
                                <option value="funny">funny</option>
                                <option value="gadget">gadget</option>
                            </optgroup>
                        </select>
                    </fieldset>
                    <fieldset>


                        <?php
                        if (isset($_FILES['image'])) {
                            $errors = array();
                            $file_name = $_FILES['image']['name'];
                            $file_size = $_FILES['image']['size'];
                            $file_tmp = $_FILES['image']['tmp_name'];
                            $file_type = $_FILES['image']['type'];
                            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

                            $expensions = array("jpg");

                            if (in_array($file_ext, $expensions) === false) {
                                $errors[] = "extension not allowed, please choose a JPEG file.";
                            }

                            if ($file_size > 2097152) {
                                $errors[] = 'File size must be excately 2 MB';
                            }

                            if (empty($errors) == true) {
                                $path = move_uploaded_file($file_tmp, "assets/images/" . $file_name);
                                echo "Success";
                            } else {
                                print_r($errors);
                            }
                        }
                        ?>

                        <input type="file" name="image" accept="image/jpeg" />


                    </fieldset>
                    <button type ="submit" name="submit" class="button" value ="Submit">Add Product</button>
                </form>
            </div><!-- container -->
<?php
include 'C:\xampp\htdocs\insert_database.php';
?>
        </div>
        <!-- footer -->
<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>

    </body>
</html>
