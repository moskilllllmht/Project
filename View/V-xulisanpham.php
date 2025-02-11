<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Assets/Img/logo.png">
    <link rel="stylesheet" href="./Assets/Css/grid.css">
    <link rel="stylesheet" href="./Assets/Css/base.css">
    <link rel="stylesheet" href="./Assets/Css/main.css">
    <link rel="stylesheet" href="./Assets/Css/responsive.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
    <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
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
                <?php include('./View/menu-admin.php') ?>
            </div>
            <div class="col l-10 m-12 c-12">
                <?php include('./View/header-admin.php') ?>
                <div class="admin-content">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <h3 class="admin-content__heading wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".1s">Sửa thông tin sản phẩm</h3><br>
                        </div>
                        <div class="col l-6 l-o-3 m-12 c-12 wow fadeInUp" data-wow-duration=".5s"  data-wow-delay=".2s">
                            <form action="?controller=xulisanpham&method=edit&id=<?php echo $data_product[0]['id'] ?>" method="post" name="addform" enctype="multipart/form-data">
                                <div class="admin__add-product">
                                    <div class="admin__add-product-item">
                                        <label for="name" class="admin__add-product-label">Tên sản phẩm</label>
                                        <input type="text" name="name" id="name" value="<?php echo $data_product[0]['name'] ?>" placeholder="Tên sản phẩm" class="admin__add-product-input">
                                        <?php if (isset($error['name'])){?> 
                                            <p class="error"><?php echo $error['name']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image" class="admin__add-product-label">Hình ảnh sản phẩm 1</label>
                                        <div class="admin__add-product-image-info">
                                            <img src="<?php echo $data_product[0]['image'] ?>" class="admin__add-product-image-show" alt="">
                                            <input type="file" name="image" id="image" class="admin__add-product-image">
                                        </div>
                                        <?php if (isset($error['image'])){?> 
                                            <p class="error"><?php echo $error['image']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image2" class="admin__add-product-label">Hình ảnh sản phẩm 2</label>
                                        <div class="admin__add-product-image-info">
                                            <img src="<?php echo $data_product[0]['image2'] ?>" class="admin__add-product-image-show" alt="">
                                            <input type="file" name="image2" id="image2" class="admin__add-product-image">
                                        </div>
                                        <?php if (isset($error['image2'])){?> 
                                            <p class="error"><?php echo $error['image2']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image3" class="admin__add-product-label">Hình ảnh sản phẩm 3</label>
                                        <div class="admin__add-product-image-info">
                                            <img src="<?php echo $data_product[0]['image3'] ?>" class="admin__add-product-image-show" alt="">
                                            <input type="file" name="image3" id="image3" class="admin__add-product-image">
                                        </div>
                                        <?php if (isset($error['image3'])){?> 
                                            <p class="error"><?php echo $error['image3']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="image4" class="admin__add-product-label">Hình ảnh sản phẩm 4</label>
                                        <div class="admin__add-product-image-info">
                                            <img src="<?php echo $data_product[0]['image4'] ?>" class="admin__add-product-image-show" alt="">
                                            <input type="file" name="image4" id="image4" class="admin__add-product-image">
                                        </div>
                                        <?php if (isset($error['image4'])){?> 
                                            <p class="error"><?php echo $error['image4']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="price" class="admin__add-product-label">Giá sản phẩm</label>
                                        <input type="text" name="price" value="<?php echo $data_product[0]['price'] ?>" id="price" placeholder="Giá sản phẩm" class="admin__add-product-input">
                                        <?php if (isset($error['price'])){?> 
                                            <p class="error"><?php echo $error['price']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="desc" class="admin__add-product-label">Mô tả sản phẩm</label>
                                        <textarea name="desc" id="desc" placeholder="Mô tả" class="admin__add-product-textarea"><?php echo $data_product[0]['description'] ?></textarea>
                                        <?php if (isset($error['description'])){?> 
                                            <p class="error"><?php echo $error['description']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="catalog" class="admin__add-product-label">Danh mục sản phẩm</label>
                                        <select name="catalog" id="catalog" class="admin__add-product-select">
                                            <?php foreach ($catalog_all as $key => $value){ ?>
                                                <option <?php if( $data_product[0]['catalog'] == $value['id']){ echo "selected=\"selected\""; } ?> value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    <?php if (isset($error['catalog'])){?> 
                                        <p class="error"><?php echo $error['catalog']; ?></p>
                                    <?php } ?>
                                    </div>
                                    <div class="admin__add-product-item">
                                        <label for="qty" class="admin__add-product-label">Số lượng sản phẩm</label>
                                        <input type="text" name="qty" value="<?php echo $data_product[0]['qty'] ?>" id="qty" placeholder="Số lượng sản phẩm" class="admin__add-product-input">
                                        <?php if (isset($error['qty'])){?> 
                                            <p class="error"><?php echo $error['qty']; ?></p>
                                        <?php } ?>
                                    </div>
                                    <input type="submit" value="Sửa sản phẩm" name="edit-product" class="admin__add-product-btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <script type="text/javascript" src="./Assets/JS/topbtn.js"></script>
</body>
</html>