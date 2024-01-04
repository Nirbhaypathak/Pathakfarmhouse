
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Fathak farm House - Aapka Apna Ghar</title>
</head>

<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$con = new mysqli('localhost', 'root', '', 'loginform');
if ($con->connect_error) {
    die('failed to connect' . $con->connect_error);
} else {
    $stmt = $con->prepare('select * from register where Email = ?');
    $stmt->bind_param('s', $Email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['Password'] === $Password) {
            echo '<script type="text/javascript">
            alert("Login Successfully");
            window.close();
            </script>';
            //echo"<h2> login</h2>";
        } else {
            echo '<script type="text/javascript">
            alert("Login Failed invalid Email and password");
            window.close();
            window.location.href = "http://localhost/nirbhay/bootstrapprj/Signin.html";
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
            alert("Login Failed invalid Email and password");
            window.close();
            window.location.href = "http://localhost/nirbhay/bootstrapprj/Signin.html";
            </script>';
    }
}

?>



<body class="bg-warning">
    <nav class="navbar navbar-expand-sm bg-warning navbar-light bg-dark">
        <a class="navbar-brand" style="color: bisque; text-shadow:rgb(21, 244, 66);"  href="/index.html">PATHAK FARM
            HOUSE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="font-size: 20px; color: azure;" href="http://localhost/nirbhay/bootstrapprj/">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="font-size: 20px; color: azure;" href="http://localhost/nirbhay/bootstrapprj/About.html">About</a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        style="font-size: 20px; color: azure;" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/FoodService.html">Food Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/GateDecorationServices.html">Gate Decoration Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/LightingServices.html">Lighting Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/RoomsServices.html">Rooms Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="WaitersServices.html">Waiters Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/WaterServices.html">Water Services</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/JaimalaFlourServices.html">Jaimala Flour Services</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="font-size: 20px; color: azure;" href="/ContactUs.html">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" >
                    <img class="bg-dark" style="margin-left: 50px; width: 100px; height: 60px;" src="images/logo_icon.webp" alt="user_icon" >
                </li>   
                <li class="nav-item active" >
                    <a id="presentusername" class="nav-link" style="font-size: 20px; color: azure;"> <?php echo $data['Firstname'] ?><span
                        class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/image_1.jpg" alt="First slide" style="height: 350Px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Pathak Farm House</h5>
                    <p>Start your new journey with your better half..</p>
                    <button class="btn btn-danger" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/wedding.html'">Wedding</button>
                    <button class="btn btn-primary" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Ring Ceremony.html'">Ring Ceremony</button>
                    <button class="btn btn-success" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Sagai.html'">Sagai</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/Image_2.webp" alt="Second slide" style="height: 350Px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Pathak Farm House</h5>
                    <p>Start your new journey with your better half..</p>
                    <button class="btn btn-danger" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/wedding.html'">Wedding</button>
                    <button class="btn btn-primary" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Ring Ceremony.html'">Ring Ceremony</button>
                    <button class="btn btn-success" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Sagai.html'">Sagai</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/image_3.webp" alt="Third slide" style="height: 350Px;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Pathak Farm House</h5>
                    <p>Start your new journey with your better half..</p>
                    <button class="btn btn-danger" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/wedding.html'">Wedding</button>
                    <button class="btn btn-primary" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Ring Ceremony.html'">Ring Ceremony</button>
                    <button class="btn btn-success" onclick="window.location.href='http://localhost/nirbhay/bootstrapprj/Sagai.html'">Sagai</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
    <br>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class=" flex-md-row mb-4 shadow-sm h-md-250 position-relative row no-gutters border rounded overflow-hidden">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Garden Chairs</strong>
                        <h3 class="mb-0">Rainproof Sitting Arrangement</h3>
                        <div class="mb-1 text-muted"><b>Booking Open</b></div>
                        <p class="card-text mb-auto">If your family want to do get together in open field then we have
                            sitting aarangement in garden. And it is also safe from rain.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="200" src="images/Thumbnil_1.jpg" alt="Thumbnil_1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="flex-md-row mb-4 shadow-sm h-md-250 position-relative row no-gutters border rounded overflow-hidden">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Hall Chairs</strong>
                        <h3 class="mb-0">Clean and Decorated</h3>
                        <div class="mb-1 text-body-secondary"><b>Booking Open</b></div>
                        <p class="mb-auto">If your family want to do get together in a hall then we have sitting
                            aarangement in a large hall. And it is also decorated by lighting.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="200" src="images/Thumbnil_2.jpg" alt="Thumbnil_2">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class=" flex-md-row mb-4 shadow-sm h-md-250 position-relative row no-gutters border rounded overflow-hidden">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Garden Chairs</strong>
                        <h3 class="mb-0">Rainproof Sitting Arrangement</h3>
                        <div class="mb-1 text-body-secondary"><b>Booking Open</b></div>
                        <p class="card-text mb-auto">If your family want to do get together in open field then we have
                            sitting aarangement in garden. And it is also safe from rain.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="200" src="images/Thumbnil_1.jpg" alt="Thumbnil_1">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="flex-md-row mb-4 shadow-sm h-md-250 position-relative row no-gutters border rounded overflow-hidden">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Hall Chairs</strong>
                        <h3 class="mb-0">Clean and Decorated</h3>
                        <div class="mb-1 text-body-secondary"><b>Booking Open</b></div>
                        <p class="mb-auto">If your family want to do get together in a hall then we have sitting
                            aarangement in a large hall. And it is also decorated by lighting.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="250" height="200" src="images/Thumbnil_2.jpg" alt="Thumbnil_2">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="rh_wrapper__testimonial_elementor elementor_controls rhea_quote_left"
        style="background-color: #043354; width: 100%; height: 300px; text-align: center;">
        <div class="wrapper-section-contents">
            <div class="rhea_testimonial">
                <div class="quotes-marks mark-left"></div>
                <div class="quotes-marks mark-right"></div>
                <h3 class="rh_testimonial__quote_ele "
                    style="color: white; text-align: center; padding-left: 6%; padding-right: 6%; padding-top: 7%;">
                    "You
                    are a just one click away from book your favourite farm at a
                    reasonable price near you. Our vision only that to make your holidays memorable and enjoyable."
                </h3>
                <div class="rh_testimonial__author">
                    <p class="rh_testimonial__author_name"
                        style="font-size: 20px; text-align: center; color: white; padding-top: 40px;">
                        Pathak Farm House </p>
                </div>
            </div>
        </div>
    </section>
    <script>
        function usersignin()
        {
            var username= document.getElementById("Firstname").value;
            document.getElementById("presentusername").innerHTML = username;
          /*  document.write("welcome"+ " ");
            document.write(username);*/
        }
    </script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>