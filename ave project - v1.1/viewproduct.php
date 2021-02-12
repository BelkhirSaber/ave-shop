<?php
$pageName = "PRODUCT";
require_once "includes/head.php";
echo '<link rel="stylesheet" href="css/custom.css"><!-- custom css style -->';
require_once "includes/header.php";
?>
<section class="product">
    <!-- Start Header Product -->
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
    <!-- End Header Product -->
    <!-- Start View Product -->
    <div class="view-product start-end-section">
        <div class="container">
            <dic class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="content">
                        <div class="card-img">
                            <div id="veiwProductCarousel" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="imgs/viewproduct/class-fashion-style-women-girl-1.png" class="d-block w-100" alt="image fashion">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="imgs/viewproduct/class-fashion-style-women-girl-2.png" class="d-block w-100" alt="image fashion">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#veiwProductCarousel" role="button" data-slide="prev">
                                    <span aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                </a>
                                <a class="carousel-control-next" href="#veiwProductCarousel" role="button" data-slide="next">
                                    <span aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="card-details">
                            <h4>Ave classic sweatshirt</h4>
                            <div class="review-social">
                                <div>
                                    <div class="icon">
                                        <i class="fas fa-star check"></i>
                                        <i class="fas fa-star check"></i>
                                        <i class="fas fa-star check"></i>
                                        <i class="fas fa-star check"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="count">3</span>
                                    <label>review&#40;s&#41;</label>
                                </div>
                                <div>
                                    <a href="#">add review</a>
                                </div>
                                <div>
                                    <label>share: </label>
                                    <span><i class="fab fa-facebook-f"></i></span>
                                    <span><i class="fab fa-twitter"></i></span>
                                    <span><i class="fab fa-google-plus-g"></i></span>
                                    <span><i class="fab fa-pinterest-p"></i></span>
                                    <span><i class="fab fa-instagram"></i></span>
                                    <span><i class="far fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="price">
                                <span class="old"><strong>&euro;</strong>100</span>
                                <span class="new"><strong>&euro;</strong>89</span>
                            </div>
                            <div class="details">
                                <div>
                                    <label>avaibality:</label><span>in stock</span>
                                </div>
                                <div>
                                    <label>product code:</label><span>#745745</span>
                                </div>
                                <div>
                                    <label>tags:</label>
                                    <ul>
                                        <li><a href="#">classic,</a></li>
                                        <li><a href="#">casual,</a></li>
                                        <li><a href="#">v&dash;neck,</a></li>
                                        <li><a href="#">loose</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="description">
                                <p>Donec sem lorem laoreet tempor un risus vitae, rutrum sodales nibh suspendisse est congue metus nunc, id viverra elit loreti rhoncus quis consecteur es. Donec pulvinar tempor lorem a pretium justo interdum.</p>
                                <ul>
                                    <li>Elasticated cuffs</li>
                                    <li>Casual fit</li>
                                    <li>100% Cotton</li>
                                    <li>Free shipping with 4 days delivery</li>
                                </ul>
                            </div>
                            <div class="option">
                                <div class="color">
                                    <label for="color">Color</label>
                                    <select id="color" name="color">
                                        <option value="0">
                                            <span class="black">black</span>
                                        </option>
                                        <option value="1">
                                            <span class="blue">blue</span>
                                        </option>
                                        <option value="2">
                                            <span class="red">red</span>
                                        </option>
                                        <option value="3">
                                            <span class="yellow">yellow</span>
                                        </option>
                                    </select>
                                </div>
                                <div class="size">
                                    <label for="size">size</label>
                                    <select id="size" name="size">
                                        <option value="0">s</option>
                                        <option value="1">m</option>
                                        <option value="2">l</option>
                                        <option value="3">xl</option>
                                        <option value="4">xxl</option>
                                    </select>
                                </div>
                                <div class="quantity">
                                    <label for="quantity">QTY</label>
                                    <select id="quantity" name="quantity">
                                        <option value="0">1</option>
                                        <option value="1">2</option>
                                        <option value="2">3</option>
                                        <option value="3">4</option>
                                        <option value="4">5</option>
                                        <option value="5">6</option>
                                        <option value="6">7</option>
                                        <option value="7">8</option>
                                        <option value="8">9</option>
                                        <option value="9">10</option>
                                    </select>
                                </div>
                                <div class="cart">
                                    <button class="btn btn-outline-dark">
                                        <span><i class="fas fa-shopping-cart"></i></span>
                                        <span>add to cart</span>
                                    </button>
                                    <button class="btn btn-outline-dark">
                                        <span><i class="far fa-heart"></i></span>
                                        <span>add to lookbook</span>
                                    </button>
                                    <a href="#">
                                        <span><i class="fas fa-compress-alt"></i></span>
                                        <span>add to compare</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dic>
        </div>
    </div>
    <!-- End View Product -->
    <!-- Start Information Product -->
    <div class="info-product">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="content">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-link="desc">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-link="video">video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-link="size-specs">size &amp; specs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-link="delivery-returns">delivery &amp; returns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-link="reviews">reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="item desc open">
                                    <h5 class="card-title">Nunc egestas posuere enim, eu maximus erat posuere eget</h5>
                                    <p class="card-text">Sed ut mi mollis, consequat nulla lacinia, hendrerit turpis. Nulla sapien magna, interdum quis pretium nec, pharetra at felis. Curabitur dictum sapien est, eget ultricies turpis porta vel. Nam suscipit nec lacus sed imperdiet. Vestibulum a purus risus. Nulla et dictum augue, nec efficitur mi. Nam sit amet pretium elit. Aliquam congue, ligula id vehicula vestibulum, orci ex vulputate lacus, ac malesuada elit dolor eget ex. Sed quis aliquet risus, ut cursus lectus. In eget lorem tellus.</p>

                                    <p class="card-text">Quisque eleifend varius nisi nec sagittis. Nulla ullamcorper imperdiet justo, ut venenatis purus lobortis ut. Nunc sagittis urna et hendrerit sodales. Nunc molestie risus nec fringilla lacinia. Nulla facilisi. Etiam neque velit, tristique eget sollicitudin eget, placerat at metus. Proin dictum lobortis velit, id suscipit orci faucibus ut. Aliquam erat volutpat. Vivamus feugiat justo in diam placerat, id dignissim elit auctor. Vestibulum scelerisque sem et lobortis ultricies. Morbi suscipit nulla urna. Suspendisse potenti. Nullam varius quam sed nisl dignissim, vel faucibus ipsum blandit. Vivamus at suscipit augue. Nam finibus gravida lorem eu viverra. Praesent rhoncus imperdiet ultricies. Nullam pretium cursus augue auctor vulputate. Quisque a convallis diam commodo eget diam id, eleifend dictum libero. Etiam varius, nisi vel dignissim sodales, enim dui posuere mauris, in aliquet lorem eros eget neque.</p>
                                </div>
                                <div class="item video">
                                    <video controls poster="" preload="auto">
                                        <source src="video/clothing.vid" type="video/webm">
                                        <source src="video/clothing.vid" type="video/ogg">
                                        Sorry, your browser dosen't support video
                                    </video>
                                </div>
                                <div class="item size-specs">
                                    <h5 class="card-title">Size</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt autem laboriosam reprehenderit esse quasi nostrum eum ex explicabo dignissimos vitae, enim eligendi sint dolore commodi ea, odio nemo magni. Sed! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet minus aspernatur enim necessitatibus harum hic quibusdam placeat autem qui et. Aspernatur itaque corporis accusantium unde odit corrupti provident quibusdam minima.</p>
                                    <h5 class="card-title">specs</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt autem laboriosam reprehenderit esse quasi nostrum eum ex explicabo dignissimos vitae, enim eligendi sint dolore commodi ea, odio nemo magni. Sed! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem placeat commodi quis natus earum numquam blanditiis laborum, ullam quae assumenda, veritatis explicabo vitae totam dolor eos odio, ex quam excepturi?</p>
                                </div>
                                <div class="item delivery-returns">
                                    <h5 class="card-title">Delivery</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis sint, praesentium accusantium ut dolores quam architecto voluptate asperiores magni odio dignissimos quasi, eligendi incidunt porro deleniti? Illum totam omnis officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sunt iure sapiente eos, velit minima dolores consectetur nostrum, porro similique nobis soluta animi quas unde laborum excepturi quia officia sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minus hic reiciendis, suscipit necessitatibus distinctio, laborum nostrum sequi aspernatur neque dolores tempora totam? Quidem, id mollitia ullam optio debitis rem.</p>

                                    <h5 class="card-title">Returns</h5>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis sint, praesentium accusantium ut dolores quam architecto voluptate asperiores magni odio dignissimos quasi, eligendi incidunt porro deleniti? Illum totam omnis officiis Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id, cum blanditiis vero saepe est recusandae nesciunt doloremque provident impedit modi ea molestiae repellendus assumenda deleniti maiores optio eum cumque Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur neque fugiat reiciendis, porro veniam libero sit sunt nostrum minima. Tempore, repellat! Sunt omnis, a dolorem explicabo ullam sequi. Veritatis, nam?</p>
                                </div>
                                <div class="item reviews">
                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>06/08/2020</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit lore</p>
                                    </div>

                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>06/03/2019</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>

                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>10/02/2020</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit lore</p>
                                    </div>

                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>06/08/2018</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>

                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>16/05/2018</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit lore</p>
                                    </div>

                                    <div class="comment">
                                        <div>
                                            <span><i class="fas fa-user-circle fa-3x"></i></span>
                                            <h5 class="card-title">name of client</h5>
                                            <span>04/12/2018</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Information Prosuct -->

</section>


<?php
require_once "includes/footer.php";
?>