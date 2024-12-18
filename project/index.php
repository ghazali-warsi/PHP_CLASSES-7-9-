 
 <?php 
//  session_start();
 include "./basic/startlinks.php";
 include "./basic/header.php";
 include "./config.php";



 ?>
     <!-- home content -->
     <section class="home">
            <div class="content">
                <h3>Biggest Clothe Sale
                    <br> <span>Up To 50% Off</span>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa, totam sed maxime animi facilis!</p>
                <button id="shopnow">Shop Now</button>
            </div>
            <div class="img">
                <img src="./image/b2.png" alt="">
            </div>
        </section>
        <!-- home content -->
    </div>

<!-- top cards -->
<div class="container" id="top-cards">
        <div class="row">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./basic/image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Smart Watch</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$200.30 <strike>$250.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./basic/image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$150.10 <strike>$200.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./basic/image/topcard3.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p><strong>$50.10 <strike>$60</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p>
            <div id="bannerbtn"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->
<?php 

$show = $conn->prepare("SELECT * FROM products");
$show->execute();
$rows = $show->fetchAll();
if(count($rows)> 0)
{
?>
    <div class="container" id="product-cards">
    <h1 class="text-center">PRODUCT</h1>
    <div class="row" style="margin-top: 30px;">
        <?php
    foreach($rows as $data)
    {
        ?>
 <div class="col-md-3 py-3 py-md-0">
     <div class="card">
         <img src="././product/uploads/<?php echo $data['image'] ?>" alt="">
         <div class="card-body">
             <h3><?php echo $data['name']?></h3>
             <p><?php echo $data['description']?></p>
             <div class="star">
                 <i class="fas fa-star checked"></i>
                 <i class="fas fa-star checked"></i>
                 <i class="fas fa-star checked"></i>
                 <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><?php echo $data['price']?> <strike>$50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <?php
}
}



?>
    <!-- product cards -->
    
           
        
           
        </div>

        <a href="clothe.html" id="viewmorebtn">View More</a>
    </div>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">PRODUCT.</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero eius ipsam incidunt illum totam nostrum quidem sit cumque fugit. Accusamus rem praesentium labore tempore ullam porro quaerat fugiat cum ipsum, sint perferendis voluptate ad, quod reiciendis officia! In voluptate quae expedita sunt eum placeat alias soluta. Rem commodi, impedit error doloribus ratione at provident beatae, aut doloremque sunt possimus voluptas recusandae nam aliquid eos quia minus harum repellat quae eveniet laborum dolore esse voluptate sed. Voluptate ullam dolor sapiente neque labore hic nam odio qui consectetur porro minima nesciunt suscipit vitae obcaecati reiciendis itaque ipsum unde, debitis nemo soluta!</p>

    <hr>
</div>
    <!-- product -->


<!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
<!-- offer -->


<?php 

include "./basic/footer.php";
include "./basic/endlinks.php";
?>