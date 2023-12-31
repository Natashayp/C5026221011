<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Nunito:wght@300;500;700;800&display=swap" rel="stylesheet">

    <style>
        body{
            background-color: #f5f5f5f5;
            font-family: 'Nunito', sans-serif;
            color: #505050;

        }

        .Headline{
            margin-top: 100px;
            font-weight: 800;
            margin-bottom: 40px;

        }

        h1{
            font-weight:bolder;
            font-size: 48px;

        }

        h5{
            font-weight: bold;
            font-size: 35px;

        }

        p{

            font-size: 24px;
            margin-right: 40px;
            padding-right: 50px;

        }


    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 pl-sm-0 pr-sm-0">
                <img class="img-fluid"  style=" height:100vh; object-fit: cover; width:90%" src="tugas3_layout/Background-image-1.png" alt="foto background" >
            </div>

            <div class="col-sm-7">
                <div class="row-3" >
                    <div id="logo"><img src="tugas3_layout/Dark.png" width="200px" class="float-right pt-5 pr-5" alt="logo"></div>
                </div>
                <div class="row-3 pl-0" >
                    <h1 class="Headline">Target Customer</h1>
                </div>

                <div class="row-6 pl-0">
                    <div class="row no-gutters">
                        <div class="col-6 " style="padding-right: 40px;" style="margin-right: 0px;">
                            <div class="subtitle"><h5>Product Manager</h5></div>
                            <div class="text"><p>List an appealing fact about your target customer here.</p></div>
                        </div>
                        <div class="col-6 " style="padding-right: 40px; margin-left: -50px;" >
                            <div class="subtitle"><h5>$200k+ Incomer</h5></div>
                            <div class="text"><p>List an appealing fact about your target customer here.</p></div>
                        </div>
                    </div>
                    <div class="row no-gutters" style="margin-top: 40px;">
                        <div class="col-6 " style="padding-right: 40px;" style="margin-right: 0px;">
                            <div class="subtitle"><h5>Decision Maker</h5></div>
                            <div class="text"><p>List an appealing fact about your target customer here.</p></div>
                        </div>
                        <div class="col-6 " style="padding-right: 40px; margin-left:-50px">
                            <div class="subtitle"><h5>Metro Area</h5></div>
                            <div class="text"><p>List an appealing fact about your target customer here.</p></div>
                        </div>
                    </div>

                </div>

                <div class="row-3" style="margin-top: 40px; padding-right: 200px;">
                    <h5>In this city alone, there are 1M product managers.</h5>

                </div>

            </div>
        </div>

    </div>

</body>

</html>
