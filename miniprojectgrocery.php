<html lang="en">
     <head>
<meta charset="utf-8">
<meta content="width=device width, initial scale=1.0" name="viewport" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://kit.fontawesome.com/7eb6e8db67.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="my.css">
<title>Grocery</title>
<style type="text/css">
.wrapper{
                background-color: rgb(253, 251, 108);
                 width: 100%;
                 height: 10%;
                 top:0px;
                 position: sticky;
                 ;
                 } 
.minimart_head{
    display: flex;
    flex-wrap: wrap;
}
/* .minimart{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 30%;
    margin-top: 1%;
} */
#minimart{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 20%;
    margin-top: 1%;
    border-color: black;
      font-family: Georgia;

}
#minimart:hover{
  background-color: #F6A333; 
} 
 #cart-icon{
  font-size: 1.5rem;
  cursor: pointer;
  padding-top: 10px;
  margin-left:30rem;
  margin-top:5px;
  color:rgb(177, 106, 3  );
} 
.box{
  width: 30px;
  height: 30px;
  text-align: center;
  position: relative;
} 

.cart-count{
    color:white;
  position: relative;
  background-color: #2f3542;
  top: 0px;
  right: 0;
  padding: 3px;
  height: 20px;
  width: 20px;
  font-size:20px;
  line-height:10px ;
  border-radius: 50%;
  z-index: 99;
}
.cart{
  position: fixed;
  top: 0;
  right: -100%;
  width: 400px;
  height: 100vh;
  overflow-y: auto;
  overflow-x: hidden;
  padding: 20px;
  background-color:#EBEAE8;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  z-index: 100;
}

.cart-active{
  right:0;
  transition: 0.5s;
}

.cart-title{
  /* position: relative; */
  text-align: center;
  color: #900C3F;
  font-family: Georgia;
  font-size: 1.5rem;
  font-weight: 500;
  margin-bottom: 1rem;
  padding-bottom:20px ;
  border-bottom: 1px solid rgba(0,0,0,0.1);
}

.header{
    background-color: #caf8ef;
  background:  linear-gradient(to bottom, #caf8ef 20%, #36f8d1 80%);
 float: left;
 width: 20%;
 height:100%;
 top:64px;
 position: fixed;
 }
  .toy_img{
    width: 60%;
   height: 80%; 
   border-radius: 80%; 
     margin-left: 20%;
   margin-top: 10%; 
 } 
.img-fluid{
  width: 100%;
  height: 100%;
  animation-duration: 1s;
    animation-name: slidein1;
    animation-direction: alternate;
  } 
.toyscategories{
  font-family: Georgia;
  color: #900C3F; 
  font-size: 17px; 
  margin-left:30px;
  background-color: transparent;
  border: none;
  background: none;
}
#main{
  margin-left: 20%;
 }
.addtoyimg{
  width: 78%;
  height:200px;
  position: absolute;
  top: 80px;
  left: 21%;
  right: 50px;
}
.toyadd{
  width: 78%;
  height:200px;
  position: fixed;
  top: 80px;
  left: 21%;
  right: 50px;
}    
.container{
  max-width: 1200px;
  padding: 1rem;
  /* margin: auto; */
  margin-top:0%;
  width: 100%;
  position:inherit;
  background-color:rgb(234, 194, 135 );
}
h2.title{
  font-family: Georgia;
  font-size: 1.1rem;
  font-weight: 800;
  margin-bottom: 1.5rem;
  color:brown;
}

.shop-content{
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(200px,auto));
  gap:1.5rem;
  justify-content: center;
  align-content: center;
  position:inherit;
}

.product-box{
  position:inherit;
  background-color: #fff;
  padding: 10px;
  box-shadow: 0 1px 4px rgba(40, 37, 37, 0.1);
  border-radius: 3px;
}

.pic{
  overflow: hidden;
}

.pic:hover img{
transform: scale(1.5);
}

.product-img{
  transition: 0.4s;
  aspect-ratio: 1/1;
  object-fit: cover;
  /* position:relative; */
  /* width: 300px;
  height:250px; */
}

.product-title{
  font-size: 1rem;
  font-weight: 700;
  font-family: Georgia;
  color:brown;
}


.product-price{
  font-weight:500 ;
  font-family: Georgia;
  color:brown;
}

