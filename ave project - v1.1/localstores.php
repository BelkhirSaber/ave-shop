<?php
    $pageName = "LOCAL STORES";
    require_once "includes/head.php";
    echo '<link rel="stylesheet" href="css/custom.css">';
    require_once "includes/header.php";
?>
<section class="locals">
        <!-- Start Header -->
        <div class="page-header">
        <div class="page-overlay">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <span>right</span>
                            <span>way</span>
                            <span>for</span>
                            <span>your</span>
                            <span>modern</span>
                            <span>fashion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Adress -->
    <div class="adress start-end-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="content">
                        <div class="local">
                            <h4>london</h4>
                            <address>180-182 Regent Street, London, W1B 5BT</address>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                            <button class="btn btn-outline-dark">
                                <span>veiw details</span>
                            </button>
                        </div>
                        <div class="local">
                            <h4>new york</h4>
                            <address>109 Columbus Circle, New York, NY 10023</address>
                            <p>Nunc non posuere nisl. Etiam finibus vel dui nec lobortis. Aliquam egestas, sem quis condimentum venenatis, erat leo fermentum dolor, non sollicitudin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.</p>
                            <button class="btn btn-outline-dark">
                                <span>veiw details</span>
                            </button>
                        </div>
                        <div class="local">
                            <h4>paris</h4>
                            <address>2133 Rue Saint-Honoré, 75001 Paris</address>
                            <p>Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.</p>
                            <button class="btn btn-outline-dark">
                                <span>veiw details</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Adress -->
    <!-- Start Map -->
    <div class="my-map start-end-section">
        <div class="fluid-container">
            <div class="content">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.2132034814954!2d10.102197914550503!3d33.88416253401762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x125571cadd63e0af%3A0xe17356ada6569310!2sZEN%20GABES!5e0!3m2!1sfr!2stn!4v1603814748467!5m2!1sfr!2stn" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="local-info">
                    <h4>london</h4>
                    <address>180-182 Regent Street, London, W1B 5BT</address>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                    <div class="info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>180-182 Regent Street, London, W1B 5BT</span>
                    </div>
                    <div class="info">
                        <i class="fas fa-phone-alt"></i>
                        <span>0123-456-789</span>
                    </div>
                    <div class="info">
                        <i class="fas fa-link"></i>
                        <span>www.yourwebsite.com</span>
                    </div>
                    <div class="info">
                        <i class="far fa-envelope"></i>
                        <span>support@yourwebsite.com</span>
                    </div>
                    <div class="info">
                        <i class="far fa-clock"></i>
                        <span>Monday-Friday: 9am to 6pm  Saturday: 10am to 6pm  Sunday: 10am to 2pm</span>
                    </div>
                    <div class="social">
                        <span><i class="fab fa-facebook-f"></i></span>
                        <span><i class="fab fa-twitter"></i></span>
                        <span><i class="fab fa-instagram"></i></span>
                        <span><i class="fab fa-pinterest-p"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map -->
</section>

<?php
    require_once "includes/footer.php";
?>