const ctx = document.getElementById('fleetUtilizationChart').getContext('2d');

// Sample data (30 days utilization)
const utilizationData = [
    75, 80, 78, 82, 79, 85, 90, 88, 84, 87,
    82, 81, 80, 78, 79, 83, 91, 92, 95, 94,
    89, 88, 86, 84, 79, 77, 80, 82, 83, 81
];

new Chart(ctx, {
    type: 'line',
    data: {
        labels: Array.from({ length: 30 }, (_, i) => `Day ${i + 1}`),
        datasets: [{
            label: 'Utilization Rate (%)',
            data: utilizationData,
            fill: true,
            tension: 0.35,
            borderWidth: 2,
            borderColor: '#0dcaf0',
            backgroundColor: 'rgba(13, 202, 240, 0.20)',
            pointRadius: 0
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: false, suggestedMin: 60, suggestedMax: 100 },
        },
        plugins: {
            legend: { display: false },
            tooltip: { callbacks: { label: (ctx) => ctx.raw + '%' } }
        }
    }
});


const ctxBookings = document.getElementById('bookingsChannelChart').getContext('2d');

new Chart(ctxBookings, {
    type: 'pie',
    data: {
        labels: ['Online Direct', 'Third-Party Aggregator', 'Phone/Walk-in'],
        datasets: [{
            data: [45, 30, 25],
            backgroundColor: [
                '#0d6efd', // Online Direct
                '#0dcaf0', // Third-Party Aggregator
                '#198754'  // Phone/Walk-in
            ],
            borderWidth: 0
        }]
    },
    options: {
        plugins: {
            legend: {
                display: true,
                position: 'bottom'
            },
            tooltip: {
                callbacks: {
                    label: (context) => context.label + ': ' + context.raw + '%'
                }
            }
        }
    }
});

