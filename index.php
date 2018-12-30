<?php
//Defining Title
define('Title', 'How old you are!');
define('Description', 'Know The Year Of Birth Without Thinking');
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <title><?php echo Title; ?></title>
     <meta name="description" content="Know The Year Of Birth Without Thinking" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        @media (min-width: 320px) and (max-width: 480px) {
            .validtwo{
                font-size: 13px !important;
            }
            .example{
                top: 25px !important;
            }
            h2{
                font-size: 1.4rem !important;
            }
            .finalyear{
                font-size: 25px;
            }
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119538362-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119538362-2');
    </script>

</head>
<body class="">

<section>
    <div class="container mt-5 text-center">
            <h2 class="font-weight-bold"><?php echo Description; ?></h2>
            <hr>
    </div>
</section>

<?php
//This year
$thisYear = date('Y');

if(isset($_POST['submit'])){
    $birthYear = $_POST['birthyear'];
    //check year length
    $yearLength = strlen($birthYear);

    if(empty($yearLength)){

        echo '<div class="container text-center mt-5">
            <span class="alert alert-danger">Please give your birth year in input form!</span>
        </div>
        ';
    }elseif($yearLength != 4){
        echo '<div class="container text-center mt-5">
        <span class="alert alert-danger validtwo">Make sure your birth year has 4 digit character!</span>
        <span class="alert alert-dark example">Example: '.$thisYear.'</span>
    </div>
    ';
    }
    else{
        $birthYear = ($thisYear - $birthYear);

        echo '<div class="container finalyear text-center mt-5 bg-light text-dark display-4 lead font-weight-bold">
            <p>You are '. $birthYear .' years old!</p>
            </div>
        ';
    }
}


?>


<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <label for="" class="lead ">Please Give Your Birth Year:</label>
                    <input type="year" name="birthyear" class="form-control">
                    <input type="submit" name="submit" class="btn btn-success mt-2">
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>