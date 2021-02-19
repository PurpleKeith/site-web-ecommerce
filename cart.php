<?php
    include_once 'header.php';
?>

<!------Cart items details------->

        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-1.jpg">
                            <div>
                                <p>Red Printed T-shirt</p>
                                <small>Price: $50.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td><input type="number" value="1"></td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-2.jpg">
                            <div>
                                <p> Red Printed T-shirt</p>
                                <small>Price: $75.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td><input type="number" value="1"></td>
                    <td>$75.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-3.jpg">
                            <div>
                                <p> Red Printed T-shirt</p>
                                <small>Price: $75.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td></td>
                    <td><input type="number" value="1"></td>
                    <td>$75.00</td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>$30.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$230.00</td>
                    </tr>
                </table>
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
        </script>
    </body> 
</html>