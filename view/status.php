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
                    <div class="row mb-4">
                        <h1 class="m-auto">
                            APPLICATION STATUS
                        </h1>

                    </div>
                    <div class="row mb-4">
                        <div class="m-auto" style="border:1px solid;height:200px;width:200px">
                            <img src="<?php echo "upload/".$user['image']?>" style="width:200px;height:200px" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h4>
                                I
                                <?php echo $user['firstname'] ?> <?php echo $user['lastname'] ?> , applied with the
                                application
                                code <?php echo $user['access_code'] ?>.<br>
                                I live at <?php echo $user['home_address'] ?> and I was born on
                                <?php echo $user['dob'] ?>.<br>
                                My favourite subjects are
                                <?php echo $user['subjects'] ?>”.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>