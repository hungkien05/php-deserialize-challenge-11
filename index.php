<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Something</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <a href="./deserialize.php"> Deserialize</a>
    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Serialize</div>

                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="" required autocomplete="username" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthyear" class="col-md-4 col-form-label text-md-right">Year of birth</label>

                            <div class="col-md-6">
                                <input id="birthyear" type="text" class="form-control" name="birthyear" required autocomplete="birthyear">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender"  required autocomplete="gender">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Go !
                                </button>
            
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php
    require "Student.php";
    require "File.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $student = new Student();
        $student->username = trim($_POST["username"]);
        $student->email = trim($_POST["email"]);
        $student->birthyear = trim($_POST["birthyear"]);
        $student->gender = trim($_POST["gender"]);
        echo "Raw: ".serialize($student)."<br><br>";
        echo "Base64: ".base64_encode(serialize($student))."<br>";
        // $f->__wakeup();
        // $clone=unserialize(serialize($student));
        // print $clone->email;
    }
?>