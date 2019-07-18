<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bg.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FanFactoryPlay.com</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" 
    style="font-family: 'bookman';font-weight: bold; font-size: 18px; background-color: #258a2f ">
  <div class="container">
    <a class="navbar-brand" href="index.html">FanFactoryPlay.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="JualAlatPlayGround.php">Jual Peralatan Playground Indoor</a>
          <a class="dropdown-item" href="JualMainanBatrai.php">Jual Mainan Batrai</a>
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="HappyFamily.php">Happy Family</a>
          <a class="dropdown-item" href="HappyFunDay.php">Happy Fun day</a>
         
        </div>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
        </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="About.php">Our Company</a>
          <a class="dropdown-item" href="VisiMisi.php">Visi & Misi</a>
          <a class="dropdown-item" href="WhyChooseUs.php">Why Choose Us</a>
          
          </div>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      

      <section class="contact py-5 bg-light" id="contact">
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h4>Contact Us</h4>
        <hr>
      </div>
    <div class="col-md-6">
        <div class="address">
            
        <h5>Address:</h5>
        <ul class="list-unstyled">
            <li> Perum Puri Kendedes No. RT. 006/RW. 006 DSN Mondoroko</li>
            <li> Ds. Banjararum, Kec. Singosari, Kab Malang</li>
            <li> Jawa Timur 65153</li>
        </ul>
        
        </div>
        <div class="email">
        <h5>Email:</h5>
        <ul class="list-unstyled">
            <li> info@email.com</li>
          
        </ul>
        </div>
        <div class="phone">
            <h5>Phone:</h5>
            <ul class="list-unstyled">
            <li>082331900400</li>
           
        </ul>
        </div>
        <hr>
        <div class="social">
          <ul class="list-inline list-unstyled">
              <li class="list-inline-item">
                  <a href="https://www.facebook.com/daris.funfactory"><i class="fa fa-facebook-square fa-2x"></i></a>
              </li>
              <li class="list-inline-item">
                  <a href="https://www.instagram.com/funfactory.id/?hl=id"><i class="fa fa-instagram fa-2x"></i></a>
              </li>
              <li class="list-inline-item">
                  <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
              </li>
          </ul>
      </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                 <form action="proses-kontak.php" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="subject" name="subject" placeholder="Subject" class="form-control" required="required" type="text">
                            </div>
                         
                            <div class="form-group col-md-12">
                                      <textarea id="message" name="message" cols="40" rows="5" placeholder="Your Message"class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
  </div>
  
  
</div>
</section>




      <div style="height: 100px"></div>
     
    </div>
  </div>
</div>

<div></div>
<footer id="sticky-footer" class="py-4 text-white-50" style="background-color: #258a2f">

   <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/daris.funfactory" target="_blank">
          <i class="fa fa-facebook fa-2x" style="color: #ddd"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href="" target="_blank">
          <i class="fa fa-youtube fa-2x" style="color: #ddd"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-instagram mx-1" href="https://www.instagram.com/funfactory.id/?hl=id" target="_blank">
          <i class="fa fa-instagram fa-2x" style="color: #ddd"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->
  </div>  
    <div class="container text-center">
      <small>Copyright &copy; FunFactoryPlay.com</small>
    </div>
  </footer>
  <style type="text/css">
    #sticky-footer{
      margin-top: 25%;
    }

  </style>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>