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
                    <div class="row mb-4">
                        <h1 class="m-auto">
                            ONLINE APPLICATION
                        </h1>

                    </div>
                    <div class="mb-4" style="border-bottom:1px solid ;"></div>
                    <div class="row">
                        <div class="col-9 m-auto">
                            <form action="app/add.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>


                                <div class="form-group">
                                    <label for="inputAddress">Marital Status</label><br>
                                    <div class="form-check form-check-inline pr-5 pl-3">
                                        <label class="form-check-label pr-3">Married</label>
                                        <input class="form-check-input" type="radio" name="marrital_status"
                                            value="married">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label pr-3">Single</label>
                                        <input class="form-check-input" type="radio" name="marrital_status"
                                            value="single">

                                    </div>
                                </div>




                                <div class="form-group">
                                    <label for="inputAddress2">Educational Background</label>
                                    <input type="text" class="form-control" name="education" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress2">Select Best Subject</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="subject[]" type="checkbox"
                                            value="Mathematics">
                                        <label class="form-check-label">Mathematics</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="subject[]" type="checkbox"
                                            value="English">
                                        <label class="form-check-label">English</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="subject[]" type="checkbox"
                                            value="Biology">
                                        <label class="form-check-label">Biology</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="subject[]" type="checkbox"
                                            value="Physics">
                                        <label class="form-check-label">Physics</label>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label>Religion</label><br>
                                    <div class="form-check form-check-inline pr-5 pl-3">
                                        <label class="form-check-label pr-3">Islam</label>
                                        <input class="form-check-input" type="radio" name="religion" value="Islam">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label pr-3">Christainity</label>
                                        <input class="form-check-input" type="radio" name="religion"
                                            value="christainity">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label pr-3">Traditional</label>
                                        <input class="form-check-input" type="radio" name="religion"
                                            value="traditional">
                                    </div>
                                </div>


                                <div class=" form-row">

                                    <label for="inputState">State</label>
                                    <select id="inputState" name="state" class="form-control" required>
                                        <option selected>Choose...</option>
                                        <option>ABUJA FCT</option>
                                        <option>ABIA</option>
                                        <option>ADAMAWA</option>
                                        <option>AKWA IBOM</option>
                                        <option>ANAMBRA</option>
                                        <option>BAUCHI</option>
                                        <option>BAYELSA</option>
                                        <option>BENUE</option>
                                        <option>BORNO</option>
                                        <option>CROSS RIVER</option>
                                        <option>DELTA</option>
                                        <option>EBONYI</option>
                                        <option>EDO</option>
                                        <option>EKITI</option>
                                        <option>ENUGU</option>
                                        <option>GOMBE</option>
                                        <option>IMO</option>
                                        <option>JIGAWA</option>
                                        <option>KADUNA</option>
                                        <option>KANO</option>
                                        <option>KATSINA</option>
                                        <option>KEBBI</option>
                                        <option>KOGI</option>
                                        <option>KWARA</option>
                                        <option>LAGOS</option>
                                        <option>NASSARAWA</option>
                                        <option>NIGER</option>
                                        <option>OGUN</option>
                                        <option>ONDO</option>
                                        <option>OSUN</option>
                                        <option>OYO</option>
                                        <option>PLATEAU</option>
                                        <option>RIVERS</option>
                                        <option>SOKOTO</option>
                                        <option>TARABA</option>
                                        <option>YOBE</option>
                                        <option>ZAMFARA</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Birth Date</label>
                                    <input type="date" class="form-control" name="dob" required>
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" name="access_code" value="<?=$user?>"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary" name="submit">SUBMIT
                                        APPLICATION</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
