<html lang="en">
     <head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/7eb6e8db67.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="my.css">
        <title>onLine miniMart</title>
        <style>
                      body{
                background: rgb(204, 204, 255);
            }
             #box{ 
                background-color: rgb(252, 248, 46);
                width: 100%;
                height: 100%;
             }  
             .wrapper{
                background-color: rgb(253, 251, 108);
                 width: 100%;
                 height: 10%; 
                } 
                #box p{
                    position: relative ;
                    top:300px;
                 }

.logo_img{
    position: absolute;
    justify-content: center;   
    width: 30%;
}
.minimart_head{
    display: flex;
    flex-wrap: wrap;
}
/* .minimart{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 20%;
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
/* .minimart2{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 30%;
    margin-top: 1%;
} */
#minimart:hover{
   background-color: #F6A333; 
} 
#login{
    background-color: rgb(248, 183, 6);
    border-radius: 20%;
    margin-left: 30%;
    margin-top: 1%;
    width: 15%;
    border-color: black;
      font-family: Georgia;
  }
  #login:hover{
   background-color: #F6A333; 
} 

.carouselslide{
  /* max-width: 1320px; */
  
  width: 100%;
  height:200px;
  position: relative;
  top: 10px;
  /* left: 10px; */
  /* right: 50px; */
  /* background-color: grey; */
}  
.carousel_img{
  /* width: 1320px; */
  width: 100%;
  height:200px;
  position:inherit;
  top: 0px;
  left: 0px;
  right: 50px;
}
div.scroll-container {
  white-space: nowrap;
  background-color:#E0FCFB;
  /* width: 1320px; */
  width: 100%;
  height:200px;
  position: relative;
  top: 0px;
/* left: 20px; */
display: flex;
flex-wrap:flex;
overflow:auto;
padding:20px;
}
.scrollimg{
border-radius: 50%;  
margin:22px;
/* margin:auto; */
}
#carouselitems{
    margin-top: 12px;
    background-color: #FCEDD0;
    text-align: center;
    height:350px;
    /* padding:10px; */
}
#carouselitems #ci1{
    padding:30px;
    margin-top: 12px;
    font-size: 20px;
    padding-top: 100px;
}
#carouselitems #ci1 p{
    color: blue;
}
    #g_images{ height:147px;    width: 250px;      margin-top: 12px;
  padding-left: 30px;}
#g_image_r{    height: 350px; width: 200px;   padding:5px;  } 
#card1{
  margin-top: 12px;
}
figcaption{
  text-align:center;
  font-family: Georgia;
   color: #900C3F;
    font-size: 18px;
}

       </style>
        </head>
        <body>
            <section>
                <!-- <div id="box"">   
                 <p style="text-align: center;">Launching application</p>
</div> -->
            
            <div class="wrapper">
                 <div class="minimart_head">
                  <button type="button" class="btn" id="minimart">miniMart</button>
                 <button type="button" class="btn" id="minimart" onclick="grocery()">Grocery</button>

                    <!-- <button class="minimart">miniMart</button>  -->
                    <!-- <button class="minimart" onclick="grocery()">Grocery</button> -->
                    <!-- <i class="fa-solid fa-cart-shopping" style="top:10px;"></i> -->
<select class="form-select" aria-label="Default select example" id="login" onchange="SelectRedirect();">
  <option selected>Login menu</option>
  <option value="Login Page">Login Page</option>
  <option value="Register Page">Register Page</option>
</select>
                    <!-- <select id="login" onchange="SelectRedirect();">
                        <option value="LOGIN">Login</option>
                    <option value="Login Page">Login Page</option>
                    <option value="Register Page">Register Page</option>
                </select> -->
               </div>                                  
</div></section>

   <div id="carouselExampleControls" class="carouselslide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="carousel_img" src="https://5.imimg.com/data5/MG/FQ/SA/SELLER-283756/all-fmcg-grocery-products.jpg" class="d-block w-100" alt="img123">
    </div>
    <div class="carousel-item">
    <img class="carousel_img" src="https://himalayababycare.com/images/blog/How-to-choose-the-right-skin-care-products-for-your-baby.jpg" class="d-block w-100" alt="img12">
    </div>
    <div class="carousel-item">
    <img class="carousel_img" src="https://www.gizchina.com/wp-content/uploads/images/2021/01/Smartphone-accessories-featured-e1611827416898.png" class="d-block w-100" alt="img1">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br> 

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div> 
<div class="scroll-container">
  <figure><a href="miniprojectgrocery.php">
  <img class="scrollimg" src="https://5.imimg.com/data5/MG/FQ/SA/SELLER-283756/all-fmcg-grocery-products.jpg" alt="Cinque Terre" width="100" height="100">
</a> <figcaption>Grocery</figcaption>
</figure>
<figure><a href="miniprojectcleaning.php">
  <img class="scrollimg" src="https://www.shutterstock.com/image-illustration/shopping-basket-full-variety-grocery-260nw-1978733351.jpg" alt="Cinque Terre" width="100" height="100">
