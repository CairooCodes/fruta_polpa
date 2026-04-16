<?php
require "./functions/get.php";

$data = getParticipantsByDay();

$labels = [];
$values = [];

foreach ($data as $row) {
    $labels[] = date('d/m', strtotime($row['date']));
    $values[] = (int) $row['total'];
}
?>

<div class="w-full rounded-xl shadow p-6" style="background-color: #CE5215;">
    <h2 class="text-lg font-semibold mb-4 text-white">
        Participantes por dia
    </h2>

    <canvas id="participantsChart" height="120"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const labels = <?= json_encode($labels) ?>;
        const values = <?= json_encode($values) ?>;

        const ctx = document.getElementById('participantsChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Participantes',
                    data: values,
                    borderColor: '#FFFFFF',
                    backgroundColor: 'rgba(255,255,255,0.15)',
                    borderWidth: 3,
                    tension: 0.3,
                    pointRadius: 4,
                    pointBackgroundColor: '#FFFFFF',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#FFFFFF'
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#FFFFFF'
                        },
                        grid: {
                            color: 'rgba(255,255,255,0.2)'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#FFFFFF',
                            stepSize: 1
                        },
                        grid: {
                            color: 'rgba(255,255,255,0.2)'
                        }
                    }
                }
            }
        });

    });
</script>