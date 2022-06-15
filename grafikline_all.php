<?php
include('koneksidb.php');
$india = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='India'");
$korsel = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Korea Selatan'");
$turkey = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Turkey'");
$vietnam = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Vietnam'");
$japan = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Japan'");
$iran = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Iran'");
$indo = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Indonesia'");
$malay = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Malaysia'");
$thai = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Thailand'");
$israel = mysqli_query($conn, "SELECT * FROM tb_covid19 WHERE negara='Israel'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GRAFIK LINE COVID-19</title>
    <script src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        body {
                padding-top: 2%;
            }
        .container {
            width: 1400px;
            height: 625px;
            }
    </style>
</head>

<body>

    <center><h2>LAPORAN GRAFIK LINE COVID-19</h2></center>
    <br>
    <div class="container">
        <canvas id="linechart" width="100" height="100"></canvas>
    </div>

</body>
</html>

<script  type="text/javascript">
var ctx = document.getElementById("linechart").getContext("2d");
var data = {
            labels: ["New Case","Total Death","New Death","Total Recover","New Recover"],
            datasets: [
                {
                    label: "India",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($india)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Korea Selatan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($korsel)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Turkey",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($turkey)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Vietnam",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($vietnam)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Japan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($japan)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Iran",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#FFC54D",
                    borderColor: "#FFC54D",
                    pointHoverBackgroundColor: "#FFC54D",
                    pointHoverBorderColor: "#FFC54D",
                    data: [<?php while ($p = mysqli_fetch_array($iran)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Indonesia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F87474",
                    borderColor: "#F87474",
                    pointHoverBackgroundColor: "#F87474",
                    pointHoverBorderColor: "#F87474",
                    data: [<?php while ($p = mysqli_fetch_array($indo)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Malaysia",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#A149FA",
                    borderColor: "#A149FA",
                    pointHoverBackgroundColor: "#A149FA",
                    pointHoverBorderColor: "#A149FA",
                    data: [<?php while ($p = mysqli_fetch_array($malay)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Thailand",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#53BF9D",
                    borderColor: "#53BF9D",
                    pointHoverBackgroundColor: "#53BF9D",
                    pointHoverBorderColor: "#53BF9D",
                    data: [<?php while ($p = mysqli_fetch_array($thai)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                },
                {
                    label: "Israel",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#3EC70B",
                    borderColor: "#3EC70B",
                    pointHoverBackgroundColor: "#3EC70B",
                    pointHoverBorderColor: "#3EC70B",
                    data: [<?php while ($p = mysqli_fetch_array($israel)) { echo '"' . $p['newcase'] . '","' . $p['totaldeath'] . '","' . $p['newdeath'] . '","' . $p['totalrecover'] . '","' . $p['newrecover'] . '",';}?>]
                }
                ]
        };

var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            responsive:true,
            maintainAspectRatio: false,
            legend: {
            display: true
            },
            barValueSpacing: 20,
            scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                }
            }],
            xAxes: [{
                    gridLines: {
                        color: "rgba(0, 0, 0, 0)",
                        }
                    }]
            }
        }
        });
</script>