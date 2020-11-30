<!-- Special Price-->
<?php
    $type = array_map(function ($pro){return $pro['item_type'];}, $product_shuffle);
    $unique = array_unique($type);
    sort($unique);
    //print_r($unique);
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
    $in_cart = $Cart->getCartId($product->getData('cart'));

?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-roboto font-size-16">
            <button class="btn is-checked" data-filter="*">All</button>
            <?php
                array_map(function ($type){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $type, $type);
                }, $unique);
            ?>
            <!--
            <button class="btn" data-filter=".Processor">Processor</button>
            <button class="btn" data-filter=".GPU">GPU</button>
            <button class="btn" data-filter=".Mo-Bo">Mo-Bo</button>
            -->
        </div>

        <div class="grid">
            <?php array_map(function ($item) use($in_cart){ ?>
            <div class="grid-item border <?php echo $item['item_type']?? "Type";?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image']?? "./assets/Products/GIGABYTEGTX1660ti11.jpg";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name']?? "unknown";?></h6>
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
                                    if (in_array($item['item_id'], $in_cart ?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                    }else{
                                        echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
    <!--        <div class="grid-item Ram border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Corsair%20Vengeance32gb12.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Corsair Vengeance 32GB</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$135.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Inteli910900K11.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Intel i9 10900K</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$509.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Mo-bo border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/GIGABYTEAORUSX57011.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Gigabyte Aorus X570</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$194.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Ryzen-9-3950X11.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>AMD Ryzen 9 3950X</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$709.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Ram border">
                <div class="item py-2" style="width: 200px;">
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
            </div>
            <div class="grid-item GPU border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/MSIRTX2060Super11.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>MSI RTX 2060 Super</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$389.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Mo-bo border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/GIGABYTEZ490Xtreme11.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Gigabyte z490 Xtreme</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$981.44</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Mo-bo border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Gigabyteb450M12.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Gigabyte B450M Mo-Bo</h6>
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
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Ryzen5360011.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>AMD Ryzen 5 3600X</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$239.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
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
                                <span>$289.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Ryzen53600xt11.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>AMD Ryzen 5 3600XT</h6>
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
                </div>
            </div>
            <div class="grid-item GPU border">
                <div class="item py-2" style="width: 200px;">
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
                                <span>$1,343.99.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item Processor border">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/Products/Ryzen73700X12.jpg" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>AMD Ryzen 7 3700X</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$304.99</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
</section>
<!-- !Special Price-->
