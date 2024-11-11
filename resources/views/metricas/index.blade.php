<x-app-layout>

    <h5 class="dashboard-title text-center">Gráficos</h5>


    <div class="container chart-container">


                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Curso', 'Quantidade de Alunos'],
                            @foreach($cursos as $index => $curso)
                                ["{{ $curso }}" , {{ $quantidades[$index] }}],
                            @endforeach
                        ]);

                        var options = {
                            title: 'Quantidade de Alunos Matriculados por Curso'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>

                <div class="d-flex justify-content-center">
                    <div id="piechart" style="width: 70rem; height: 30rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
