<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <style>
       ul.no-bullets{
         list-style-type: none;
       }
      .navbar-custom
      {
         background-color:#368BC1;
      }
      .card-body{
        background-color:#368BC1;
      }
    </style>
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-custom navbar-light navbar-expand-lg  py-3 fixed-top">
     <div class="container">
     <a href="#" class="navbar-brand">Education4ol</a>
         <button class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
         >
          <span class="navbar-toggler-icon"></span>
         </button>
     <div class="collapse navbar-collapse" id="navmenu">

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="#Create Account" class="nav-link">Create Account</a>
            </li>
            
            <li class="nav-item">
                <a href="#Login" class="nav-link">Login</a>
            </li>
            
            <li class="nav-item">
                <a href="#Help" class="nav-link">Help</a>
            </li>
            <li class="nav-item">
              <a href="#Help" class="nav-link"><i class="bi bi-cart3"></i></a>
          </li>
        </ul>
     </div>
     </div>
     
    </nav>


    <!--heading-->
    
    <section class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">

      <div class="container">
          <div class="d-sm-flex" align-items-center justify-content-between>
              <div>
                <ul class="list-unstyled">
                  <li class="list-inline-item" style="padding-top:5px">
                    <p class="lead my-4" >
                <small><b><i class="bi bi-telephone-fill"></i><h6> Order online or call us :+91 2412970071<br> 
                      <i class="bi bi-envelope-fill"></i> Email us: support@Education4ol.in<br>  
                      <i class="bi bi-clock"></i> Working Hours: 10 AM - 6 PM<br></b></h6>
                      </p></small> 
                  </li>
             
              </div>
            
             
           <li style="padding: 50px 0px 0px 150px" class="list-inline-item">
           <h1>Education4ol</h1>
          </li> 
          <li style="padding:60px 0px 0px 250px" class="list-inline-item">
            
            <div class="input-group news-input">
              <input type="text" class="form-control" placeholder="Search for product">
              <button class="btn  btn-secondary" type="button" >Search</button>
            </div>
        
          </li>

        </ul>
      </div>
      </div>
  
    
  </section>
    
   
    <!--second navbar-->
    <nav class="navbar navbar-custom navbar-expand-lg navbar-light">
    <div class="container">
      
    <button class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
          
        <span class="navbar-toggler-icon"></span>
    </button>

       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          
        <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-link" style="padding-top:12px">
             <a href="home.html" class="nav-link"><b>Home</b></a>
            </li>


            <li class="nav-item nav-link" >
                <div class="dropdown">
                    <button type="button" class="btn btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                      Dairy Products
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="cheese.html">Cheese</a></li>
                      <li><a class="dropdown-item" href="butter.html">Butter</a></li>
                      <li><a class="dropdown-item" href="ghee.html">Ghee</a></li>
                      <li><a class="dropdown-item" href="dahi.html">Dahi</a></li>
                      <li><a class="dropdown-item" href="milk.html">Milk</a></li>
                      <li><a class="dropdown-item" href="milkb.html">Milk beverages</a></li>
                      <li><a class="dropdown-item" href="mayo.html">Mayonnaise</a></li>
                      <li><a class="dropdown-item" href="Shrikhand.html">Shrikhand And Amrakhand</a></li>
                      <li><a class="dropdown-item" href="gulab.html">Gulab Jamun Mix</a></li>
                    </ul>
            
        </li>
          
        <li class="nav-item nav-link">
            <div class="dropdown">
                <button type="button" class="btn btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                  Fruits And Vegetables
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
        
        </li>
        <li class="nav-item nav-link">
            <div class="dropdown">
                <button type="button" class="btn btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                  Fast Food
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
            
        
        </li>
        <li class="nav-item nav-link" >
            <div class="dropdown">
                <button type="button" class="btn btn-lg dropdown-toggle" data-bs-toggle="dropdown">
                  Gulab Jamun Mix
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
            
        </li>
        


   
</div>
</div>


</nav>



         

    
    

    
     
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   



</body>
</html>