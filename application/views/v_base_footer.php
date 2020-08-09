    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.list-sidebar li a span').toggleClass('d-none');
                $('.logo-sidebar').toggleClass('inactive');
            });
            var incomeChart = document.getElementById('incomeChart').getContext('2d');
            var monthlyIncomeChart = new Chart(incomeChart, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                    datasets: [{
                        label: 'Pendapatan Perbulan',
                        backgroundColor: '#1d3557',
                        borderColor: '#fff',
                        data: [21, 10, 5, 2, 20, 30, 45, 32, 28, 3, 15, 40]
                    }]
                },

                // Configuration options go here
                options: {}
            });
            var orderChart = document.getElementById('orderChart').getContext('2d');
            var monthlyOrderChart = new Chart(orderChart, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
                    datasets: [{
                        label: 'Pendapatan Pertahun',
                        backgroundColor: '#1d3557',
                        borderColor: '#fff',
                        data: [21, 15, 8, 11, 16, 30, 42, 29, 12, 25, 19, 0]
                    }]
                },

                // Configuration options go here
                options: {}
            });
        });
    </script>
</body>

</html>