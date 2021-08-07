<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/Fonts/fontawesome-free-5.15.3-web/css/all.min.css">
    <title>Fashion GenZ</title>
    <style>
        <?php if ($admin[0]['lv'] == 2){ ?>
        #menu1{
            display: none;
        }
        <?php } ?>
    </style>
</head>
<body>
    <div class="grid">
        <div class="row no-gutters">
            <div class="col l-2 m-0 c-0">
                <div class="admin-menu">
                    <ul class="admin-menu__list">
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link admin-menu__item-link-has-img">
                                <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                            </a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=trangquantri" class="admin-menu__item-link active">Tổng quan</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý website</a>
                        </li>
                        <li id="menu1" class="admin-menu__item">
                            <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlysanpham" class="admin-menu__item-link">Quản lý sản phẩm</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="admin-header">
                    <div class="admin-header__sections">
                        <label for="nav__mobile-input-admin" class="admin-menu-icon"><i class="fas fa-bars"></i></label>
                        <a href="?controller=trangchu" class="admin-header__back-to-website"><i class="fas fa-backward"></i> Trở về website</a>
                    </div>
                    <div class="admin-header__admin-info">
                        <h3 class="admin-header__admin-name"><?php echo $admin[0]['fullname'] ?></h3>
                        <a href="?controller=dangxuatquantri" class="admin-header__admin-logout">Thoát</a>
                    </div>
                    <input type="checkbox" hidden class="nav__mobile-input-admin" id="nav__mobile-input-admin">
                    <label for="nav__mobile-input-admin" class="header__navbar-mobile-overlay-admin"></label>
                    <div class="admin-menu__mobile">
                        <label for="nav__mobile-input-admin" class="header__navbar-mobile-close-admin">                    
                            <i class="fas fa-times"></i>
                        </label>
                        <ul class="admin-menu__list">
                            <li class="admin-menu__item">
                                <a href="?controller=trangquantri" class="admin-menu__item-link admin-menu__item-link-has-img">
                                    <img src="./Assets/Img/logo.png" alt="" class="admin-menu__item-link-img">
                                </a>
                            </li>
                            <li class="admin-menu__item">
                                <a href="?controller=trangquantri" class="admin-menu__item-link active">Tổng quan</a>
                            </li>
                            <li id="menu1" class="admin-menu__item">
                                <a href="#" class="admin-menu__item-link">Quản lý website</a>
                            </li>
                            <li id="menu1" class="admin-menu__item">
                                <a href="?controller=quanlynhanvien" class="admin-menu__item-link">Quản lý nhân viên</a>
                            </li>
                            <li class="admin-menu__item">
                                <a href="?controller=quanlysanpham" class="admin-menu__item-link">Quản lý sản phẩm</a>
                            </li>
                            <li class="admin-menu__item">
                                <a href="?controller=quanlydonhang" class="admin-menu__item-link">Quản lý đơn hàng</a>
                            </li>
                            <li class="admin-menu__item">
                                <a href="?controller=quanlydanhgia" class="admin-menu__item-link">Quản lý đánh giá</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php 
                    $profit = 0;
                    foreach ($user_order_confirmed as $key => $value){
                        $profit += $value['amount'];
                    }
                    $all_product = 0;
                    foreach ($user_order_detail as $key => $value){
                        $all_product += $value['qty'];
                    }
                    $ex_product = 0;
                    foreach ($user_order_not_confirmed as $key => $value){
                        foreach ($database->get('user_order_detail',array('order_id'=>$value['id'])) as $key => $values){
                            $ex_product += $values['qty'];
                        }
                    }
                ?>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading">Thống kê</h3><br>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__profit">
                                <i class="fas fa-money-bill-wave-alt admin-content__profit-img"></i>
                                <div class="admin-content__profit-content">
                                    <h3 class="admin-content__profit-heading">Doanh thu cửa hàng tháng này</h3>
                                    <h4 class="admin-content__profit-info"><?php echo number_format($profit) ?>đ</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__all-item">
                            <i class="fas fa-box admin-content__all-item-img"></i>
                                <div class="admin-content__all-item-content">
                                    <h3 class="admin-content__all-item-heading">Tổng đơn hàng tháng này</h3>
                                    <h4 class="admin-content__all-item-info"><?php echo count($user_order) ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__item-sold">
                            <i class="fas fa-coins admin-content__item-sold-img"></i>
                                <div class="admin-content__item-sold-content">
                                    <h3 class="admin-content__item-sold-heading">Sản phẩm đã bán tháng này</h3>
                                    <h4 class="admin-content__item-sold-info"><?php echo $all_product - $ex_product ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6 m-12 c-12">
                            <div class="admin-content__item-not-confirm">
                            <i class="fas fa-hand-paper admin-content__item-not-confirm-img"></i>
                                <div class="admin-content__item-not-confirm-content">
                                    <h3 class="admin-content__item-not-confirm-heading">Đơn hàng chưa xác nhận</h3>
                                    <h4 class="admin-content__item-not-confirm-info"><?php echo count($user_order_not_confirmed) ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>