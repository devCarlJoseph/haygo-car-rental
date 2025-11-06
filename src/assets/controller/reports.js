// --- MOCK DATA STORE ---
// Enhanced mock data to include month/year for charting
const mockBookings = [{
    id: 1001,
    vehicle_name: 'Toyota Camry (2023)',
    month: 'May 2025',
    total: 375.00,
    status: 'Confirmed'
},
{
    id: 1003,
    vehicle_name: 'Audi Q5 (2023)',
    month: 'Sep 2025',
    total: 480.00,
    status: 'Completed'
},
{
    id: 1004,
    vehicle_name: 'Tesla Model Y (2024)',
    month: 'Oct 2025',
    total: 945.00,
    status: 'Confirmed'
},
{
    id: 1005,
    vehicle_name: 'Nissan Rogue (2021)',
    month: 'Sep 2025',
    total: 340.00,
    status: 'Completed'
},
{
    id: 1006,
    vehicle_name: 'BMW 3 Series (2024)',
    month: 'Aug 2025',
    total: 450.00,
    status: 'Cancelled'
},
{
    id: 1008,
    vehicle_name: 'Ford Transit Van (2022)',
    month: 'Nov 2025',
    total: 1800.00,
    status: 'Confirmed'
},
{
    id: 1009,
    vehicle_name: 'Audi Q5 (2023)',
    month: 'Oct 2025',
    total: 480.00,
    status: 'Confirmed'
},
{
    id: 1010,
    vehicle_name: 'Tesla Model Y (2024)',
    month: 'Sep 2025',
    total: 945.00,
    status: 'Completed'
},
{
    id: 1011,
    vehicle_name: 'Ford Transit Van (2022)',
    month: 'Aug 2025',
    total: 1800.00,
    status: 'Confirmed'
},
{
    id: 1012,
    vehicle_name: 'Nissan Rogue (2021)',
    month: 'Nov 2025',
    total: 340.00,
    status: 'Confirmed'
},
];

// --- UTILITY FUNCTIONS ---

/** Formats a number into US currency string. */
function formatCurrency(amount) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
        minimumFractionDigits: 2
    }).format(amount);
}

/**
 * Generates the HTML for a KPI card.
 * @param {string} title - The title of the KPI.
 * @param {string} value - The calculated value (formatted).
 * @param {string} icon - Bootstrap icon class.
 * @param {string} bgColor - Tailor background color for the icon.
 * @returns {string} HTML string for the card.
 */
function renderKpiCard(title, value, icon, bgColor) {
    return `
                <div class="col-md-4">
                    <div class="kpi-card">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="text-uppercase text-secondary small mb-1 fw-medium">${title}</p>
                                <h3 class="fw-bold mb-0 text-dark">${value}</h3>
                            </div>
                            <div class="kpi-icon ${bgColor} text-white shadow-sm">
                                <i class="${icon}"></i>
                            </div>
                        </div>
                    </div>
                </div>
            `;
}

// --- DATA PROCESSING LOGIC ---

/** Calculates overall KPIs from the booking data. */
function calculateKPIs() {
    const totalRevenue = mockBookings.reduce((sum, b) => sum + b.total, 0);
    const totalBookings = mockBookings.length;
    // Mock Utilization: Assume 10 vehicles total, and 10 bookings/month is 100% capacity
    const utilizationRate = Math.round((totalBookings / (10 * 3)) * 100); // Mocking for a 3-month period

    return {
        totalRevenue,
        totalBookings,
        utilizationRate
    };
}

/** Processes data for the Monthly Revenue Trend chart. */
function getMonthlyRevenueData() {
    const revenueByMonth = mockBookings.reduce((acc, booking) => {
        acc[booking.month] = (acc[booking.month] || 0) + booking.total;
        return acc;
    }, {});

    // Sort months (simplified sorting for demo, assuming Mmm YYYY format)
    const sortedMonths = Object.keys(revenueByMonth).sort((a, b) => {
        const dateA = new Date(a.replace(' ', ' 1, '));
        const dateB = new Date(b.replace(' ', ' 1, '));
        return dateA - dateB;
    });

    return {
        labels: sortedMonths,
        data: sortedMonths.map(month => revenueByMonth[month])
    };
}

