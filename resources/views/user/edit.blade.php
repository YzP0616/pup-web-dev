<!DOCTYPE html>
<html lang="en">
<head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!--@import(['/resources/css/custom.css'])-->

    <link rel="stylesheets" href = "{(asset('resources/css/custom.css'))}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      #emailInput{
        font-size: 20px;
        color: gold;
      }
      
      .input-email {
        color: green;

      }

      h1{
        color:antiquewhite
      }

      </style>
    <title>Document</title>
</head>
<body>
    <h1 style = "font-family: Algerian; background-color: Pink">Edit User: </h1>{{$studentid}}  

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
 
</nav>

<div class="container register-form">
    <div class="bg-primary"> 
        <h1>Hello</h1> 
    </div>
  
    <div style="background-color:aquamarine"> 
        
        <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Email address</label>
             <input 
                  type="email" 
                  class="form-control input-email" 
                  id="emailInput" 
                  placeholder="name@example.com">
        </div>
        <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

    </div>
   
    <div> 
        <button type="button" class="btn btn-primary">Primary</button>        
    </div>
</div>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>

</body>
</html>