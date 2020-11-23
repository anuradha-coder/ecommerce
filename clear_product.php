<?php
mysql_connect("localhost","root","")or die("opps.! sever could not connect");
mysql_select_db("mobile_db") or die("database could not connect");
 $pid=$_GET['pid'];
 if(mysql_query("delete from add_cart where CART_ID='".$pid."'"))
    {
    	 echo'
                <script>
                alert("Item Delete succesfully");
                window.location.href="cart.php";
                </script>
            ';
    }
?>