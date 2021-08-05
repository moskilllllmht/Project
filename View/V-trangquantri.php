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
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý website</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý nhân viên</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="?controller=quanlysanpham" class="admin-menu__item-link">Quản lý sản phẩm</a>
                        </li>
                        <li class="admin-menu__item">
                            <a href="#" class="admin-menu__item-link">Quản lý bình luận</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l-10 m-12 c-12">
                <div class="admin-header">
                    <div class="admin-header__sections">
                        <label for="" class="admin-menu-icon"><i class="fas fa-bars"></i></label>
                        <a href="?controller=trangchu" class="admin-header__back-to-website"><i class="fas fa-backward"></i> Trở về website</a>
                        <label for="" class="admin-menu-icon-search"><i class="fas fa-search"></i></label>
                        <div class="admin-header__search">
                            <input type="search" name="search" placeholder="Tìm kiếm" class="admin-header__search-input">
                        </div>
                        <div class="admin-header__notify">
                            <a href="#" class="admin-header__notify-item"><i class="fas fa-bell"></i></a>
                            <a href="#" class="admin-header__notify-item"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="admin-header__admin-info">
                        <h3 class="admin-header__admin-name"><?php echo $admin[0]['fullname'] ?></h3>
                        <a href="?controller=dangxuatquantri" class="admin-header__admin-logout">Thoát</a>
                    </div>
                </div>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading">Thống kê</h3><br>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="admin-content__profit">
                                <i class="fas fa-money-bill-wave-alt admin-content__profit-img"></i>
                                <div class="admin-content__profit-content">
                                    <h3 class="admin-content__profit-heading">Doanh thu</h3>
                                    <h4 class="admin-content__profit-info">7.950.000đ</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="admin-content__all-item">
                            <i class="fas fa-box admin-content__all-item-img"></i>
                                <div class="admin-content__all-item-content">
                                    <h3 class="admin-content__all-item-heading">Tổng đơn hàng</h3>
                                    <h4 class="admin-content__all-item-info">122</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="admin-content__item-sold">
                            <i class="fas fa-coins admin-content__item-sold-img"></i>
                                <div class="admin-content__item-sold-content">
                                    <h3 class="admin-content__item-sold-heading">Đã bán</h3>
                                    <h4 class="admin-content__item-sold-info">102</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6">
                            <div class="admin-content__item-not-confirm">
                            <i class="fas fa-hand-paper admin-content__item-not-confirm-img"></i>
                                <div class="admin-content__item-not-confirm-content">
                                    <h3 class="admin-content__item-not-confirm-heading">Chưa xác nhận</h3>
                                    <h4 class="admin-content__item-not-confirm-info">20</h4>
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