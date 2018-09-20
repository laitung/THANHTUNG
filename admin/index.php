    <?php
    session_start();
      ob_start();
      require_once('header.php');

      if (!isset($_SESSION["user_name"])) {
      header("location:login.php");
        }
      $module = isset($_GET['module']) ? $_GET['module'] : "";
        switch ($module) {
          case 'listcatproduct':
          require_once("listcatproduct.php");
                break;
          case 'list_news':
          require_once("list_news.php");
                break;
          case 'addlist_news':
          require_once("addlist_news.php");
                break;      
          case 'product_new':
          require_once("product_new.php");
                break;
          case 'catproductnew':
          require_once("catproductnew.php");
                break;
          case 'edit_cat_product':
          require_once("edit_cat_product.php");
                break;
          case 'delete_cat_product':
          require_once("delete_cat_product.php");
                break;
          case 'list_product':
          require_once("list_product.php");
                break;
          case 'product_edit':
          require_once("product_edit.php");
                break;
                case 'delete_product':
          require_once("delete_product.php");
                break;
                case 'edit_news':
          require_once("edit_news.php");
                break;
                case 'delete_news':
          require_once("delete_news.php");
                break;
                case 'login':
          require_once("login.php");
                break;
                case 'logout':
          require_once("logout.php");
                break;
                case 'newadmin':
          require_once("newadmin.php");
                break;
                case 'listadmin':
          require_once("listadmin.php");
                break;
                case 'edit_admin':
          require_once("edit_admin.php");
                break;
                case 'delete_admin':
          require_once("delete_admin.php");
                break;
                case 'timkiemsanpham':
          require_once("timkiemsanpham.php");
                break;
                case 'thongtinadmin':
          require_once("thongtinadmin.php");
                break;
                case 'listkhachhang':
          require_once("listkhachhang.php");
                break;
                case 'timkiemkhachhang':
          require_once("timkiemkhachhang.php");
                break;
                case 'listdonhang':
          require_once("listdonhang.php");
                break;
                case 'chitietdonhang':
          require_once("chitietdonhang.php");
                break;
                case 'huydonhang':
          require_once("huydonhang.php");
                break;
                case 'listncc':
          require_once("listncc.php");
                break;
                case 'newncc':
          require_once("newncc.php");
                break;
                case 'edit_ncc':
          require_once("edit_ncc.php");
                break;
                case 'delete_ncc':
          require_once("delete_ncc.php");
                break;
                case 'timkiemncc':
          require_once("timkiemncc.php");
                break;
                case 'listmkm':
          require_once("listmkm.php");
                break;
                case 'newmkm':
          require_once("newmkm.php");
                break;
                case 'timkiemdonhang':
          require_once("timkiemdonhang.php");
                break;
                case 'timkiemdonhangtheongay':
          require_once("timkiemdonhangtheongay.php");
                break;
                case 'nhaphang':
          require_once("nhaphang.php");
                break;
                case 'loihetsachhang':
          require_once("loihetsachhang.php");
                break;
                case 'edit_nhaphang':
          require_once("edit_nhaphang.php");
                break;
                case 'delete_nhaphang':
          require_once("delete_nhaphang.php");
                break;
                case 'producthot':
          require_once("producthot.php");
                break;
                case 'productton':
          require_once("productton.php");
                break;
                case 'doanhthu':
          require_once("doanhthu.php");
                break;
                case 'lienhe':
          require_once("lienhe.php");
                break;
                case 'thongkesanpham':
          require_once("thongkesanpham.php");
                break;


            default:
                require_once("main.php");
                break;
        }
        ob_end_flush(); 
        ?>
