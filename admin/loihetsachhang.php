<?php 
echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=listdonhang";
            }
            alert("Sản phẩm hết hàng!\nVui lòng kiểm tra lại...");
            setTimeout("Redirect()", 100);
</script>';



?>