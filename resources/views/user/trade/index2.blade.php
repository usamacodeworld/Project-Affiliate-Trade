<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeHub - Alpaca Trading Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-indigo-700 text-white shadow-lg">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-chart-line text-xl"></i>
                <h1 class="text-xl font-bold">TradeHub</h1>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="hover:text-indigo-200"><i class="fas fa-home mr-1"></i> Dashboard</a>
                <a href="#" class="hover:text-indigo-200"><i class="fas fa-exchange-alt mr-1"></i> Trade</a>
                <a href="#" class="hover:text-indigo-200"><i class="fas fa-history mr-1"></i> History</a>
                <a href="#" class="hover:text-indigo-200"><i class="fas fa-wallet mr-1"></i> Funds</a>
                <div class="flex items-center space-x-2">
                    <div class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>John Trader</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <!-- Portfolio Summary -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-gray-500 text-sm">Portfolio Value</div>
                <div class="text-2xl font-bold text-indigo-700">$24,568.42</div>
                <div class="text-green-500 text-sm flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> +$342.56 (1.41%)
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-gray-500 text-sm">Buying Power</div>
                <div class="text-2xl font-bold text-indigo-700">$12,450.00</div>
                <div class="text-sm">Available for trading</div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-gray-500 text-sm">Cash Balance</div>
                <div class="text-2xl font-bold text-indigo-700">$3,245.18</div>
                <div class="text-sm">Settled funds</div>
            </div>
            
            <div class="bg-white rounded-lg shadow p-4">
                <div class="text-gray-500 text-sm">Today's P&L</div>
                <div class="text-2xl font-bold text-green-500">+$128.75</div>
                <div class="text-sm">Unrealized gain</div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column: Portfolio Holdings -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow p-4 mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Your Portfolio</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asset</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avg Cost</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Current Price</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Market Value</th>
                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">P&L</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                                                <i class="fab fa-apple text-blue-600"></i>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-900">AAPL</div>
                                                <div class="text-sm text-gray-500">Apple Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">15</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$168.42</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$174.85</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$2,622.75</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-green-500 font-medium">+$96.45</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                                <i class="fab fa-microsoft text-green-600"></i>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-900">MSFT</div>
                                                <div class="text-sm text-gray-500">Microsoft Corp.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">8</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$298.75</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$312.40</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$2,499.20</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-green-500 font-medium">+$109.20</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center mr-2">
                                                <i class="fab fa-google text-red-600"></i>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-900">GOOGL</div>
                                                <div class="text-sm text-gray-500">Alphabet Inc.</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">5</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$132.40</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$128.75</td>
                                    <td class="px-4 py-3 whitespace-nowrap">$643.75</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-red-500 font-medium">-$18.25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Trading Activity -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Activity</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center border-b pb-3">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                    <i class="fas fa-arrow-up text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">Bought AAPL</div>
                                    <div class="text-sm text-gray-500">Today at 10:23 AM</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">15 shares @ $174.85</div>
                                <div class="text-sm">Total $2,622.75</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center border-b pb-3">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center mr-3">
                                    <i class="fas fa-arrow-down text-red-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">Sold TSLA</div>
                                    <div class="text-sm text-gray-500">Yesterday at 2:45 PM</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">5 shares @ $245.30</div>
                                <div class="text-sm">Total $1,226.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Trading & Market Data -->
            <div>
                <!-- Trading Widget -->
                <div class="bg-white rounded-lg shadow p-4 mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Trade Stocks</h2>
                    <form>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="symbol">Symbol</label>
                            <div class="relative">
                                <input type="text" id="symbol" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Enter stock symbol (e.g. AAPL)">
                                <button type="button" class="absolute right-2 top-2 text-gray-400 hover:text-gray-600">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Order Type</label>
                                <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option>Market</option>
                                    <option>Limit</option>
                                    <option>Stop</option>
                                    <option>Stop Limit</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 text-sm font-bold mb-2">Time in Force</label>
                                <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option>Day</option>
                                    <option>GTC</option>
                                    <option>IOC</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Quantity</label>
                            <input type="number" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="0" min="1">
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Price ($)</label>
                            <input type="number" step="0.01" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="0.00" disabled>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-arrow-up mr-2"></i> Buy
                            </button>
                            <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                                <i class="fas fa-arrow-down mr-2"></i> Sell
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Market Data -->
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Market Watchlist</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center border-b pb-3">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                                    <i class="fab fa-apple text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">AAPL</div>
                                    <div class="text-sm text-gray-500">Apple Inc.</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">$174.85</div>
                                <div class="text-sm text-green-500">+1.25%</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center border-b pb-3">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                    <i class="fab fa-microsoft text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">MSFT</div>
                                    <div class="text-sm text-gray-500">Microsoft</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">$312.40</div>
                                <div class="text-sm text-green-500">+0.82%</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center border-b pb-3">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center mr-2">
                                    <i class="fab fa-amazon text-yellow-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">AMZN</div>
                                    <div class="text-sm text-gray-500">Amazon</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">$128.75</div>
                                <div class="text-sm text-red-500">-0.35%</div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center mr-2">
                                    <i class="fab fa-google text-red-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium">GOOGL</div>
                                    <div class="text-sm text-gray-500">Alphabet</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-medium">$128.75</div>
                                <div class="text-sm text-red-500">-0.45%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Chart -->
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Portfolio Performance</h2>
            <canvas id="performanceChart" height="150"></canvas>
        </div>
    </div>

    <script>
        // Portfolio Performance Chart
        const ctx = document.getElementById('performanceChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Portfolio Value',
                    data: [18000, 19500, 21000, 22500, 23000, 24000, 24568],
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    borderWidth: 2,
                    pointRadius: 0,
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>