</a>  <figcaption >Cleaning Items</figcaption>
</figure><figure><a href="miniprojecttoys.php">
  <img class="scrollimg" src="https://www.chemicalsafetyfacts.org/wp-content/uploads/shutterstock_383521510-002-scaled.jpg" alt="Cinque Terre" width="100" height="100">
</a><figcaption >Toys</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://t3.ftcdn.net/jpg/02/85/94/70/360_F_285947084_ePYjQpzCaQq6Vb2GEoYGZs8MNYkUhNqB.jpg" alt="Cinque Terre" width="100" height="100">
  <figcaption >Clothings</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://static-assets.business.amazon.com/assets/in/24th-jan/705_Website_Blog_Appliances_1450x664.jpg.transform/1450x664/image.jpg" alt="Cinque Terre" width="100" height="100">
  <figcaption >Home Appliances</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://www.gizchina.com/wp-content/uploads/images/2021/01/Smartphone-accessories-featured-e1611827416898.png" alt="Cinque Terre" width="100" height="100">
  <figcaption >Mobile Phones</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://images.shiksha.com/mediadata/images/articles/1612346152phpi9K91a.jpeg" alt="Cinque Terre" width="100" height="100">
  <figcaption >Accessories</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://5.imimg.com/data5/SELLER/Default/2022/4/YG/QM/OC/69834246/new-product-500x500.jpeg" alt="Cinque Terre" width="100" height="100">
  <figcaption >Decoratives</figcaption>
</figure><figure>
  <img class="scrollimg" src="https://himalayababycare.com/images/blog/How-to-choose-the-right-skin-care-products-for-your-baby.jpg" alt="Cinque Terre" width="100" height="100">
  <figcaption >Baby Products</figcaption>
</figure>
</div>


<div id="carouselitems">
        <div class="row">
             <div class="col-sm-2" id="ci1">
                <h4 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 25px;"><b>Deals Of The Day</b></h4>
                <p style="color: #900C3F"><i class="far fa-clock"></i>  20 : 25 : 18</p>
                <button onclick="view_all()" type="button" class="btn btn-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #ffffff;font-size: 20px;">View All</button>
             </div> 
            <div class="col-sm-8" id="c_i_2">
                <div id="carousel_items_grid" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                                <div class="row">
                                      <div class="col-sm-4">
                                        <div class="card" style="width: 18rem;" id="card1">
                                            <img class="card-img-top" src="images.php/grocery1.jpeg" alt="Card image cap" id="g_images">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 25px;"><b>Ashirvad atta</b></h5>
                                                <p class="card-text" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 17px;">Buy these Ashirvad atta for better taste </p>
                                                <a href="#" class="btn btn-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #ffffff;font-size: 15px;">Buy</a>
                                            </div>
                                         </div>  
                                      </div> 
                                    <div class="col-sm-4">
                                        <div class="card" style="width: 18rem;" id="card1">
                                            <img class="card-img-top" src="images.php/grocery2.jpeg" alt="Card image cap" id="g_images">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 25px;"><b>Power Detergent</b></h5>
                                                <p class="card-text" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 17px;">Buy this detergent for soft and shiny cloths</p>
                                                <a href="#" class="btn btn-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #ffffff;font-size: 15px;">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card" style="width: 18rem;" id="card1">
                                            <img class="card-img-top" src="images.php/grocery3.jpeg" alt="Card image cap" id="g_images">
                                            <div class="card-body">
                                                <h5 class="card-title"style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 25px;"><b>Fresh Vegetables</b></h5>
                                                <p class="card-text" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #900C3F; font-size: 17px;">Fresh vegetables for your healthy fresh</p>
                                                <a href="#" class="btn btn-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: #ffffff;font-size: 15px;">Buy</a>
                                            </div>
                                        </div>
                                    </div>                                     
                                </div> 
                         </div>
                        
                        <!-- <a class="carousel-control-prev" href="#carousel_items_grid" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_items_grid" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>  -->
                    
                </div>
                
                </div> 
                
</div>
<div class="col-sm-2" id="c_i_3">
                <img src="images.php/groceryoffer.jpeg" alt="imagee" id="g_image_r">
            </div>
          </div>
             
<script> 
  setTimeout (function(){
                document.getElementById("box").style.display='none';},3000);   
                function grocery(){
                  window.location="miniprojectgrocery.php";

                } 
                function grocery(){
                  window.location="miniprojectgrocery.php";
                }
                // function view_all(){
                //   window.location="miniprojectoffers.php";

                // } 
function SelectRedirect(){
    switch(document.getElementById('login').value)
    {
        case "Login Page":
        window.location="miniprojectlogin.php";

        break;

        case "Register Page":
        window.location="miniprojectregistration.php";

        break;
    }   
}
            </script> 
            
       
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
                
        </body>
        </html>