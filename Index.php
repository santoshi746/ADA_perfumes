<?php
$con = mysqli_connect("localhost","root", "", "ada_perfumes");
$sql = "SELECT * FROM `new_products`";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

    <title>Document</title>
</head>
<body>
    <!--navbar start-->
     <nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand gradient-text" href="#">ADA Perfumes </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
      <div class="navbar-icons">
        <i class="bi bi-search"></i>
        <i class="bi bi-bag cart-badge"></i>
      </div>
    </div>
  </div>
</nav>
<!--navbar close-->
<!--Carousel start-->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/premium-photo/beautiful-translucent-pink-square-perfume-bottle-sits-reflective-surface-against-backdrop-magenta-clouds-glowing-pink-light_14117-39352.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block carousel-caption-one">
        <h5>For Women</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/034/078/974/small_2x/generative-ai-bottle-of-perfume-on-a-blue-silk-background-glass-flask-with-blue-fragrance-packaging-design-mock-up-free-photo.jpg" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block carousel-caption-two">
        <h5>For Men</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
            </div>
<!--carousel end-->
 <div class="daily-deal">
              <h1>Fresh Arrivals</h1>
              <div class="divider">
                <span></span>
                <i class="bi bi-flower1 gradient-text"></i>
                <span></span>
              </div>
              <p>Discover the latest additions to our collection. Fresh styles and hot trends, just for you!</p>
            </div>
            <div class="custom-row">
                <div class="custom-col">
                    <div class="custom-card">
                        <div class="custom-card-img-wrapper">
                        <img src="https://bellavitaorganic.com/cdn/shop/files/Date_woman_100_ml_1.jpg?v=1728029584&width=1000" class="custom-card-img default-img" />
                        <img src="https://secrettemptation.in/cdn/shop/files/ST_Romance_1000x1000_copy_2.jpg?v=1718263911" class="custom-card-img hover-img" />
                        </div>
                        <div class="custom-card-overlay">
                            <span class="custom-collection-label">COLLECTION</span>
                            <h2 class="custom-card-title">PERFUMES</h2>
                        </div>
                    </div>
                </div>

                <div class="custom-col">
                    <div class="custom-card">
                        <div class="custom-card-img-wrapper">
                        <img src="https://cdn11.bigcommerce.com/s-lz8bx8sb7m/images/stencil/1280x1280/products/573/1069/Lavender_EO__73051.1641905488.jpg?c=1" class="custom-card-img default-img" />
                        <img src="https://french-factor.com/cdn/shop/files/SOULORIGINAL1.jpg?v=1742382935&width=1500" class="custom-card-img hover-img" />
                        </div>
                        <div class="custom-card-overlay">
                    <span class="custom-collection-label">COLLECTION</span>
                    <h2 class="custom-card-title">ESSENTIAL OIL</h2>
                </div>
            </div>
                </div>

                <div class="custom-col">
                    <div class="custom-card">
                        <div class="custom-card-img-wrapper">
                        <img src="https://rukminim2.flixcart.com/image/850/1000/kura1e80/attar/y/m/z/oudh-attar-pure-natural-undiluted-attar-for-men-women-alchol-original-imag7tccpzgnecqk.jpeg?q=90&crop=false" class="custom-card-img default-img" />
                        <img src="https://www.byrdie.com/thmb/QgV3af9boDFlUpokn8sWTABB-NY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/perfumeingredients-ecb21fb46eb6433e822df835edd919c6.png" class="custom-card-img hover-img" />
                        </div>
                        <div class="custom-card-overlay">
                    <span class="custom-collection-label">COLLECTION</span>
                    <h2 class="custom-card-title">ATTAR</h2>
                </div>
            </div>
            </div>
            </div>
            <section class="how-it-works">
            <div class="daily-deal">
              <h1>Why Choosing us ?</h1>
              <div class="divider">
                <span></span>
                <i class="bi bi-flower1 gradient-text"></i>
                <span></span>
              </div>
            </div>
             <div class="how-container">
    <div class="how-card">
      <img src="./Assets/flower.jpeg" alt="Select location" class="how-icon"/>
      <h3>Natural Ingredients</h3>
      <p>Choose the location where your food will be delivered.</p>
    </div>
    <div class="how-card">
      <img src="./Assets/fruit.png" alt="Choose order" class="how-icon"/>
      <h3>Floral Fragrance</h3>
      <p>Check over hundreds of menus to pick your favorite food.</p>
    </div>
    <div class="how-card">
      <img src="./Assets/leaf.jpeg" alt="Pay" class="how-icon"/>
      <h3>Hypoallergenic 100%</h3>
      <p>It's quick, safe, and simple. Select several methods of payment.</p>
    </div>
    <div class="how-card">
      <img src="./Assets/perfume_one.jpeg" alt="Enjoy meals" class="how-icon"/>
      <h3>100% Organic</h3>
      <p>Food is made and delivered directly to your home.</p>
    </div>
  </div>
            </section>
            <div className="popular-slider-container">
            <div class="daily-deal">
              <h1>New Arrivals</h1>
              <div class="divider">
                <span></span>
                <i class="bi bi-flower1 gradient-text"></i>
                <span></span>
              </div>
              <p>Be the first to experience the latest fragrances fresh off the runway.</p>
            </div>
    <!-- Carousel -->
