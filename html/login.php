<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NaijaVotes/Login</title>

    <link rel="stylesheet" href="../css/voteHere.css">
    <link rel="stylesheet" href="../css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/4eb0e146e9.js" crossorigin="anonymous"></script>
    


</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="navbar-header">
                <h3 style="text-align: center;">NaijaVotes</h3>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div id="navbarNav" class="collapse navbar-collapse justify-content-center">

                    <ul class="nav justify-content-center">

                        <li class="nav-item">
                            <a class="nav-link" href="../html/index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/registration.html">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./html/voteHere.html">Vote Here</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../html/FAQ.html">FAQ's</a>
                        </li>

                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div>
        </nav>
    </header>

    <Section id="home">
        <div class="wrapper">
            <div class="form-box login">
                <h2> Login </h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" required>
                        <label> Email </label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i> </span>
                        <input type="password" required>
                        <label> Password </label>
                    </div>

                    <div class="forgot-sms">
                        <label><a href="#">Forgot Password?</a></label>
                        <label><a href="#">Login via SMS</a></label>

                    </div>
                    <button type="submit" class="button"> Login </button>
                    <div class="login-register">
                        
                            <a href="#" class="register-link"> Don't have an account?</a>
                 
                    </div>

                </form>
            </div>

            <div class="form-box register">
                <h2> Registration </h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" required>
                        <label> Username </label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" required>
                        <label> Email </label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i> </span>
                        <input type="password" required>
                        <label> Password </label>
                    </div>

                    <div class="forgot-sms">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                        <!--<label><a href="#">Login via SMS</a></label>-->

                    </div>
                    <button type="submit" class="button"> Register </button>
                    <div class="login-register">
                        
                            <a href="#" class="login-link"> Already have an account?</a>
                 
                    </div>

                </form>
            </div>
        </div>
    </Section>


    <script src="../js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>