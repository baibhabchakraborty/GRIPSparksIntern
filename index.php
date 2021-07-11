<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>Pandera Bank</title>
  </head>

  
  <body background="img/hero-bg.png">
  <?php
  include 'navbar.php';
  ?>
  
  
      <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Pandera Bank offers banking solutions for you and your small business!</h1>
              <h2 data-aos="fade-up" data-aos-delay="400">Wherever you go, Pandera is the waaaaay!</h2>
              <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                  <a href="createuser.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Create a User</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>  &nbsp;
                  <a href="transfermoney.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Make a Transaction</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>       &nbsp;&nbsp;&nbsp;&nbsp;       
                  <a href="transactionhistory.php" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Transaction History</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="img/hero-img.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
      
      <footer class="text-center mt-5 py-2">
        <p> Made by <b>Baibhab Chakraborty</b> <br>Copyright &copy 2021 <br> Sparks Foundation</p>
      </footer>
     
  </body>
</html>