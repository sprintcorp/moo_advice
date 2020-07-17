<?php
include_once ('config/action.php');
if(!$_SESSION['authorized']){
    header('location:login.php');
}
$action = new Action();
$condition = array(  
    'access_code'     =>     $_SESSION['access_code']  
);
$user = $action->browse('user',$condition);

?>
<html>

<head>
    <title>PHP TEST</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row h-100 pa-5">
            <div class="col-sm-12 my-auto">
                <div class="card card-block p-5">
                    <div class="row">
                        <div class="col-9">

                            <h4> Dear <?php echo $user['firstname']?> <?php echo $user['lastname']?>,
                                Your application with the access code “
                                <?php echo $user['access_code']?>” is successful. Kindly print Application
                                status and Application Details by clicking the buttons below.. </h4>

                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <a href="status.php" class="btn btn-danger btn-lg">Application Status</a>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-danger btn-lg">Application Detail</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>