<!-- Top sale-->
<?php
        shuffle($product_shuffle);

        // request method post
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['top_sale_submit'])){
                // call method addToCart
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
?>

<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- Owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) {?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/Products/Corsair%20Vengeance32gb12.jpg";?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name']?? "Unknown";?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price']?? "0";?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                            <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php } //closing foreach function?>
        <!--    <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/aorus-2080ti11.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Aorus RTX 2080ti</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$1,343.99</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/TridentGskill16gb11.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Trident Gskill 16GB</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$83.99</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/Gigabyteb450M12.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Gigabyte B450M MoBo</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$71.99</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/GIGABYTEGTX1660ti11.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>GIGABYTE GTX 1660ti</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$279.99</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/Inteli79700K11.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Intel i7 9700K</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>289.99</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="#"><img src="./assets/Products/Ryzen53600xt11.jpg" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>AMD Ryzen5 3600XT</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$233.33</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- !Owl carousel-->
    </div>
</section>
<!-- !Top sale-->

