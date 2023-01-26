<div id="child<?= $id ?>" class="child-grid">

    <figure>
        <img src="<?=UPLOADS_PATH?>/<?= $img ?>" class="is-rounded" alt="main food item">
    </figure>

    <div id="" class="grid-footer selectBtn">
        <div>
            <label for="PriceTag" style="margin-right: 10px;"><i class="fa-solid
          fa-tag" style="color: red;"></i></label>

            <span name="PriceTag" class="icon">
                <i class="fa-solid fa-peso-sign"></i>
                <span><?= $price ?></span>
            </span>
        </div>
        <div>
            <label for="foodName"><i class="fa-solid fa-utensils"></i></label>
            <span name="foodName">
                <?= $product_name ?>
            </span>
        </div>
        <div id="">
            <p class="control">
                <button id="" onclick="" class="button button-bg-green is-rounded
          is-responsive">
                    <span class="icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                    <span>SELECT</span>
                </button>
            </p>
        </div>
    </div>
    <div id="addtocart${i + 1}" class="addToCartBtn">
        <p class="control1">
            <button id="button" class="button button-bg-green is-rounded
      is-responsive ">
                <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                </span>
                <span><i class="fa-solid fa-cart-shopping"></i></span>
            </button>
        </p>
    </div>

</div>