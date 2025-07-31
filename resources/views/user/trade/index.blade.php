<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Trading Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <form id="trade-form" action="{{ route('user.trade.place') }}" method="POST">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-3xl font-bold text-center text-indigo-700 mb-8">Crypto Trading Platform</h1>

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 p-4 rounded-lg mb-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Asset Selection -->
                <div class="mb-8">
                    <label class="block text-gray-700 text-lg font-bold mb-3" for="asset-select">
                        Select Crypto Asset:
                    </label>
                    <div class="relative">
                        <select id="asset-select" name="symbol"
                            class="w-full p-4 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="">--Select Asset--</option>
                            @foreach ($assets as $asset)
                                <option value="{{ $asset['symbol'] }}">
                                    {{ $asset['name'] }} ({{ $asset['symbol'] }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Quote Details -->
                <div id="quote-container" class="hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <!-- Price Information -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Current Price</h2>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-gray-600">Last Price:</span>
                                <span id="last-price" class="text-2xl font-bold">--</span>
                            </div>
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-gray-600">24h Change:</span>
                                <span id="daily-change" class="text-lg font-semibold">--</span>
                            </div>
                        </div>

                        <!-- Order Book -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-xl font-bold text-gray-800 mb-4">Order Book</h2>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-green-600 font-semibold mb-2">Bid</h3>
                                    <div class="flex justify-between">
                                        <span>Price:</span>
                                        <span id="bid-price">--</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Size:</span>
                                        <span id="bid-size">--</span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-red-600 font-semibold mb-2">Ask</h3>
                                    <div class="flex justify-between">
                                        <span>Price:</span>
                                        <span id="ask-price">--</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Size:</span>
                                        <span id="ask-size">--</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trading Form -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6 mb-8">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Place Trade</h2>

                        @csrf
                        <input type="hidden" name="price" id="price-field" value="">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Order Type</label>
                                <select name="type" id="order-type"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="market">Market</option>
                                    <option value="limit">Limit</option>
                                    <option value="stop">Stop</option>
                                    <option value="stop_limit">Stop Limit</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Time in Force</label>
                                <select name="time_in_force"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <option value="day">Day</option>
                                    <option value="gtc">Good 'Til Canceled (GTC)</option>
                                    <option value="opg">At Market Open (OPG)</option>
                                    <option value="cls">At Market Close (CLS)</option>
                                    <option value="ioc">Immediate or Cancel (IOC)</option>
                                    <option value="fok">Fill or Kill (FOK)</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="quantity">Quantity</label>
                                <input type="number" name="qty" id="quantity" step="0.0001"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    placeholder="0.0000" required>
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Price ($)</label>
                                <input type="number" step="0.01" name="limit_price" id="limit-price"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <div class="mt-8 grid grid-cols-2 gap-4">
                            <button type="submit" name="side" value="buy"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-200">
                                <i class="fas fa-arrow-up mr-2"></i> Buy
                            </button>
                            <button type="submit" name="side" value="sell"
                                class="bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-6 rounded-lg text-lg transition duration-200">
                                <i class="fas fa-arrow-down mr-2"></i> Sell
                            </button>
                        </div>
                    </div>

                    <!-- Price History Chart -->
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4">Price History</h2>
                        <canvas id="price-chart" height="300"></canvas>
                    </div>
                </div>

                <!-- Loading State -->
                <div id="loading" class="hidden text-center py-12">
                    <div
                        class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-indigo-500 mb-4">
                    </div>
                    <p class="text-gray-600">Fetching asset data...</p>
                </div>

                <!-- Error State -->
                <div id="error"
                    class="hidden bg-red-50 border border-red-200 text-red-700 p-6 rounded-lg text-center">
                    <i class="fas fa-exclamation-triangle text-2xl mb-3"></i>
                    <p id="error-message"></p>
                </div>
            </div>
        </form>
    </div>

    <div class="container mx-auto p-6">

        <h2 class="text-2xl mb-4">Trade History</h2>
        <table class="table-auto w-full mb-8">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Symbol</th>
                    <th>Side</th>
                    <th>QTY</th>
                    <th>Filled</th>
                    <th>Avg Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="border-b">
                        <td>{{ \Carbon\Carbon::parse($order['submitted_at'])->format('Y-m-d H:i') }}</td>
                        <td>{{ $order['symbol'] }}</td>
                        <td>{{ strtoupper($order['side']) }}</td>
                        <td>{{ $order['qty'] }}</td>
                        <td>{{ $order['filled_qty'] }}</td>
                        <td>{{ $order['filled_avg_price'] ?? '–' }}</td>
                        <td>{{ ucfirst($order['status']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="text-2xl mb-4">Open Positions</h2>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th>Symbol</th>
                    <th>Qty</th>
                    <th>Avg Entry</th>
                    <th>Market Price</th>
                    <th>Unrealized P/L</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $pos)
                    <tr class="border-b">
                        <td>{{ $pos['symbol'] }}</td>
                        <td>{{ $pos['qty'] }}</td>
                        <td>{{ $pos['avg_entry_price'] }}</td>
                        <td>{{ $pos['market_value'] }}</td>
                        <td class="{{ $pos['unrealized_pl'] >= 0 ? 'text-green-600' : 'text-red-600' }}">
                            {{ $pos['unrealized_pl'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const assetSelect = document.getElementById('asset-select');
            const quoteContainer = document.getElementById('quote-container');
            const loading = document.getElementById('loading');
            const error = document.getElementById('error');
            const errorMessage = document.getElementById('error-message');
            const orderType = document.getElementById('order-type');
            const limitPriceField = document.getElementById('limit-price');
            const priceField = document.getElementById('price-field');

            // Price elements
            const lastPriceEl = document.getElementById('last-price');
            const dailyChangeEl = document.getElementById('daily-change');
            const bidPriceEl = document.getElementById('bid-price');
            const bidSizeEl = document.getElementById('bid-size');
            const askPriceEl = document.getElementById('ask-price');
            const askSizeEl = document.getElementById('ask-size');

            // Chart initialization
            const ctx = document.getElementById('price-chart').getContext('2d');
            let priceChart = null;
            let currentSymbol = '';
            let currentQuote = null;

            // Toggle limit price field based on order type
            orderType.addEventListener('change', function() {
                if (['limit', 'stop_limit'].includes(this.value)) {
                    limitPriceField.required = true;
                } else {
                    limitPriceField.required = false;
                }
            });

            assetSelect.addEventListener('change', function() {
                const symbol = this.value;

                if (!symbol) {
                    quoteContainer.classList.add('hidden');
                    return;
                }

                // Show loading state
                quoteContainer.classList.add('hidden');
                error.classList.add('hidden');
                loading.classList.remove('hidden');

                // Fetch quote data
                fetch(`/user/get-quote/${symbol}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to fetch quote');
                        }
                        return response.json();
                    })
                    .then(data => {
                        // Hide loading, show quote
                        loading.classList.add('hidden');

                        if (data.error) {
                            showError(data.error);
                            return;
                        }

                        // Update UI with quote data
                        currentSymbol = symbol;
                        currentQuote = data;
                        updateQuoteDisplay(data);
                        updatePriceChart(symbol);

                        // Show the quote container
                        quoteContainer.classList.remove('hidden');
                    })
                    .catch(err => {
                        loading.classList.add('hidden');
                        showError(err.message || 'Failed to fetch asset data');
                    });
            });

            // Handle form submission
            document.getElementById('trade-form').addEventListener('submit', function(e) {
                // Set the price field value
                if (currentQuote) {
                    const midPrice = (parseFloat(currentQuote.bp) + parseFloat(currentQuote.ap)) / 2;
                    priceField.value = midPrice.toFixed(2);
                }

                // For limit orders, use the limit price field
                if (orderType.value === 'limit') {
                    priceField.value = limitPriceField.value;
                }

                // Show loading state
                loading.classList.remove('hidden');
                quoteContainer.classList.add('hidden');
            });

            function updateQuoteDisplay(quote) {
                // Calculate mid price
                const bidPrice = parseFloat(quote.bp);
                const askPrice = parseFloat(quote.ap);
                const midPrice = (bidPrice + askPrice) / 2;

                // Update price information
                lastPriceEl.textContent = formatCurrency(midPrice);
                bidPriceEl.textContent = formatCurrency(bidPrice);
                bidSizeEl.textContent = quote.bs;
                askPriceEl.textContent = formatCurrency(askPrice);
                askSizeEl.textContent = quote.as;

                // Calculate daily change
                const lastPrice = parseFloat(quote.last);
                const prevClose = parseFloat(quote.last_day_closing);
                const dailyChange = lastPrice - prevClose;
                const dailyChangePercent = prevClose ? ((dailyChange / prevClose) * 100).toFixed(2) : 0;

                dailyChangeEl.textContent =
                    `${dailyChange >= 0 ? '+' : ''}${formatCurrency(dailyChange)} (${dailyChangePercent}%)`;
                dailyChangeEl.className = dailyChange >= 0 ?
                    'text-lg font-semibold text-green-500' :
                    'text-lg font-semibold text-red-500';

                // Set limit price field to mid price
                limitPriceField.value = midPrice.toFixed(2);
            }

            function updatePriceChart(symbol) {
                // Destroy existing chart if it exists
                if (priceChart) {
                    priceChart.destroy();
                }

                // For demo purposes - in a real app, you'd fetch historical data
                const labels = ['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00'];
                const data = [65000, 65200, 65500, 65800, 66000, 66200, 66400];

                priceChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: `${symbol} Price`,
                            data: data,
                            borderColor: '#4f46e5',
                            backgroundColor: 'rgba(79, 70, 229, 0.05)',
                            borderWidth: 2,
                            pointRadius: 3,
                            pointBackgroundColor: '#4f46e5',
                            fill: true,
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            },
                            tooltip: {
                                mode: 'index',
                                intersect: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                grid: {
                                    drawBorder: false
                                },
                                ticks: {
                                    callback: function(value) {
                                        return '$' + value.toLocaleString();
                                    }
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
            }

            function showError(message) {
                errorMessage.textContent = message;
                error.classList.remove('hidden');
            }

            function formatCurrency(value) {
                return '$' + parseFloat(value).toLocaleString(undefined, {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
        });
    </script>
</body>

</html>
