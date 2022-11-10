// $(document).ready(function(){


//     var options = {
//         series: [{
//             name: 'series1',
//             data: [101,64,78,191,42,109,100,230]
//         },{
//             name: 'series2',
//             data: [41,32,85,42,124,52,71,128]
//         }],
//         chart: {
//             height: 300,
//             type: 'area',
//             toolbar: {
//                 show: false,
//             }
//         },
//         dataLabels: {
//             enabled: false
//         },
//         colors: ['#1a73c8', '#e91e63'],
//         stroke: {
//             curve: 'smooth',
//         },
//         fill: {
//             type: 'gradient',
//             gradient: {
//                 opacityFrom: 0.6,
//                 opacityTo: 0.8,
//             }
//         },
//         tooltip: {
//             theme: 'dark',
//         },
//         xaxis: {
//             categories: [
//                 "Jan",
//                 "Feb",
//                 "Mar",
//                 "Apr",
//                 "May",
//                 "Jun",
//                 "Jul",
//                 "Aug",
//                 "Sep",
//                 "Oct",
//             ],
//             labels: {
//                 style: {
//                     colors: 'white'
//                 }
//             },
//         },
//         yaxis :{
//             labels: {
//                 style: {
//                     colors: 'white'
//                 }
//             }
//         },
//         legend: {
//             labels: {
//                 colors: 'white'
//             },
//         },
//     };


// var chart = new ApexCharts(document.querySelector("#chLine"), options);
// chart.render();




// /* Barra lateral
// var options = {
//     series: [44, 55, 17, 34],
//     labels: ['Impression', 'Followers', 'Engagement', 'Likes',],
//     chart: {
//         type: 'donut',
//         height: 250,
//         plotOptions: {
//             pie: {
//                 expandOnClick: true
//             },
//         },
//     },
//     colors: ['#3a86ff', '#3d348b', '#ff006e', '#ffbe0b'],
//     legend: {
//         show: false
//     }
// };

// var chart = new ApexCharts(document.querySelector('#dougnut-chart'), options)
// chart.render();

// */

// })

// BAR CHART
var barChartOptions = {
    series: [{
      data: [8, 11, 5, 8, 2]
    }],
    chart: {
      type: 'bar',
      height: 280,
      toolbar: {
        show: false
      },
    },
    colors: [
      "#246dec",
      "#cc3c43",
      "#367952",
      "#f5b74f",
      "#4f35a1"
    ],
    plotOptions: {
      bar: {
        distributed: true,
        borderRadius: 4,
        horizontal: false,
        columnWidth: '40%',
      }
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    xaxis: {
      categories: ["Carboidratos", "Sodios", "Calcio", "Grasas", "Azucar"],
    },
    yaxis: {
      title: {
        text: "Count"
      }
    }
  };
  
  var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
  barChart.render();
  
  // -------------------------------------------------------------------------------------------

  // // // AREA CHART
  var areaChartOptions = {
    series: [{
      name: 'Dias cumplidos',
      data: [28, 31, 20, 30, 19, 30, 12, 10]
    }, {
      name: 'Dias no cumplidos',
      data: [12, 28, 19, 31, 20, 30, 11]
    }],
    chart: {
      height: 280,
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
  
  var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
  areaChart.render();

  // ------------------------------------------------------------------------------------------


  const crearPorcentajes = ( porcent, progres, porcentMax ) => {

    const progreso = document.getElementById(`${progres}`)
    const porcentaje = document.getElementById(`${porcent}`)

    let cantidad1 = 0;
    let cantidad2 = 200;

    const tiempo = setInterval(() => {

        cantidad1+=1;

        let value = Math.ceil(cantidad2 = cantidad2 - 2)

        porcentaje.textContent = cantidad1 + '%'

        progreso.style.strokeDashoffset = `${value}`

        if(cantidad1 === porcentMax)
        {
            clearInterval(tiempo)
        }
    }, 28);

}
       
crearPorcentajes('porcentaje', 'progress', 10);

crearPorcentajes('porcentaje1', 'progress1', 30);

crearPorcentajes('porcentaje2', 'progress2', 50);

crearPorcentajes('porcentaje3', 'progress3', 75);

// crearPorcentajes('porcentaje4', 'progress4', 87);


// Grafica usuario
const gaugeElement = document.querySelector(".base");

function setGaugeValue(gauge, value) {
  if (value < 0 || value > 1) {
    return;
  }

  gauge.querySelector(".base__fill").style.transform = `rotate(${
    value / 2
  }turn)`;
  gauge.querySelector(".base__cover").textContent = `${Math.round(
    value * 100
  )}%`;
}

setGaugeValue(gaugeElement, 0.3);