.add-cart{
  position: inherit;
  margin-left:80%;
  margin-top:0%;
  background-color: #2ed573;
  color:white;
  padding: 10px;
  font-size: 1.1rem;
  cursor: pointer;
  width: 40px;
  transition: 0.5s;
}

.add-cart:hover{
  background-color:rgba(255, 0, 0, 0.786);
}
.cart-img{
  width: 75px;
  height: 75px;
  object-fit: cover;
  border:2px solid  rgba(0,0,0,0.1);
  padding: 5px;
}
.detail-box{
  display: grid;
  row-gap: 0.5rem; 
  /* margin-top:10px; */
  margin-bottom:10px;


}
.price-box{
  display: flex;
    justify-content: space-between; 
    margin-bottom:1px;

}
.cart-product-title{
   font-size: 1rem;
   text-transform: uppercase;
   color:#ff6348;
   font-weight: 500;
}

.cart-price{
  font-weight: 500;
  margin-top:1px;
}

.cart-quantity{
  border:1px solid rgba(0,0,0,0.1);
  outline:none ;
  width: 2.4rem;
  text-align: center;
  font-size: 1rem;
}

.cart-remove{
  font-size: 24px;
  color:red;
  cursor: pointer;
  margin-top:-30px;
  margin-left:50vh;
}

.total{
  display: flex;
  justify-content: flex-end;
  margin-top: 1.5rem;
}

.total-title{
  font-size: 1rem;
  font-weight: 600;
}

.total-price{
  margin-left: 0.5rem;
}

.btn-buy{
  padding: 12px 20px;
  background-color:rgb(248, 183, 6);
  color:#fff;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
}

#cart-close{
  position: absolute;
  top: 1rem;
  right: 0.8rem;
  font-size: 2rem;
  cursor: pointer;
  color:rgb(248, 183, 6);
}
img{
  width: 100%;
}

.add-wishlist {
  position: inherit;
  margin-left:0.5rem;
  margin-top:-20%;
  color:#F078FA;
  padding: 10px;
  font-size: 1.5rem;
  /* cursor: pointer; */
  transition: 0.5s;
}
#logout{
  background-color: rgb(248, 183, 6);
    border-radius: 50%;
    margin-left:93%;
    margin-top: -3%;
    border-color: black;
      font-family: Georgia;
}
   </style>
    </head>

    <body>
    <div class="wrapper">
                 <div class="minimart_head">
                    <!-- <button class="minimart" onclick="minimart()">miniMart</button>
                    <button class="minimart" onclick="grocery()">Grocery </button> -->
                    <button type="button" class="btn" id="minimart" onclick="minimart()">miniMart</button>
                 <button type="button" class="btn" id="minimart" onclick="grocery()">Grocery</button>
                    <div class="box">
                      <div id="cart-icon">
                    <div class="cart-count">0</div>
                  <i class="fa-solid fa-cart-shopping"></i></div>  
                </div>
                
              </div>   
              <div class="cart">
        <div class="cart-title">Cart Items      
               <div id="cart-close"> <i class="fa-solid fa-rectangle-xmark"></i></div>
</div>
        <div class="cart-content">

        </div>
        

      <div class="total">
        <div class="total-title">Total</div>
        <div class="total-price">Rs.0</div>
      </div>

      <button class="btn-buy">Place Order</button>

      <ion-icon name="close" id="cart-close"></ion-icon>

      </div>
      <button type="button" class="btn" id="logout" onclick="logout()">Logout</button>

  </div> 
<header class="header">

    <div class="d-flex flex-column" >

        <div class="profile">
          <img class="toy_img" src="https://5.imimg.com/data5/MG/FQ/SA/SELLER-283756/all-fmcg-grocery-products.jpg" alt="grocery" class="img-fluid rounded-circle">
          <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 30px; margin-left: 20%;"><u><b>Grocery</b></u></h1>
          
        </div>
        <div>
          <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 25px; margin-top: 10% ">Filters</h1>
          <hr>
          <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 18px;">CATEGORIES</p>

          <div>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item" style="background-color: transparent;">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 18px; background-color: transparent;">
