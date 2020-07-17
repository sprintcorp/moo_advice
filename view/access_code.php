<html>

<head>
    <title>PHP TEST</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <div class="container pb-3">
        <div class="row h-50 pa-5">
            <div class="col-sm-12 my-auto">
                <div class="card card-block p-5">
                    <?php displayMessage(); ?>
                    <div class="row mb-4">

                        <h1 class="m-auto">
                            Create User Access Code
                        </h1>

                    </div>
                    <div class="mb-4" style="border-bottom:1px solid ;"></div>
                    <div class="row">
                        <div class="col-9 m-auto">
                            <form action="app/create.php" method="post">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary" name="submit">GENERATE ACCESS
                                        CODE</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">Access Code</th>
                                    <th scope="col">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user){ ?>
                                <tr>
                                    <td><?php if(empty($user['firstname'])|| empty($user['lastname'])){echo "Information not available";} echo $user['firstname']." ". $user['lastname']?>
                                    </td>
                                    <td>
                                        <?php echo $user['access_code']?> </td>

                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>