// 2do codigo
// // // // BAR CHART
// var barChartOptions = {
//     series: [{
//       data: [8, 11, 5, 8, 2]
//     }],
//     chart: {
//       type: 'bar',
//       height: 350,
//       toolbar: {
//         show: false
//       },
//     },
//     colors: [
//       "#246dec",
//       "#cc3c43",
//       "#367952",
//       "#f5b74f",
//       "#4f35a1"
//     ],
//     plotOptions: {
//       bar: {
//         distributed: true,
//         borderRadius: 4,
//         horizontal: false,
//         columnWidth: '40%',
//       }
//     },
//     dataLabels: {
//       enabled: false
//     },
//     legend: {
//       show: false
//     },
//     xaxis: {
//       categories: ["Carboidratos", "Sodios", "Calcio", "Grasas", "Azucar"],
//     },
//     yaxis: {
//       title: {
//         text: "Count"
//       }
//     }
//   };
  
//   var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
//   barChart.render();
  
  
// // // AREA CHART
var areaChartOptions = {
  series: [{
    name: 'Dias cumplidos',
    data: [28, 31, 20, 30, 19, 30, 12, 10]
  }, {
    name: 'Dias no cumplidos',
    data: [12, 25, 12, 16, 25, 30, 16, 2]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1", "#246dec"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Ago", "Sep", "Oct"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Purchase Orders',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Sales Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

var areaChart = new ApexCharts(document.getElementById("area-chart"), areaChartOptions);
areaChart.render();




const gaugeElement = document.querySelector(".gauge");

function setGaugeValue(gauge, value) {
if (value < 0 || value > 1) {
  return;
}

gauge.querySelector(".gauge__fill").style.transform = `rotate(${
  value / 2
}turn)`;
gauge.querySelector(".gauge__cover").textContent = `${Math.round(
  value * 100
)}%`;
}

setGaugeValue(gaugeElement, 0.15);
