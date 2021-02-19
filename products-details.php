<?php
    include_once 'header.php';
?>

<!------------- Single product details--------------------->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/gallery-1.jpg" width="100%" id="ProductImg">
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/gallery-1.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-2.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-3.jpg" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/gallery-4.jpg" width="100%" class="small-img">
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <p>Home / T-Shirt</p>
                    <h1>Red Printed T-Shirt by HRX</h1>
                    <h4>$50.00</h4>
                    <select>
                        <option>Select Size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>Large</option>
                        <option>Medium</option>
                        <option>Small</option>
                    </select>
                    <input type="number" value="1">
                    <a href="" class="btn">Add To Cart</a>
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-Shirt.
                         Team it with a apair of shorts for morning workout or a denims or an evening out with guys.
                    </p>
                </div>
            </div>
        </div>

        <!------------------- Title ----------------------->

        <div class="small-container">
            <div class="row  row-2">
                <h2>Related Products</h2>
                <p>View more</p>
            </div>

        </div>

        <!------------------- Title ----------------------->

        <div class="small-container">
            
            <div class="row">
                <div class="col-4">
                    <img src="images/product-9.jpg">
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/product-10.jpg">
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/product-11.jpg">
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="images/product-12.jpg">
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>
        </div>

<!------ brands ----->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-coca-cola.png">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-paypal.png">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png">
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include_once 'footer.php';
        ?>

        <script>
            // js for toggle menu 
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
                }
            
            //js for product gallery

            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }
            

        </script>
    </body> 
</html>