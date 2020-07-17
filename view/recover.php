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
                        <div class="col-6">
                            <h1>
                                You can login to this application once you have been issued an access code by the
                                system administrator.
                            </h1>
                        </div>
                        <div class="col-6">

                            <h1>Login
                            </h1>
                            <div class="p-5" style="border:1px solid">
                                <?php displayMessage(); ?>
                                <h4>Access Code</h4>
                                <form action="app/recover.php" method="post">
                                    <div class="form-input mb-4">
                                        <input type="text" class="form-control" name="access_code"
                                            placeholder="INPUT CODE HERE">
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-info btn-block" value="SUBMIT"
                                            name="submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>