<?php
include 'utilities_data.php';

foreach ($produit as $value) {
    echo '<div class="col mb-5">
        <div class="card h-100">
            <img class="card-img-top" src="assets/gelules.png" alt="..." />
            <div class="card-body p-4">
                <div class="text-center">
                    <h5 class="fw-bolder">' . $value['title'] . '</h5>
                    <span class="text-muted text-decoration-line-through">'. $value['prix'] . '</span>
                    '. ($value['prix'] * 0.85) . ' €
                </div>
            </div>
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
        </div>
    </div>';
}
?>