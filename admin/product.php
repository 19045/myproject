<html>

<head>
    <?php
    include '../connect.php';
    session_start();
    ?>
    
    <title>prodi</title>

    <head>
        <link rel="stylesheet" href="style8.css" type="text/css">
    </head>

    <main class="container">
    <?php
    $id = $_GET['i'];
    $sel = "select * from tbl_product where id='$id'";
    $res = mysqli_query($con, $sel);
    $itemCount = 0;
    while ($ar = mysqli_fetch_array($res)) {
        $itemCount = $ar["stock"];
    ?>
        <!-- Left Column / Headphones Image -->
        <div class="left-column">
            <img height="400" width="300" src="../<?php echo $ar["imageurl"]; ?>">
            <h4><?php echo $ar["name"]; ?></h4>
            <h4>Available Stock:<?php echo $ar["stock"]; ?></h4>

        </div>
        <?php
    }
    ?>


        <!-- Right Column -->
        <div class="right-column">

            <!-- Product Description -->
            <div class="product-description">
                <span>Headphones</span>
                <h1>Beats EP</h1>
                <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
            </div>

            <!-- Product Configuration -->
            <div class="product-configuration">

                <!-- Product Color -->
                <div class="product-color">
                    <span>Color</span>

                    <div class="color-choose">
                        <div>
                            <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                            <label for="red"><span></span></label>
                        </div>
                        <div>
                            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                            <label for="blue"><span></span></label>
                        </div>
                        <div>
                            <input data-image="black" type="radio" id="black" name="color" value="black">
                            <label for="black"><span></span></label>
                        </div>
                    </div>

                </div>

                <!-- Cable Configuration -->
                <div class="cable-config">
                    <span>Cable configuration</span>

                    <div class="cable-choose">
                        <button>Straight</button>
                        <button>Coiled</button>
                        <button>Long-coiled</button>
                    </div>

                    <a href="#">How to configurate your headphones</a>
                </div>
            </div>

            <!-- Product Pricing -->
            <div class="product-price">
                <span>148$</span>
                <a href="#" class="cart-btn">Add to cart</a>
            </div>
        </div>
    </main>