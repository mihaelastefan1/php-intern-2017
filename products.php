<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php include 'C:\xampp\htdocs\lib\header.php'; ?>
    <!-- content -->
    <div class="wrapper row2">
        <div id="container" class="clear">
            <!-- content body -->
            <div id="slider">
                <ul class="bxslider">
                    <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
                    <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
                    <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
                    <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
                    <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>

                </ul>
            </div>

        </div>

        <div class="container">

            <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1">Tab One</li>
                <li class="tab-link" data-tab="tab-2">Tab Two</li>
                <li class="tab-link" data-tab="tab-3">Tab Three</li>
            </ul>
            
            <?php
            //conexiune db, afisare field-uri din bd 
            include 'C:\xampp\htdocs\conexiune_database.php';
            $sqlstring = $conn->query("SELECT name, details FROM products");
            //$result = $conn->query($sqlstring);
            $row_cnt = $sqlstring->num_rows; //numar recorduri

            $result = $sqlstring;

            //printf("Result set has %d rows.\n", $row_cnt);
            $index = 0;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $produse = "<br> NAME: " . $row["name"] . "  " . " Details:" . $row["details"] . "<br>";
                    //echo $produse;
                    if ($index != 0) {
                        $rezultat = array($index => "$produse");
                        $array = array_merge($array, $rezultat);
                    } else {
                        $array = array($index => "$produse");
                    }
                    $index ++;
                }
                ?>

                <div id="tab-1" class="tab-content current">
                    <?php for ($i = 0; $i <= 1; $i++) { ?>
                        <div class="product">
                            <span><?php echo $array[$i]; ?></span>
                        </div><?php } ?>
                    <div style="clear:both;"></div>
                </div>

                <div id="tab-2" class="tab-content">
                    <?php for ($i = 2; $i < 4; $i++) { ?>
                        <div class="product">
                            <span><?php echo $array[$i]; ?></span>
                        </div><?php } ?>    
                    <div style="clear:both;"></div>
                </div>


                <div id="tab-3" class="tab-content">

                    <?php for ($i = 5; $i < $row_cnt; $i++) { ?>
                        <div class="product">
                            <span><?php echo $array[$i]; ?></span>
                        </div><?php } ?>    

                    <div style="clear:both;"></div>


                </div>

            </div>

        </div>
        <?php
    }
    $conn->close();
    ?>
    <!-- footer -->
    <?php include 'C:\xampp\htdocs\lib\footer.php'; ?>

</body>
</html>
