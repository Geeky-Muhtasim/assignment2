<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact form</title>
  </head>
  <body>
  <div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="save.php">
            <span class="contact100-form-title">
                Contact Us
            </span>

            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                <input class="input100" type="text" name="name" placeholder="Full Name" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter email: e@a.x">
                <input class="input100" type="text" name="email" placeholder="Email" required>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Please enter your message">
                <textarea class="input100" name="message" placeholder="Your Message" required></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <input class="contact100-form-btn" type="submit" value="submit">
            </div>
        </form>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>