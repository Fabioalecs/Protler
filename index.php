<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Protlerr</title>
</head>
<body>
<div class="container ">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card py-3 px-2">
                <div class="division">
                    <div class="row">
                        <div class="col-3">
                            <div class="line l"></div>
                        </div>
                        <div class="col-6"><span>MY PROJECTS CONTROLLER</span></div>
                        <div class="col-3">
                            <div class="line r"></div>
                        </div>
                    </div>
                </div>
                <form class="myform" action="src/Controller/verify_login.php" method="post">
                    <div class="form-group"> <input type="email" name="email" class="form-control" placeholder="E-mail"> </div>
                    <div class="form-group"> <input type="password" name="password" class="form-control" placeholder="Password"> </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group form-check"> <input type="checkbox" class="form-check-input"> <label class="form-check-label">Stay Connected</label> </div>
                        </div>
                        <div class="col-md-6 col-12 bn">Create Account</div>
                    </div>
                    <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Login</small></button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>