<br><br><br>
 <footer>
 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-5">
                    <ul class="list-inline social-buttons">
                        <span class="copyright">Copyright &copy; Balai Besar Pelaksanaan Jalan Nasional IV 2016</span>
                    </ul>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/agency.js"></script>
    <script src="<?php echo base_url();?>assets/js/amcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/serial.js" type="text/javascript"></script>

       <script>
            var chart;
            var chartData = [
                {
                    "year": "Jan",
                    "income": 0.5,
                    "expenses": 10.1
                },
                {
                    "year": "Feb",
                    "income": 10.2,
                    "expenses": 22.8
                },
                {
                    "year": "Mar",
                    "income": 15.1,
                    "expenses": 30.9
                },
                {
                    "year": "Apr",
                    "income": 29.5,
                    "expenses": 40.1
                },
                {
                    "year": "Mei",
                    "income": 35.5,
                    "expenses": 50.1
                },
                {
                    "year": "Jun",
                    "income": 43.5,
                    "expenses": 60.1
                },
                {
                    "year": "Jul",
                    "income": 50.5,
                    "expenses": 70.1
                },
                {
                    "year": "Agu",
                    "income": 55.5,
                    "expenses": 75.1
                },
                {
                    "year": "Sep",
                    "income": 60.5,
                    "expenses": 80.1
                },
                {
                    "year": "Okt",
                    "income": 65.6,
                    "expenses": 85.2,
                    "dashLengthLine": 5
                },
                {
                    "year": "Nov",
                    "income": 70.6,
                    "expenses": 88.2,
                    "dashLengthLine": 5
                },
                {
                    "year": "Des",
                    "income": 73.1,
                    "expenses": 92,
                    "dashLengthColumn": 5,
                    "alpha":0.2,
                    "additional":"(projection)"
                }

            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();

                chart.dataProvider = chartData;
                chart.categoryField = "year";
                chart.startDuration = 2;

                chart.handDrawn = true;
                chart.handDrawnScatter = 3;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 1;
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // column graph
                var graph1 = new AmCharts.AmGraph();
                graph1.type = "column";
                graph1.title = "Serapan";
                graph1.lineColor = "#a668d5";
                graph1.valueField = "income";
                graph1.lineAlpha = 1;
                graph1.fillAlphas = 1;
                graph1.dashLengthField = "dashLengthColumn";
                graph1.alphaField = "alpha";
                graph1.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph1);

                // line
                var graph2 = new AmCharts.AmGraph();
                graph2.type = "line";
                graph2.title = "Target";
                graph2.lineColor = "#fcd202";
                graph2.valueField = "expenses";
                graph2.lineThickness = 3;
                graph2.bullet = "round";
                graph2.bulletBorderThickness = 3;
                graph2.bulletBorderColor = "#fcd202";
                graph2.bulletBorderAlpha = 1;
                graph2.bulletColor = "#ffffff";
                graph2.dashLengthField = "dashLengthLine";
                graph2.balloonText = "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span>";
                chart.addGraph(graph2);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.useGraphSettings = true;
                chart.addLegend(legend);

                // WRITE
                chart.write("chartdiv");
            });
        </script>
</body>

</html>
