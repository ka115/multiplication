<html>
    <head>
        <title>Multiplication Chart</title>
        <style>
            h1{
                text-align: center;
                color: white;
                font-weight: bold!important;
            }
            .card-box{
                border-radius: 1.25rem!important;
                background-color: deepskyblue!important;
                width: 50%;
                align-items: center;
                margin: auto;
                border: 5px solid white;
            }
            .table-column{
                text-align: center;
                padding: 15px;
                font-weight: 500;
                color: white;
                font-size: 20px;
            }
            .table-column-txt{
                text-align: center;
                background-color: lightblue;
                font-weight: 500;
                font-size: 20px;
                color: black;
            }
            /*.column-txt{*/
                /*color: white;*/
                /*font-size: 20px;*/
            /*}*/
            /*.column-txt-mul{*/
                /*font-size: 20px;*/
                /*color: black;*/
            /*}*/
            .card{
                margin: 15px;
                padding: 15px;
            }
            .card-body{
                background-color: dodgerblue;
                margin: auto;
                width: 75%;
            }
            div>.col-md-2:nth-child(6n) .table-column-txt{
                background-color: lightpink;
            }
            div>.col-md-2:nth-child(6n+1) .table-column-txt{
                background-color: lightblue;
            }
            div>.col-md-2:nth-child(6n+2) .table-column-txt{
                background-color: lightgreen;
            }
            div>.col-md-2:nth-child(6n+3) .table-column-txt{
                background-color: lightgrey;
            }
            div>.col-md-2:nth-child(6n+4) .table-column-txt{
                background-color: lightyellow;
            }
            div>.col-md-2:nth-child(6n+5) .table-column-txt{
                background-color: mediumpurple;
            }
            div>.col-md-2:nth-child(6n) .table-column{
                background-color: hotpink;
            }
            div>.col-md-2:nth-child(6n+1) .table-column{
                background-color: blue;
            }
            div>.col-md-2:nth-child(6n+2) .table-column{
                background-color: green;
            }
            div>.col-md-2:nth-child(6n+3) .table-column{
                background-color: grey;
            }
            div>.col-md-2:nth-child(6n+4) .table-column{
                background-color: darkgoldenrod;
            }
            div>.col-md-2:nth-child(6n+5) .table-column{
                background-color: rebeccapurple;
            }
        </style>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="card-header">
            <form method="post">
                <div class="row">
                    <div class="col">
                        <label>Start Number</label>
                        <input type="number" name="start_number" id="start_number">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>End Number</label>
                        <input type="number" name="end_number" id="end_number">
                    </div>
                </div>
                <input type="submit" name="submit" value="Add">
            </form>
        </div>
        <?php
        function addMultiplication()
        {
//            $errMsg = '';
            $start_number = $_POST['start_number'];
            $end_number = $_POST['end_number'];
            if (isset($_REQUEST['submit'])) {
                if($end_number <= $start_number){
                    $errMsg = "The end Number should be grater then to start number";
                    echo "<div style='color: red;'>$errMsg</div>";
                }
                ?>
                <div class="content-wrapper" style="background-color: black">
                    <div class="card-body">
                        <div class="card-box">
                            <h1>Multiplication Chart</h1>
                        </div>
                        <div class="card">
                            <div class="row">
                                <?php for ($j = $start_number; $j <= $end_number; $j++) { ?>
                                    <div class="col-md-2" style="padding: 15px;">
                                        <div class="table-column">
<!--                                            <span class="column-txt">-->
                                                <?php echo $j."<br>" ?>
<!--                                            </span>-->
                                        </div>
                                        <div class="table-column-txt">
                                            <?php for ($i = 1; $i <= 10; $i++) {
                                                $num1 = $j * $i;
                                            ?>
<!--                                                <span class="column-txt-mul">-->
                                                    <?php echo "$j * $i = $num1 <br>" ?>
<!--                                                </span>-->
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        addMultiplication();
        ?>
    </body>
</html>