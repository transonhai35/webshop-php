<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../../assets/css/base.css">
    <link rel="stylesheet" href="./detailsProd.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.0.0-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body >
    <?php require '../partials/header.php'; ?>
    <div class="app" style="background-color: var(--border-color)!important; padding: 12px 0 12px 0;">
               <div class="grid">
                    <div class="grid__row app__content">
                        <div class="grid__column-5">
                         <nav class="category">
                             <h3 class="category__heading">Danh mục</h3>
                         </nav>
                        </div>
                        <div class="grid__column-7">
                            <span class="home-filter__label">Sắp xếp theo</span>
                        </div>
                    </div>
                    <div class="home-product">
                        <div class="grid__row" id="home-product-item">
                            <!-- product item -->
                            <?php 
                        require '../../data/product.php';

                        foreach ($products as $x):
                            {
                                $prod = (array) $x;
                                
                            };
                            ?>
                                <div class="grid__column-2-4">
                                            <a class="home-product-item" href="/view/detailsProd/detailsProd.php">
                                                <div class="home-product-item__img" style="background-image: url(<?php echo $prod['image'] ?>);"></div>
                                                <h4 class="home-product-item__name"><?php echo $prod['title'] ?></h4>
                                                <div class="home-product-item__price">
                                                    <span class="home-product-item__price-old"><?php echo $prod['old-price'] ?></span>
                                                    <span class="home-product-item__price-current"><?php echo $prod['new-price'] ?></span>    
                                                </div>
                                                <div class="home-product-item__action">
                                                    <span class="home-product-item__like home-product-item__like--liked">
                                                        <i class="home-product-item__like-icon-emty far fa-heart"></i>
                                                        <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                    </span>
                                                    <div class="home-product-item__rating">
                                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                        <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <span class="home-product-item__sold"><?php echo $prod['produce-sold'] ?> đã bán</span>
                                                </div>
                                                <div class="home-product-item__origin">
                                                    <span class="home-product-item__brand"><?php echo $prod['brand'] ?></span>
                                                    <span class="home-product-item__origin-name"><?php echo $prod['origin-name'] ?></span>
                                                </div>
                                                <div class="home-product-item__favourite">
                                                    <i class="fa-solid fa-check"></i>
                                                    <span>Yêu thích</span>
                                                </div>
                                                <div class="home-product-item__sale-off">
                                                    <span class="home-product-item__sale-off-percent"><?php echo $prod['sale'] ?></span>
                                                    <span class="home-product-item__sale-off-label">GIẢM</span>
                                                </div>
                                            </a>
                                        </div>

                        <?php endforeach; ?>

                        </div>
                    </div>

               </div>
    </div>
    <?php require '../partials/footer.php'; ?>
</body>
</html>
