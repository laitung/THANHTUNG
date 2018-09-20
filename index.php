
            <?php
            ob_start();
            require_once('header.php');
      $module = isset($_GET['module']) ? $_GET['module'] : "";
        switch ($module) {
          case 'thungo':
          require_once("thungo.php");
                break;
          case 'dichvu':
          require_once("dichvu.php");
                break;
          case 'new':
          require_once("new.php");
                break;
                case 'login':
          require_once("login.php");
                break;
                case 'thongtinkhachhang':
          require_once("thongtinkhachhang.php");
                break;
            case 'giohang':
          require_once("giohang.php");
                break;
            case 'chitietsanpham':
          require_once("chitietsanpham.php");
                break;
            case 'thanhtoan':
          require_once("thanhtoan.php");
                break;
                case 'daycamhoa':
          require_once("daycamhoa.php");
                break;
                case 'tatcasanpham':
          require_once("tatcasanpham.php");
                break;
                case 'motloaisanpham':
          require_once("motloaisanpham.php");
                break;
                case 'timkiemsanpham':
          require_once("timkiemsanpham.php");
                break;
                case 'tuvanchonhoa':
          require_once("tuvanchonhoa.php");
                break;
                case 'huydonhang':
          require_once("huydonhang.php");
                break;
                case 'dathang':
          require_once("dathang.php");
                break;
                case 'sendmail':
          require_once("sendmail.php");
                break;
                case 'lienhe':
          require_once("lienhe.php");
                break;
                case 'hotrokhachhang':
          require_once("hotrokhachhang.php");
                break;
                case 'chinhsach':
          require_once("chinhsach.php");
                break;
                case 'cauhoithuonggap':
          require_once("cauhoithuonggap.php");
                break;
                case 'timhieuvehoa':
          require_once("timhieuvehoa.php");
                break;


                


            default:
                require_once("sanpham.php");
                break;
        } 
        require_once('footer.php');
        ob_end_flush();
       ?>