<div class="container">
    <div class="owl-carousel perfume-carousel owl-theme ">
  <!-- Card 1 -->
   <?php

   if(mysqli_num_rows($res)>0){
                while($row = mysqli_fetch_array($res)){
   ?>
  <div class="item text-center">
    <img src="CRM/Product/<?php echo $row['Img1'];?>" class="img-fluid" alt="Perfume" style="transition: opacity 0.7s;" onmouseover="this.src='CRM/Product/Images/<?php echo $row['Img2']; ?>'" onmouseout="this.src='CRM/Product/<?php echo $row['Img1']; ?>'">
    <p><?php echo $row['Product_Name'];?></p>
    <p><strong> &#8377; <?php echo $row['SellingPrice'];?> </strong> <s class="text-muted">&#8377; <?php echo $row['DisplayCost'];?></s></p>
    <p><i class="bi bi-star-fill text-warning"></i> 5.0 <i class="bi bi-patch-check-fill text-purple"></i> (1 Reviews)</p>
    <button class="btn btn-dark addToCartBtn" data-name="<?php echo $row['Product_Name']; ?>"
    data-price="<?php echo $row['SellingPrice']; ?>"
    data-img="CRM/Product/<?php echo $row['Img1']; ?>" data-stock="<?php echo $row['Units']; ?>">+ ADD TO CART</button>
  </div>
<?php
                }
              }
?>
 
</div>
</div>
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="cartOffcanvasLabel"><i class="bi bi-bag"></i> 1 item</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div id="cartContent">
      <!-- Dynamic cart items will go here -->
    </div>
    <p class="text-success fw-bold mt-3">Super Fast & Free Delivery + Additional upto 10% OFF on all Prepaid Orders</p>
    <button class="btn btn-dark w-100" id="checkout-btn">CHECKOUT ▪ ₹ <span id="totalAmount">0.00</span></button>
  </div>
</div>
<div className="popular-slider-container">
            <div class="daily-deal">
  <h1>Offers Available</h1>
  <div class="divider">
    <span></span>
    <i class="bi bi-flower1 gradient-text"></i>
    <span></span>
  </div>
  <p>Curated gift boxes and combo deals — perfect for you or someone special.</p>
</div>

<div class="container">
    <div class="owl-carousel perfume-carousel owl-theme ">
  <!-- Card 1 -->
  <div class="item text-center">
    <img src="https://cdn.pixabay.com/photo/2021/02/13/23/23/perfume-6013027_1280.jpg" class="img-fluid" alt="Perfume">
    <p>Perfume</p>
    <p><strong>Rs. 877</strong> <s class="text-muted">Rs. 1,999.00</s></p>
    <p><i class="bi bi-star-fill text-warning"></i> 5.0 <i class="bi bi-patch-check-fill text-purple"></i> (1 Reviews)</p>
    <button class="btn btn-dark">+ ADD TO CART</button>
  </div>

  <!-- Card 2 -->
  <div class="item text-center">
    <img src="https://cdn.pixabay.com/photo/2021/02/13/23/23/perfume-6013027_1280.jpg" class="img-fluid" alt="Perfume">
    <p>Perfume</p>
    <p><strong>Rs. 300</strong> <s class="text-muted">Rs. 1,999.00</s></p>
    <p><i class="bi bi-star-fill text-warning"></i> 5.0 <i class="bi bi-patch-check-fill text-purple"></i> (1 Reviews)</p>
    <button class="btn btn-dark">+ ADD TO CART</button>
  </div>

  <!-- Card 3 -->
  <div class="item text-center">
    <img src="https://cdn.pixabay.com/photo/2021/02/13/23/23/perfume-6013027_1280.jpg" class="img-fluid" alt="Perfume">
    <p>Perfume</p>
    <p><strong>Rs. 2000</strong> <s class="text-muted">Rs. 1,999.00</s></p>
    <p><i class="bi bi-star-fill text-warning"></i> 5.0 <i class="bi bi-patch-check-fill text-purple"></i> (1 Reviews)</p>
    <button class="btn btn-dark">+ ADD TO CART</button>
  </div>

  <!-- Card 4 -->
  <div class="item text-center">
    <img src="https://cdn.pixabay.com/photo/2021/02/13/23/23/perfume-6013027_1280.jpg" class="img-fluid" alt="Perfume">
    <p>Perfume</p>
    <p><strong>Rs. 1000</strong> <s class="text-muted">Rs. 1,999.00</s></p>
    <p><i class="bi bi-star-fill text-warning"></i> 5.0 <i class="bi bi-patch-check-fill text-purple"></i> (1 Reviews)</p>
    <button class="btn btn-dark">+ ADD TO CART</button>
  </div>