<b>Groceries</b>      </button>    
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><button class="toyscategories">Highy Special Products</button>
      <button class="toyscategories">Special Products</button>
      <button class="toyscategories">High Quality Products</button>
      <button class="toyscategories">Good Products</button>
    </div>
    </div>
  </div>  
</div>  
</div>
        </div>
      </div>

</header> 


<main id="main">
  <!-- <div class="addtoyimg">
    <img src="https://mocomi.com/wp-content/uploads/2016/07/MOC_GK_TUSHAR_TOYS-AND-GAMES_Featured.jpg" alt="adds" class="toyadd">
</div> -->
<div class="container">
    <h2 class="title">Groceries for Best Price</h2>
    <div class="shop-content">

      <div class="product-box">
        
        <div class="pic"><img src="images.php/dhall.jpeg" class="product-img"></div>
        <h2 class="product-title">Dhal</h2>
        <span class="product-price">Rs.169</span>
         <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1234,'Dhal', 'images.php/dhall.jpeg', 169)"></i>
    </div>
      </div>

      <div class="product-box">
        <div class="pic"><img src="images.php/kidneyean.jpeg" class="product-img"></div>
        <h2 class="product-title">Kidney Bean</h2>
        <span class="product-price">Rs.49</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1235,'Kidney Bean', 'images.php/kidneyean.jpeg', 49)"></i>
    </div>
      </div>


      <div class="product-box">
        <div class="pic"><img src="images.php/Maggie.jpeg" class="product-img"></div>
        <h2 class="product-title">Maggie</h2>
        <span class="product-price">Rs.100</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div>
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1236,'Maggie', 'images.php/Maggie.jpeg', 100)"></i>
    </div>
      </div>


      <div class="product-box">
        <div class="pic"><img src="images.php/buiscuits.jpeg" class="product-img"></div>
        <h2 class="product-title">Buiscuits</h2>
        <span class="product-price">Rs.99</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1237,'Buiscuits', 'images.php/buiscuits.jpeg', 99)"></i>
    </div>
      </div>


      <div class="product-box">
        <div class="pic"><img src="images.php/chilly.jpeg" class="product-img"></div>
        <h2 class="product-title">Red Chilly</h2>
        <span class="product-price">Rs.129</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1238,'Red Chilly', 'images.php/chilly.jpeg', 129)"></i>
    </div>
      </div>


       <div class="product-box">
        <div class="pic"><img src="images.php/healthdrink.jpeg" class="product-img"></div>
        <h2 class="product-title">Health Drinks</h2>
        <span class="product-price">Rs.220</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1239,'Health Drinks', 'images.php/healthdrink.jpeg', 220)"></i>
    </div>
      </div>
  
      <div class="product-box">
        <div class="pic"><img src="images.php/gram.jpeg" class="product-img"></div>
        <h2 class="product-title">Green Gram</h2>
        <span class="product-price">Rs.87</span>
        <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
       </div> 
       <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1240,'Green Gram', 'images.php/gram.jpeg', 87)"></i>
    </div>
      </div>
  
      <!-- <div class="product-box">
    <div class="pic"><img src="images.php/millets.jpeg" class="product-img"></div>
    <h2 class="product-title">Millets</h2>
    <span class="product-price">Rs.209</span>
    <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </div> 
    
<div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(123, 'Millets', 'images.php/millets.jpeg', 209)"></i>
    </div>

</div> -->

<div class="product-box">
    <div class="pic">
        <img src="images.php/millets.jpeg" class="product-img" alt="Millets">
    </div>
    <h2 class="product-title">Millets</h2>
    <span class="product-price">Rs.209</span>
    <div class="add-cart">
        <i class="fa-solid fa-cart-shopping"></i>
    </div>
    <div class="add-wishlist">
        <i class="fa-solid fa-heart" onclick="addToWishlist(1241,'Millets', 'images.php/millets.jpeg', 209)"></i>
    </div>
</div>


      </div> 
</div>
</div>
<script>
    const btnCart=document.querySelector('#cart-icon');
const cart=document.querySelector('.cart');
const btnClose=document.querySelector('#cart-close');
function minimart(){
  window.location="index.php";
}
function grocery(){
    window.location="miniprojectgrocery.php";
}
btnCart.addEventListener('click',()=>{
  cart.classList.add('cart-active');
});

btnClose.addEventListener('click',()=>{
  cart.classList.remove('cart-active');
});

