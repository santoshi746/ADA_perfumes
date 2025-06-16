<?php
$conn = mysqli_connect("localhost","root","","ada_perfumes");
if(isset($_POST['Add_Product'])){
  $id = $_POST['Id'];
  $Product_name = $_POST['productName'];
  $Product_type=$_POST['productType'];
  $gender = $_POST['gender'];
  $ML = $_POST['ml'];
  $category=$_POST['category'];
  $Cost_price=$_POST['costPrice'];
  $margin = $_POST['price'];
  $total = $_POST['total'];
  $courier=$_POST['courierCharge'];
  $box_charge=$_POST['boxCharge'];
  $package=$_POST['packageCost'];
  $DMcost=$_POST['digitalMarketingCost'];
  $display_cost=$_POST['displayCost'];
  $selling_price=$_POST['sellingPrice'];
  $seller_name=$_POST['sellerName'];
  $units=$_POST['units'];
  $upload_main=$_FILES['img1']['name'];
  $upload_2=$_FILES['img2']['name'];
  $upload_3=$_FILES['img3']['name'];
  $upload_4=$_FILES['img4']['name'];
  $upload_5=$_FILES['img5']['name'];
  $sql = "INSERT INTO `new_products`(`Id`, `Product_Name`, `Product_Type`, `Gender`, `ML`, `Category`, `CostPrice`, `Margin`, `Total`,
   `Courier`, `BoxCharge`, `PackageCost`, `DMCost`, `DisplayCost`, `SellingPrice`, `SellerName`, `Units`, `Img1`, `Img2`, `Img3`, `Img4`,
    `Img5`) VALUES ('$id','$Product_name','$Product_type','$gender','$ML','$category','$Cost_price','$margin','$total',
    '$courier','$box_charge','$package','$DMcost','$display_cost','$selling_price','$seller_name','$units','$upload_main','$upload_2','$upload_3','$upload_4','$upload_5')";
    $result = mysqli_query($conn,$sql);
    if($result){
      move_uploaded_file($_FILES['img1']['tmp_name'],"Product/".$_FILES['img1']['name']);
      move_uploaded_file($_FILES['img2']['tmp_name'],"Product/Images/".$_FILES['img2']['name']);
      move_uploaded_file($_FILES['img3']['tmp_name'],"Product/Images/".$_FILES['img3']['name']);
      move_uploaded_file($_FILES['img4']['tmp_name'],"Product/Images/".$_FILES['img4']['name']);
      move_uploaded_file($_FILES['img5']['tmp_name'],"Product/Images/".$_FILES['img5']['name']);
        echo "submitted successfully";
    }else{
      echo "error found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 sticky-top">
    <button class="btn btn-outline-light d-md-none" id="toggleSidebar">☰</button>
    <a class="navbar-brand ms-3" href="#">Admin Panel</a>
  </nav>

  <div class="d-flex">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-primary text-white p-3">
      <h5 class="mb-4">Menu</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a class="nav-link text-white" href="#" id="showDashboard">Dashboard</a></li>
        <li class="nav-item mb-2"><a class="nav-link text-white" href="#" id="showUsers">Add Product</a></li>
        <li class="nav-item mb-2"><a class="nav-link text-white" href="#" id="showOrders">Orders</a></li>
      </ul>
    </div>

    <!-- Main content -->
    <div class="p-4 flex-grow-1 w-100">
      <!-- Dashboard content -->
      <div id="dashboardSection">
        <h2>Dashboard</h2>
        <div class="row g-4">

    <!-- Payment Refund -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Payment Refund</div>
            <div class="status-value">490</div>
          </div>
          <div class="status-icon"><i class="bi bi-wallet2"></i></div>
        </div>
      </div>
    </div>

    <!-- Order Cancel -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Order Cancel</div>
            <div class="status-value">241</div>
          </div>
          <div class="status-icon"><i class="bi bi-cart-x-fill"></i></div>
        </div>
      </div>
    </div>

    <!-- Order Shipped -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Order Shipped</div>
            <div class="status-value">630</div>
          </div>
          <div class="status-icon"><i class="bi bi-cart-x-fill"></i></div>
        </div>
      </div>
    </div>

    <!-- Order Delivering -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Order Delivering</div>
            <div class="status-value">170</div>
          </div>
          <div class="status-icon"><i class="bi bi-arrow-right-square-fill"></i></div>
        </div>
      </div>
    </div>

    <!-- Pending Review -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Pending Review</div>
            <div class="status-value">210</div>
          </div>
          <div class="status-icon"><i class="bi bi-calendar-check"></i></div>
        </div>
      </div>
    </div>

    <!-- Pending Payment -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Pending Payment</div>
            <div class="status-value">608</div>
          </div>
          <div class="status-icon"><i class="bi bi-clock-fill"></i></div>
        </div>
      </div>
    </div>

    <!-- Delivered -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">Delivered</div>
            <div class="status-value">200</div>
          </div>
          <div class="status-icon"><i class="bi bi-hourglass-bottom"></i></div>
        </div>
      </div>
    </div>

    <!-- In Progress -->
    <div class="col-md-3 my-2 col-sm-6">
      <div class="status-card">
        <div class="d-flex justify-content-between">
          <div>
            <div class="status-title">In Progress</div>
            <div class="status-value">656</div>
          </div>
          <div class="status-icon"><i class="bi bi-clipboard-check-fill"></i></div>
        </div>
      </div>
    </div>

  </div>
 
  <div class="mt-5">
    <h2>All Product List</h2>
  <table class="table table-hover align-middle">
    <tr>
      <th>Product Name</th>
      <th>ML</th>
      <th>Price without margin</th>
      <th>Price with margin</th>
      <th>Stock</th>
      <th>Category</th>
      <th>Products sold</th>
    </tr>
     <?php
$sql2 = "SELECT * from `new_products`";
$result2 = mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
                while($row = mysqli_fetch_array($result2)){
?>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img src="Product/<?php echo $row['Img1'];?>" alt="" width="40" class="rounded me-2">
          <div>
            <div><?php echo $row['Product_Name'];?></div>
        </div>
      </td>
      <td><?php echo $row['ML'];?></td>
      <td><?php echo $row['CostPrice'];?></td>
      <td><?php echo $row['SellingPrice'];?></td>
      <td><?php echo $row['Units'];?></td>
      <td><?php echo $row['Category'];?></td>
      <td>5</td>
    </tr>
    <?php
                }
              }
    ?>
  </table>
  </div>
      </div>
      <!-- Users form -->
      <div id="userFormSection" style="display: none;">
          <div class="flex-container">
    <div class="form-section">
      <div class="container">
  <div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
      <h1 class="display-6">Submit Product</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="Id">
      <div class="card">
        <div class="card-header">
          <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
            <li class="nav-item"> <a data-toggle="pill" href="#product-tab" class="nav-link active">Product Details </a> </li>
            <li class="nav-item"> <a data-toggle="pill" href="#pricing-tab" class="nav-link"> Pricing</a> </li>
            <li class="nav-item"> <a data-toggle="pill" href="#seller-tab" class="nav-link">Uploads</a> </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <!-- Product Details Tab -->
            <div id="product-tab" class="tab-pane fade show active">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control text-uppercase" name="productName" id="productName" maxlength="16">
                <small id="nameError" class="text-danger d-none">Invalid: No special characters allowed and max 16 characters.</small>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Product Type</label>
                  <select class="form-control" id="productType" name="productType">
                    <option value="Perfume">Perfume</option>
                    <option value="Attar">Attar</option>
                    <option value="Essense Oil">Essence Oil</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Gender</label>
                  <select class="form-control" id="gender" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Unisex">Unisex</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>ML</label>
                  <select class="form-control" id="ml" name="ml">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" id="category" name="category">
                  <option value="Fresh/Summer">Fresh/Summer</option>
                  <option value="Office">Office</option>
                  <option value="Winter">Winter</option>
                  <option value="Party/Date">Party/Date</option>
                  <option value="Super Intense/Long-Lasting">Super Intense/Long-Lasting</option>
                  <option value="Most Selling Fragrance That Customer Loves Man">Most Selling Fragrance That Customer Loves Man</option>
                  <option value="Most Selling Fragrance That Customer Loves Woman">Most Selling Fragrance That Customer Loves Woman</option>
                  <option value="New Arrivals">New Arrivals</option>
                </select>
              </div>
            </div>

            <!-- Pricing Tab -->
            <div id="pricing-tab" class="tab-pane fade">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Cost Price Rs.</label>
                  <input type="number" class="form-control" id="costPrice" name="costPrice">
                </div>
                <div class="form-group col-md-4">
                  <label>Margin (%)</label>
                  <input type="number" class="form-control" id="margin" name="price">
                  <small id="marginError" class="text-danger d-none">Margin must be between 10% and 300%</small>
                </div>
                <div class="form-group col-md-4">
                  <label>Total Rs. </label>
                  <input type="text" class="form-control" id="total" name="total" readonly>
                </div>
              </div>
             <div class="form-row">
    <div class="form-group col-md-4">
      <label>Courier Charge Rs.</label>
      <select class="form-control" id="courierCharge" name="courierCharge">
        <option value="60">60</option>
        <option value="80">80</option>
        <option value="90">90</option>
        <option value="120">120</option>
        <option value="140">140</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Box Charge Rs.</label>
      <input type="number" class="form-control" id="boxCharge" name="boxCharge">
    </div>
    <div class="form-group col-md-4">
      <label>Package Cost Rs.</label>
      <input type="number" class="form-control" id="packageCost" name="packageCost">
    </div>
  </div>

  <!-- Package Cost and Digital Marketing Cost -->
  <div class="form-row"> 
    <div class="form-group col-md-4">
      <label>DM Cost Rs.</label>
      <input type="number" class="form-control" id="digitalMarketingCost" name="digitalMarketingCost">
    </div>
    <div class="form-group col-md-4">
      <label>Display Cost Rs.</label>
      <input type="text" class="form-control" id="displayCost" name="displayCost">
    </div>
    <div class="form-group col-md-4">
      <label>Selling Price Rs.</label>
      <input type="text" class="form-control" id="sellingPrice" name="sellingPrice" readonly>
    </div>
  </div>              
            </div>

            <!-- Seller/Uploads Tab -->
            <div id="seller-tab" class="tab-pane fade">
              <div class="form-group">
                <label>Seller Name</label>
                <input type="text" class="form-control" id="sellerName" name="sellerName">
              </div>
              <div class="form-group">
                <label>Units</label>
                <input type="number" class="form-control" id="units" name="units">
              </div>
              <div class="form-group">
                <label>Upload Product Image</label>
                <input type="file" class="form-control" id="productImage" name="img1" accept="image/*">
              </div>
              <div class="form-group">
             <label>Additional Product Images</label>
            <div style="display: flex; gap: 5px; flex-wrap: wrap;">
              <input type="file" class="form-control" accept="image/*" name="img2" style="width: 40%;">
              <input type="file" class="form-control" accept="image/*" name="img3" style="width: 40%;">
            </div>
            <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <input type="file" class="form-control" accept="image/*" name="img4" style="width: 40%;">
          <input type="file" class="form-control" accept="image/*" name="img5" style="width: 40%;">
           </div>
            </div>
              <button type="submit" name="Add_Product" class="btn btn-primary btn-block my-4">Submit Product</button>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

    </div>

    <div class="card-section">
      <div class="card text-center">
        <img src="https://cdn.pixabay.com/photo/2021/02/13/23/23/perfume-6013027_1280.jpg" id="productPreview" class="card-img-top" alt="Perfume">
        <div class="card-body">
          <h6 class="card-title perfume">Perfume</h6>
          <p>
            <span class="price">Rs. 1000</span>
            <span class="original-price">Rs. 1,999.00</span>
          </p>
          <p>
            <i class="fas fa-star star"></i> 5.0
            <i class="fas fa-shield-alt review-icon"></i> (1 Reviews)
          </p>
          <button class="btn btn-cart">+ ADD TO CART</button>
        </div>
      </div>
    </div>
  </div>
      </div>
      <script>
        // cost price, product name
       const costPriceInput = document.getElementById('costPrice');
  const marginInput = document.getElementById('margin');
  const totalInput = document.getElementById('total');
  const marginError = document.getElementById('marginError');

  const productNameInput = document.getElementById('productName');
  const nameError = document.getElementById("nameError");

  const cardTitle = document.querySelector('.perfume'); // product name display
  const cardPrice = document.querySelector('.price');   // selling price display

  const courierChargeInput = document.getElementById("courierCharge");
  const boxChargeInput = document.getElementById("boxCharge");
  const packageCostInput = document.getElementById("packageCost");
  const digitalMarketingInput = document.getElementById("digitalMarketingCost");
  const sellingPriceInput = document.getElementById("sellingPrice");

  // Product Name validation
  productNameInput.addEventListener("input", function () {
    const value = this.value;
    const isValid = /^[A-Z0-9 ]*$/i.test(value);
    this.value = value.toUpperCase();

    if (!isValid || value.length > 16) {
      nameError.classList.remove("d-none");
    } else {
      nameError.classList.add("d-none");
    }

    if (cardTitle) {
      cardTitle.textContent = this.value;
    }
  });

  // Margin + Cost = Total calculation
  function updatePrices() {
    const costPrice = parseFloat(costPriceInput.value);
    const margin = parseFloat(marginInput.value);

    if (isNaN(costPrice) || isNaN(margin) || margin < 10 || margin > 300) {
      totalInput.value = '';
      marginError.classList.remove('d-none');
      if (cardPrice) cardPrice.textContent = 'Rs. 0.00';
      return;
    }

    marginError.classList.add('d-none');
    const marginValue = costPrice * (margin / 100);
    const priceWithMargin = costPrice + marginValue;

    totalInput.value = priceWithMargin.toFixed(2);

    // Continue to calculate selling price
    calculateSellingPrice();
  }

  // Final Selling Price calculation
  function calculateSellingPrice() {
    const total = parseFloat(totalInput.value) || 0;
    const courier = parseFloat(courierChargeInput.value) || 0;
    const box = parseFloat(boxChargeInput.value) || 0;
    const packageCost = parseFloat(packageCostInput.value) || 0;
    const marketing = parseFloat(digitalMarketingInput.value) || 0;

    const sellingPrice = total + courier + box + packageCost + marketing;
    sellingPriceInput.value = sellingPrice.toFixed(2);

    if (cardPrice) {
      cardPrice.textContent = 'Rs. ' + sellingPrice.toFixed(2);
    }
  }

  // Event listeners
  costPriceInput.addEventListener("input", updatePrices);
  marginInput.addEventListener("input", updatePrices);
  courierChargeInput.addEventListener("change", calculateSellingPrice);
  boxChargeInput.addEventListener("input", calculateSellingPrice);
  packageCostInput.addEventListener("input", calculateSellingPrice);
  digitalMarketingInput.addEventListener("input", calculateSellingPrice);
  totalInput.addEventListener("input", calculateSellingPrice);

  function updateProductName() {
    const name = productNameInput.value.trim();
    if (cardTitle) cardTitle.textContent = name || 'Perfume';
  }
  productNameInput.addEventListener('input', updateProductName);
       
 // display cost
  const displayCostInput = document.getElementById('displayCost');
  const cardOriginalPrice = document.querySelector('.original-price');

  displayCostInput.addEventListener('input', () => {
    const value = displayCostInput.value.trim();

    if (value === '') {
      cardOriginalPrice.textContent = 'Rs. 0.00';
    } else {
      cardOriginalPrice.textContent = 'Rs. ' + parseFloat(value).toFixed(2);
    }
  });
  // image
  document.getElementById('productImage').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('productPreview').src = e.target.result;
        }
        reader.readAsDataURL(file);
      } else {
        alert("Please select a valid image file.");
      }
    });
      </script>
      <!-- Orders table -->
      <div id="ordersSection" style="display: none;">
        <h2>Orders Table</h2> 
        <table class="table table-bordered table-hover">
          <tr>
            <th>S.no</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script>
    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');

    toggleSidebarBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
    });

    const showDashboardBtn = document.getElementById('showDashboard');
    const showUsersBtn = document.getElementById('showUsers');
    const showOrdersBtn = document.getElementById('showOrders');

    const dashboardSection = document.getElementById('dashboardSection');
    const userFormSection = document.getElementById('userFormSection');
    const ordersSection = document.getElementById('ordersSection');

    showDashboardBtn.addEventListener('click', () => {
      dashboardSection.style.display = 'block';
      userFormSection.style.display = 'none';
      ordersSection.style.display = 'none';
    });

    showUsersBtn.addEventListener('click', () => {
      dashboardSection.style.display = 'none';
      userFormSection.style.display = 'block';
      ordersSection.style.display = 'none';
    });

    showOrdersBtn.addEventListener('click', () => {
      dashboardSection.style.display = 'none';
      userFormSection.style.display = 'none';
      ordersSection.style.display = 'block';
    });
    
  </script>
  

  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
