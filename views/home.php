
<?php require('./views/partials/header.php') ?>


<div class="app__container">
       <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-2">
                 <nav class="category">

                     <h3 class="category__heading">Danh mục</h3>
 
                     <ul class="category-list">
                         <li class="category-item category-item--active">
                         <a href="#" class="category-item__link">Ami bụng bự 1</a>
                         </li>
                         <li class="category-item">
                         <a href="#" class="category-item__link">Ami bụng bự 2</a>
                     </li>
                         <li class="category-item">
                         <a href="#" class="category-item__link">Ami bụng bự 3</a>
                         </li>
                     </ul>
                 </nav>
                </div>

                <div class="grid__column-10">
                    <div class="home-filter">
                    <span class="home-filter__label">Sắp xếp theo</span>
                    <button class="home-filter__btn btn">Phổ biến</button>
                    <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                    <button class="home-filter__btn btn">Bán chạy</button>

                    <div class="select-input">
                        <span class="select-input__label">Giá</span>
                        <i class="select-input__icon fa-solid fa-angle-down"></i>
                        <ul class="select-input__list">
                            <li class="aelect-input__item">
                                <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                            </li>
                            <li class="aelect-input__item">
                                <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                            </li>
                        </ul>
                    </div>

                    <div class="home-filter__page">
                        <span class="home-filter__page-num">
                            <span class="home-filter__page-current">1</span>/14
                        </span>

                        <div class="home-filter__page-control">
                            <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                <i class="home-filter__page-icon fa-solid fa-angle-left"></i>
                            </a>
                            <a href="" class="home-filter__page-btn">
                                <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="home-product">
                        <div class="grid__row" id="home-product-item">
                            <!-- product item -->
                            <?php 
                        require './data/product.php';

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

                    <ul class="pagination home-product__pagination">
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                            </a>
                        </li>

                        <li class="pagination-item pagination-item--active">
                            <a href="" class="pagination-item__link">1</a>
                        </li>  <li class="pagination-item">
                            <a href="" class="pagination-item__link">2</a>
                        </li>  <li class="pagination-item">
                            <a href="" class="pagination-item__link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">4</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">5</a>
                        </li>  <li class="pagination-item">
                            <a href="" class="pagination-item__link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">14</a>
                        </li>

                        <li class="pagination-item">
                            <a href="" class="pagination-item__link">
                                <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
       </div>
    </div>

<?php require('./views/partials/footer.php') ?>