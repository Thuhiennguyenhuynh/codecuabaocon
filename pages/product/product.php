<?php
$sql = "SELECT *FROM product";
$result = $f->getAll($sql);
// print_r($result);
?>

<section id="all_product" class="my-5 overflow-hidden">
  <div class="container py-5 mb-5">

    <div class="section-header d-md-flex justify-content-between align-items-center mb-3">

      <h2 class="display-3 fw-normal">All Product</h2>
      <div>
        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
          shop now
          <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
            <use xlink:href="#arrow-right"></use>
          </svg></a>
      </div>
    </div>

    <div class=" swiper allproduct-swiper">

      <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
              New
            </div> -->
      <?php
      foreach ($result as $value):
      ?>
        <div class="card position-relative">
          <a href="<?= PATH ?>page=detail&id=<?= $value['ID'] ?>"><img src="asset/images/item5.jpg" class="img-fluid rounded-4" alt="image"></a>
          <div class="card-body p-0">
            <a href="<?= PATH ?>page=detail&id=<?= $value['ID'] ?>">
              <h3 class="card-title pt-4 m-0"> <?= $value['Product_Name'] ?></h3>
            </a>

            <div class="card-text">
              <span class="rating secondary-font">
                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                5.0</span>

              <h3 class="secondary-font text-primary"><?= $value['Price'] ?> VND</h3>

              <div class="d-flex flex-wrap mt-3">
                <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                  <h5 class="text-uppercase m-0">Add to Cart</h5>
                </a>
                <a href="#" class="btn-wishlist px-4 pt-3 ">
                  <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                </a>
              </div>


            </div>

          </div>
        </div>
      <?php
      endforeach;
      ?>
    </div>



    <!-- / category-carousel -->


</section>