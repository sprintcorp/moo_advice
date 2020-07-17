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
                                Dear
                                <?php echo $user['firstname'] ?> <?php echo $user['lastname'] ?> , your application
                                details have been received . Your
                                Access
                                code
                                is
                                <?php echo $user['access_code'] ?> . Kindly go through the details . </h4>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td scope="row">Address</td>
                                    <td><?php echo $user['home_address'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">Marital Status</td>
                                    <td><?php echo $user['marrital_status'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">Educational Background </td>
                                    <td><?php echo $user['education'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">Best Subject</td>
                                    <td><?php echo $user['subjects'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">Religion</td>
                                    <td><?php echo $user['religion'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">State of Origin</td>
                                    <td><?php echo $user['state_of_origin'] ?></td>

                                </tr>
                                <tr>
                                    <td scope="row">Date of birth</td>
                                    <td><?php echo $user['dob'] ?></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>