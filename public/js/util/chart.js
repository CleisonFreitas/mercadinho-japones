const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['À Pagar', 'Pago', 'Em Atraso'],
      datasets: [{
        label: 'My First Dataset',
        data: [750,240,600],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
          ],
          hoverOffset: 4
      }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            subtitle: {
                display: true,
                text: 'Custom Chart Subtitle'
            }
        }
    }
  });