/** Processes data for the Booking Status Distribution chart. */
function getStatusDistributionData() {
    const statusCounts = mockBookings.reduce((acc, booking) => {
        acc[booking.status] = (acc[booking.status] || 0) + 1;
        return acc;
    }, {});

    const labels = Object.keys(statusCounts);
    const data = labels.map(status => statusCounts[status]);

    // Define colors matching the theme and status type
    const backgroundColors = labels.map(status => {
        switch (status) {
            case 'Confirmed':
                return '#38a169'; // Greenish
            case 'Completed':
                return '#AB8B7D'; // Primary rental color
            case 'Cancelled':
                return '#e53e3e'; // Red
            default:
                return '#718096';
        }
    });

    return {
        labels,
        data,
        backgroundColors
    };
}

/** Processes data for the Top Vehicles table. */
function getTopVehiclesData() {
    const vehicleStats = mockBookings.reduce((acc, booking) => {
        const name = booking.vehicle_name;
        acc[name] = acc[name] || {
            bookings: 0,
            revenue: 0,
            name: name
        };
        acc[name].bookings += 1;
        acc[name].revenue += booking.total;
        return acc;
    }, {});

    const sortedVehicles = Object.values(vehicleStats)
        .sort((a, b) => b.revenue - a.revenue) // Sort by revenue descending
        .slice(0, 5); // Take top 5

    return sortedVehicles;
}

// --- RENDERING FUNCTIONS ---

function initKpiCards() {
    const {
        totalRevenue,
        totalBookings,
        utilizationRate
    } = calculateKPIs();
    const kpiContainer = document.getElementById('kpi-cards');

    let html = '';
    html += renderKpiCard('Total Revenue', formatCurrency(totalRevenue), 'bi bi-cash-stack', 'bg-success');
    html += renderKpiCard('Total Bookings', totalBookings.toString(), 'bi bi-calendar-check', 'bg-rental-primary');
    html += renderKpiCard('Utilization Rate (Mock)', `${utilizationRate}%`, 'bi bi-speedometer2', 'bg-info');

    kpiContainer.innerHTML = html;
}

function initMonthlyRevenueChart() {
    const {
        labels,
        data
    } = getMonthlyRevenueData();
    const canvas = document.getElementById('monthlyRevenueChart');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    // Destroy previous instance safely
    if (window.monthlyRevenueChart instanceof Chart) {
        window.monthlyRevenueChart.destroy();
    }

    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, "rgba(171, 139, 125, 0.5)");
    gradient.addColorStop(1, "rgba(171, 139, 125, 0)");

    window.monthlyRevenueChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels,
            datasets: [{
                label: 'Revenue',
                data,
                backgroundColor: gradient,
                borderColor: "#AB8B7D",
                borderWidth: 3,
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 8,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: value => formatCurrency(value)
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
}

function initStatusDistributionChart() {
    const {
        labels,
        data,
        backgroundColors
    } = getStatusDistributionData();
    const canvas = document.getElementById('statusDistributionChart');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    // Destroy previous instance safely
    if (window.statusDistributionChart instanceof Chart) {
        window.statusDistributionChart.destroy();
    }

    window.statusDistributionChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels,
            datasets: [{
                data,
                backgroundColor: backgroundColors,
                hoverOffset: 8
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "bottom"
                }
            }
        }
    });
}


function initTopVehiclesTable() {
    const topVehicles = getTopVehiclesData();
    const tableBody = document.getElementById('topVehiclesTableBody');
    let html = '';

    topVehicles.forEach((vehicle, index) => {
        html += `
                    <tr>
                        <td class="px-3 py-3 fw-semibold text-rental-primary">${index + 1}</td>
                        <td class="px-3 py-3 text-dark">${vehicle.name}</td>
                        <td class="px-3 py-3 text-start">${vehicle.bookings}</td>
                        <td class="px-3 py-3 text-end fw-bold text-success">${formatCurrency(vehicle.revenue)}</td>
                    </tr>
                `;
    });

    if (topVehicles.length === 0) {
        html = `<tr><td colspan="4" class="text-center p-4 text-secondary">No vehicle data available.</td></tr>`;
    }

    tableBody.innerHTML = html;
}


/**
 * Initialization function called on page load.
 */
window.onload = function () {
    // Initialize all components
    initKpiCards();
    initMonthlyRevenueChart();
    initStatusDistributionChart();
    initTopVehiclesTable();
}