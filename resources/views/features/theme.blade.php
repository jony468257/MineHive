 @extends('app')
@section('title', 'Forms')
@section('content')

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<section class="px-4 py-10">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold mb-10 text-center">📊 Dashboard Overview</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

      <!-- Traffic -->
      <div class="bg-gradient-to-br from-blue-800 to-blue-500 rounded-xl p-6 shadow-md hover:shadow-xl transition">
        <h3 class="text-lg font-semibold">Traffic</h3>
        <p class="text-3xl font-extrabold mt-2 count-up" data-target="24300">0</p>
        <p class="text-sm text-blue-200 mt-1">Visitors in last 7 days</p>
      </div>

      <!-- Unique Visitors -->
      <div class="bg-gradient-to-br from-indigo-800 to-indigo-500 rounded-xl p-6 shadow-md hover:shadow-xl transition">
        <h3 class="text-lg font-semibold">Unique Visitors</h3>
        <p class="text-3xl font-extrabold mt-2 count-up" data-target="8756">0</p>
        <p class="text-sm text-indigo-200 mt-1">Last 30 days</p>
      </div>

      <!-- New Users -->
      <div class="bg-gradient-to-br from-green-800 to-green-500 rounded-xl p-6 shadow-md hover:shadow-xl transition">
        <h3 class="text-lg font-semibold">New Users</h3>
        <p class="text-3xl font-extrabold mt-2 count-up" data-target="1032">0</p>
        <p class="text-sm text-green-200 mt-1">Joined this week</p>
      </div>

      <!-- Sales -->
      <div class="bg-gradient-to-br from-yellow-600 to-yellow-400 rounded-xl p-6 shadow-md hover:shadow-xl transition">
        <h3 class="text-lg font-semibold">Sales</h3>
        <p class="text-3xl font-extrabold mt-2 count-up" data-target="18400">$0</p>
        <p class="text-sm text-yellow-100 mt-1">This month</p>
      </div>

    </div>

    <!-- Chart Section -->
    <div class="bg-gray-800 p-6 rounded-lg shadow-md">
      <h3 class="text-xl font-semibold mb-4">📈 Monthly Visitors & Sales</h3>
      <canvas id="dashboardChart" height="100"></canvas>
    </div>

  </div>
</section>

<script>
  // ------------------ Count-up Animation ------------------
  const counters = document.querySelectorAll('.count-up');
  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText.replace(/\$|,/g, '');
      const increment = target / 60;

      if(current < target){
        let next = Math.ceil(current + increment);
        if(counter.innerText.includes('$')){
          counter.innerText = `$${next.toLocaleString()}`;
        } else {
          counter.innerText = next.toLocaleString();
        }
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = counter.innerText.includes('$') ? `$${target.toLocaleString()}` : target.toLocaleString();
      }
    };
    updateCount();
  });

  // ------------------ Chart.js ------------------
  const ctx = document.getElementById('dashboardChart').getContext('2d');
  const dashboardChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Sep 1', 'Sep 5', 'Sep 10', 'Sep 15', 'Sep 20', 'Sep 25', 'Sep 30'],
      datasets: [
        {
          label: 'Visitors',
          data: [2400, 2800, 3000, 3500, 3700, 4000, 4200],
          borderColor: '#3b82f6',
          backgroundColor: 'rgba(59, 130, 246, 0.1)',
          tension: 0.4,
          fill: true
        },
        {
          label: 'Sales',
          data: [1800, 1900, 2000, 2200, 2500, 2700, 3000],
          borderColor: '#facc15',
          backgroundColor: 'rgba(250, 204, 21, 0.1)',
          tension: 0.4,
          fill: true
        }
      ]
    },
    options: {
      responsive: true,
      plugins: { legend: { labels: { color: '#fff' } } },
      scales: { 
        x: { ticks: { color: '#fff' } }, 
        y: { ticks: { color: '#fff' } } 
      }
    }
  });
</script>

@endsection
