<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
    <style>

        
        body {
            font-family: "Raleway", sans-serif;
            background-color: #fff;
        }

        .navbar-brand img {
            width: 220px; 
        margin-left: 20px;
        margin-bottom: -70px;
        margin-top: -60px;
       
        

        }

        .product-image {
            width: 500px;
            height: auto;
            border-radius: 15px;
            object-fit: contain;
            margin-top: 20px;
        }

        .description {
        
        justify-content: left;
        margin: auto;
        margin-top: 50px;
        font-family: "Raleway", sans-serif;
        font-size: 19px;
        text-align: justify;
       
        }
    </style>
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/blooming2.jpg') }}" class="product-image" alt="Product Image">
        </div>
        <div class="col-md-6 description">
            <h1 class="text-danger">Spring Is Here Ring Set</h1>
            <h2 class="text-danger">₱399.00</h2><br>
            <p>
                Unleash your vibrant side with our Funky Fresh Color Pop Ring Collection! This set of five unique rings features playful designs like 'NYC' letters and whimsical flowers. Comfortable for all-day wear, they're perfect for parties or adding a pop of color to your everyday look.<br>
            </p>
            <ul>
                <br><li>High-quality mixed metals and colored enamel</li>
                <li>Adjustable to fit sizes 5-9</li>
                <li>Waterproof and sweatproof</li>     
            </ul>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-danger btn-lg" type="button">Add To Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HtDYry7Tnrv19at7yjC24GMpmw9kczm+Vo12gNQyjRS9hQq8z+nj6LcHd3mlxiL2" crossorigin="anonymous"></script>
</body>
</html>