</div>
</div>
<div class="counter-section ">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="counter-number" data-target="20">0</div>
        <div class="counter-label">Events Completed</div>
      </div>
      <div class="col-md-3">
        <div class="counter-number" data-target="100">0</div>
        <div class="counter-label">Happy Clients</div>
      </div>
      <div class="col-md-3">
        <div class="counter-number" data-target="100">0</div>
        <div class="counter-label">Interns</div>
      </div>
      <div class="col-md-3">
        <div class="counter-number" data-target="50">0</div>
        <div class="counter-label">Volunteers</div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
 $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items:4,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
            
        },
        1200:{
            items:4,
        }
    }
  });
});
 const counters = document.querySelectorAll('.counter-number');

  counters.forEach(counter => {
    const animate = () => {
      const value = +counter.getAttribute('data-target');
      const data = +counter.innerText;

      const speed = 20; // lower is faster
      const increment = Math.ceil(value / speed);

      if (data < value) {
        counter.innerText = data + increment;
        setTimeout(animate, 30);
      } else {
        counter.innerText = value + '+';
      }
    };

    animate();
  });
</script>
<script>
document.querySelectorAll('.addToCartBtn').forEach(button => {
  button.addEventListener('click', function() {
    const name = this.dataset.name;
    const price = parseFloat(this.dataset.price);
    const img = this.dataset.img;
    const stock = parseInt(this.dataset.stock);
    // Update Cart Content
    const cartHTML = `
  <div class="d-flex align-items-center mb-3 cart-item" data-price="${price}" data-stock="${stock}">
    <img src="${img}" alt="${name}" width="60" class="me-3">
    <div>
      <h6 class="mb-0">${name}</h6>
      <small class="text-muted item-total">Rs. ${price.toFixed(2)}</small>

      <div class="d-flex align-items-center mt-2 gap-2">
        <button class="btn btn-outline-dark btn-sm" onclick="decreaseQty(this)">-</button>
        <input type="text" class="form-control text-center p-0" value="1" style="width: 40px;" readonly>
        <button class="btn btn-outline-dark btn-sm" onclick="increaseQty(this)">+</button>
      </div>
    </div>
  </div>
`;
    document.getElementById('cartContent').innerHTML = cartHTML;
    document.getElementById('totalAmount').innerText = price.toFixed(2);

    // Show Offcanvas
    const offcanvas = new bootstrap.Offcanvas(document.getElementById('cartOffcanvas'));
    offcanvas.show();
  });
});
function increaseQty(button) {
  const input = button.parentElement.querySelector('input');
  const cartItem = button.closest('.cart-item');
  const stock = parseInt(cartItem.dataset.stock);

  let value = parseInt(input.value);
  if (!isNaN(value)) {
    if (value < stock) {
      input.value = value + 1;
      updateCartItemTotal(button); // Optional if item total shown
      updateCartTotal();           // Updates overall cart total
    } else {
      alert("Only " + stock + " items available in stock.");
    }
  }
}

function decreaseQty(button) {
  const input = button.parentElement.querySelector('input');
  let value = parseInt(input.value);
  if (!isNaN(value) && value > 1) {
    input.value = value - 1;
    updateCartItemTotal(button);
    updateCartTotal();
  }
}

function updateCartItemTotal(button) {
  const item = button.closest('.cart-item');
  const price = parseFloat(item.dataset.price);
  const qty = parseInt(item.querySelector('input').value);
  const itemTotalEl = item.querySelector('.item-total');
  itemTotalEl.innerText = `Rs. ${(price * qty).toFixed(2)}`;
}

function updateCartTotal() {
  let total = 0;
  document.querySelectorAll('.cart-item').forEach(item => {
    const price = parseFloat(item.dataset.price);
    const qty = parseInt(item.querySelector('input').value);
    total += price * qty;
  });

  // Update total in button
  document.getElementById('checkout-btn').innerText = `CHECKOUT ▪ ₹ ${total.toFixed(2)}`;

  // Optionally update other total displays
  const totalAmount = document.getElementById('totalAmount');
  if (totalAmount) totalAmount.innerText = total.toFixed(2);
}

</script>

</body>
</html>