document.addEventListener('DOMContentLoaded',loadProduct);

function loadProduct() {
    loadContent();

    // Restore cart items from local storage
    const storedItems = JSON.parse(localStorage.getItem('cartItems'));
    if (storedItems) {
        itemList = storedItems;

        itemList.forEach((product) => {
            let newProductElement = createCartProduct(product.title, product.price, product.imgSrc);
            let element = document.createElement('div');
            element.innerHTML = newProductElement;
            let cartBasket = document.querySelector('.cart-content');
            cartBasket.append(element);
        });

        loadContent();
    }
}

function loadContent(){
  //Remove product Items  From Cart
  let btnRemove=document.querySelectorAll('.cart-remove');
  btnRemove.forEach((btn)=>{
    btn.addEventListener('click',removeItem);
  });

  //Product Item Change Event
  let qtyElements=document.querySelectorAll('.cart-quantity');
  qtyElements.forEach((input)=>{
    input.addEventListener('change',changeQty);
  });

  //Product Cart
  
  let cartBtns=document.querySelectorAll('.add-cart');
  cartBtns.forEach((btn)=>{
    btn.addEventListener('click',addCart);
  });

  updateTotal();
}


//Remove Item
function removeItem(){
  if(confirm('Are Your Sure to Remove')){
    let title=this.parentElement.querySelector('.cart-product-title').innerHTML;
    itemList=itemList.filter(el=>el.title!=title);
    this.parentElement.remove();
    loadContent();
  }
}

//Change Quantity
function changeQty(){
  if(isNaN(this.value) || this.value<1){
    this.value=1;
  }
  loadContent();
}

let itemList=[];

//Add Cart
function addCart() {
    let product = this.parentElement;
    let title = product.querySelector('.product-title').innerHTML;
    let price = product.querySelector('.product-price').innerHTML;
    let imgSrc = product.querySelector('.product-img').src;
    
    let newProduct = { title, price, imgSrc };

    // Check if the product is already in the cart
    if (itemList.find((el) => el.title === newProduct.title)) {
        alert("Product Already added in Cart");
        return;
    } else {
        itemList.push(newProduct);
    }

    // Update local storage
    localStorage.setItem('cartItems', JSON.stringify(itemList));

    let newProductElement = createCartProduct(title, price, imgSrc);
    let element = document.createElement('div');
    element.innerHTML = newProductElement;
    let cartBasket = document.querySelector('.cart-content');
    cartBasket.append(element);
    loadContent();
}

function createCartProduct(title,price,imgSrc){

  return `
  <div class="cart-box">
  <img src="${imgSrc}" class="cart-img">
  <div class="detail-box">
    <div class="cart-product-title">${title}</div>
    <div class="price-box">
      <div class="cart-price">${price}</div>
       <div class="cart-amt">${price}</div>
   </div>
    <input type="number" value="1" class="cart-quantity">
  </div>
  <div class="cart-remove">
        <i class="fa-solid fa-trash-can"></i></div>
</div>
  `;
}

function updateTotal()
{
  const cartItems=document.querySelectorAll('.cart-box');
  const totalValue=document.querySelector('.total-price');

  let total=0;

  cartItems.forEach(product=>{
    let priceElement=product.querySelector('.cart-price');
    let price=parseFloat(priceElement.innerHTML.replace("Rs.",""));
    let qty=product.querySelector('.cart-quantity').value;
    total+=(price*qty);
    product.querySelector('.cart-amt').innerText="Rs."+(price*qty);

  });

  totalValue.innerHTML='Rs.'+total;


  // Add Product Count in Cart Icon

  const cartCount=document.querySelector('.cart-count');
  let count=itemList.length;
  cartCount.innerHTML=count;

  if(count==0){
    cartCount.style.display='none';
  }else{
    cartCount.style.display='block';
  }


}



function addToWishlist(product_id, product_name, product_image, product_price) {
    const url = `add_to_wishlist.php?product_id=${product_id}&product_name=${encodeURIComponent(product_name)}&product_image=${encodeURIComponent(product_image)}&product_price=${product_price}`;
    window.location.href = url;
}


function logout(){
  localStorage.removeItem('cartItems');
    window.location="index.php";
}


    </script> 
  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
    </html>

   