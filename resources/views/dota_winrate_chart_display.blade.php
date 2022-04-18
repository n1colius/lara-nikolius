@extends('layouts.default')
@section('content')

<div class="container-fluid p-0">
	<section class="resume-section">
        <div class="resume-section-content row">

        	<h2><a href="{{ route('dota_winrate_chart') }}">Dota 2 Winrate Chart</a></h2>
        	<br><br><br>

        	<!-- Munculkan dulu chartnya secara manual, baru susun dari code nya (Begin) -->

            <canvas id="bar-chart" width="800" ></canvas>

            <!-- Munculkan dulu chartnya secara manual, baru susun dari code nya (End) -->

        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
<script>
    // Bar chart
    const mychart = new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
          datasets: [
            {
              label: "Winrate Percentage",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [10,50,70,80,88]
            }
          ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Zeus vs Heroes (Win Percentage)'
                }
            },
            scales: {
                y: {
                    ticks: {
                        // Include a dollar sign in the ticks
                        callback: function(value, index, ticks) {
                            return value+' %';
                        }
                    },
                    display: true,
                    title: {
                        display: true,
                        text: 'Percentage'
                    }
                },
                x: {
                    display: true,
                    title: {
                        display: true,
                        text: 'Heroes'
                    }
                }
            }
        },
    });
</script>

@endsection