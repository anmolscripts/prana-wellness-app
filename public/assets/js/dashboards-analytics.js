/**
 * Dashboard Analytics
 */

'use strict';

document.addEventListener('DOMContentLoaded', function (e) {
  let cardColor, headingColor, legendColor, labelColor, shadeColor, borderColor, fontFamily;
  cardColor = config.colors.cardColor;
  headingColor = config.colors.headingColor;
  legendColor = config.colors.bodyColor;
  labelColor = config.colors.textMuted;
  borderColor = config.colors.borderColor;
  fontFamily = config.fontFamily;

  // Order Area Chart
  // --------------------------------------------------------------------
  const orderAreaChartEl = document.querySelector('#orderChart'),
    orderAreaChartConfig = {
      chart: {
        height: 80,
        type: 'area',
        toolbar: {
          show: false
        },
        sparkline: {
          enabled: true
        }
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: cardColor,
            seriesIndex: 0,
            dataPointIndex: 6,
            strokeColor: config.colors.success,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        offsetX: -1,
        hover: {
          size: 7
        }
      },
      grid: {
        show: false,
        padding: {
          top: 15,
          right: 7,
          left: 0
        }
      },
      colors: [config.colors.success],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.4,
          gradientToColors: [config.colors.cardColor],
          opacityTo: 0.4,
          stops: [0, 100]
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      series: [
        {
          data: [180, 175, 275, 140, 205, 190, 295]
        }
      ],
      xaxis: {
        show: false,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        stroke: {
          width: 0
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        stroke: {
          width: 0
        },
        show: false
      }
    };
  if (typeof orderAreaChartEl !== undefined && orderAreaChartEl !== null) {
    const orderAreaChart = new ApexCharts(orderAreaChartEl, orderAreaChartConfig);
    orderAreaChart.render();
  }

  // Total Revenue Report Chart - Bar Chart
  // --------------------------------------------------------------------


  function getLast12Months() {
    const labels = [];
    const now = new Date();
    now.setMonth(now.getMonth() + 1); // Move one month forward to include current month
  
    for (let i = 0; i < 12; i++) {
      now.setMonth(now.getMonth() - 1);
      const monthName = now.toLocaleString('default', { month: 'short' });
      const year = now.getFullYear();
      labels.unshift(`${monthName} ${year}`);
    }
  
    return labels;
  }



  function getDummyActivityData(labels) {
    // Example: Make dummy data with some zeros
    return labels.map((label, index) => {
      if (index % 3 === 0) return 0; // Just as an example
      return Math.floor(Math.random() * 50 + 5);
    });
  }







//   const totalRevenueChartEl = document.querySelector('#totalRevenueChart');
// const last12Months = getLast12Months();
// const activityData = getDummyActivityData(last12Months); // Or fetched from DB via AJAX

// const totalRevenueChartOptions = {
//   series: [
//     {
//       name: 'Activity Score',
//       data: activityData
//     }
//   ],
//   chart: {
//     height: 300,
//     stacked: true,
//     type: 'bar',
//     toolbar: { show: false }
//   },
//   plotOptions: {
//     bar: {
//       horizontal: false,
//       columnWidth: '30%',
//       borderRadius: 8
//     }
//   },
//   colors: [config.colors.primary],
//   dataLabels: {
//     enabled: false
//   },
//   stroke: {
//     curve: 'smooth',
//     width: 6,
//     lineCap: 'round',
//     colors: [cardColor]
//   },
//   legend: {
//     show: true,
//     horizontalAlign: 'left',
//     position: 'top',
//     labels: {
//       colors: legendColor
//     }
//   },
//   grid: {
//     strokeDashArray: 7,
//     borderColor: borderColor
//   },
//   xaxis: {
//     categories: last12Months,
//     labels: {
//       style: {
//         fontSize: '13px',
//         fontFamily: fontFamily,
//         colors: labelColor
//       }
//     }
//   },
//   yaxis: {
//     labels: {
//       style: {
//         fontSize: '13px',
//         fontFamily: fontFamily,
//         colors: labelColor
//       }
//     }
//   }
// };

// if (totalRevenueChartEl !== null) {
//   const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
//   totalRevenueChart.render();
// }

  // if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
  //   const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
  //   totalRevenueChart.render();
  // }

  // Growth Chart - Radial Bar Chart
  // --------------------------------------------------------------------
  const growthChartEl = document.querySelector('#growthChart'),
    growthChartOptions = {
      series: [78],
      labels: ['Growth'],
      chart: {
        height: 200,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          size: 150,
          offsetY: 10,
          startAngle: -150,
          endAngle: 150,
          hollow: {
            size: '55%'
          },
          track: {
            background: cardColor,
            strokeWidth: '100%'
          },
          dataLabels: {
            name: {
              offsetY: 15,
              color: legendColor,
              fontSize: '15px',
              fontWeight: '500',
              fontFamily: fontFamily
            },
            value: {
              offsetY: -25,
              color: headingColor,
              fontSize: '22px',
              fontWeight: '500',
              fontFamily: fontFamily
            }
          }
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          shadeIntensity: 0.5,
          gradientToColors: [config.colors.primary],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 0.6,
          stops: [30, 70, 100]
        }
      },
      stroke: {
        dashArray: 5
      },
      grid: {
        padding: {
          top: -35,
          bottom: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof growthChartEl !== undefined && growthChartEl !== null) {
    const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
    growthChart.render();
  }

  // Revenue Bar Chart
  // --------------------------------------------------------------------
  const revenueBarChartEl = document.querySelector('#revenueChart'),
    revenueBarChartConfig = {
      chart: {
        height: 95,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          barHeight: '80%',
          columnWidth: '75%',
          startingShape: 'rounded',
          endingShape: 'rounded',
          borderRadius: 4,
          distributed: true
        }
      },
      grid: {
        show: false,
        padding: {
          top: -20,
          bottom: -12,
          left: -10,
          right: 0
        }
      },
      colors: [
        config.colors.primary,
        config.colors.primary,
        config.colors.primary,
        config.colors.primary,
        config.colors.primary,
        config.colors.primary,
        config.colors.primary
      ],
      dataLabels: {
        enabled: false
      },
      series: [
        {
          data: [40, 95, 60, 45, 90, 50, 75]
        }
      ],
      legend: {
        show: false
      },
      xaxis: {
        categories: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: labelColor,
            fontSize: '13px'
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        }
      }
    };
  if (typeof revenueBarChartEl !== undefined && revenueBarChartEl !== null) {
    const revenueBarChart = new ApexCharts(revenueBarChartEl, revenueBarChartConfig);
    revenueBarChart.render();
  }

  // Profit Report Line Chart
  // --------------------------------------------------------------------
  const profileReportChartEl = document.querySelector('#profileReportChart'),
    profileReportChartConfig = {
      chart: {
        height: 75,
        width: 240,
        type: 'line',
        toolbar: {
          show: false
        },
        dropShadow: {
          enabled: true,
          top: 10,
          left: 5,
          blur: 3,
          color: config.colors.warning,
          opacity: 0.15
        },
        sparkline: {
          enabled: true
        }
      },
      grid: {
        show: false,
        padding: {
          right: 8
        }
      },
      colors: [config.colors.warning],
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 5,
        curve: 'smooth'
      },
      series: [
        {
          data: [110, 270, 145, 245, 205, 285]
        }
      ],
      xaxis: {
        show: false,
        lines: {
          show: false
        },
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        }
      },
      yaxis: {
        show: false
      },
      responsive: [
        {
          breakpoint: 1700,
          options: {
            chart: {
              width: 200
            }
          }
        },
        {
          breakpoint: 1579,
          options: {
            chart: {
              width: 180
            }
          }
        },
        {
          breakpoint: 1500,
          options: {
            chart: {
              width: 160
            }
          }
        },
        {
          breakpoint: 1450,
          options: {
            chart: {
              width: 140
            }
          }
        },
        {
          breakpoint: 1400,
          options: {
            chart: {
              width: 240
            }
          }
        }
      ]
    };
  if (typeof profileReportChartEl !== undefined && profileReportChartEl !== null) {
    const profileReportChart = new ApexCharts(profileReportChartEl, profileReportChartConfig);
    profileReportChart.render();
  }

  // Order Statistics Chart
  // --------------------------------------------------------------------
  

  // Income Chart - Area chart
  // --------------------------------------------------------------------
  const incomeChartEl = document.querySelector('#incomeChart'),
    incomeChartConfig = {
      series: [
        {
          data: [21, 30, 22, 42, 26, 35, 29]
        }
      ],
      chart: {
        height: 200,
        parentHeightOffset: 0,
        parentWidthOffset: 0,
        toolbar: {
          show: false
        },
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        width: 3,
        curve: 'smooth'
      },
      legend: {
        show: false
      },
      markers: {
        size: 6,
        colors: 'transparent',
        strokeColors: 'transparent',
        strokeWidth: 4,
        discrete: [
          {
            fillColor: config.colors.white,
            seriesIndex: 0,
            dataPointIndex: 6,
            strokeColor: config.colors.primary,
            strokeWidth: 2,
            size: 6,
            radius: 8
          }
        ],
        offsetX: -1,
        hover: {
          size: 7
        }
      },
      colors: [config.colors.primary],
      fill: {
        type: 'gradient',
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.3,
          gradientToColors: [config.colors.cardColor],
          opacityTo: 0.3,
          stops: [0, 100]
        }
      },
      grid: {
        borderColor: borderColor,
        strokeDashArray: 8,
        padding: {
          top: -20,
          bottom: -8,
          left: 0,
          right: 8
        }
      },
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          show: true,
          style: {
            fontSize: '13px',
            colors: labelColor
          }
        }
      },
      yaxis: {
        labels: {
          show: false
        },
        min: 10,
        max: 50,
        tickAmount: 4
      }
    };
  if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
    const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
    incomeChart.render();
  }

  // Expenses Mini Chart - Radial Chart
  // --------------------------------------------------------------------
  const weeklyExpensesEl = document.querySelector('#expensesOfWeek'),
    weeklyExpensesConfig = {
      series: [65],
      chart: {
        width: 60,
        height: 60,
        type: 'radialBar'
      },
      plotOptions: {
        radialBar: {
          startAngle: 0,
          endAngle: 360,
          strokeWidth: '8',
          hollow: {
            margin: 2,
            size: '40%'
          },
          track: {
            background: borderColor
          },
          dataLabels: {
            show: true,
            name: {
              show: false
            },
            value: {
              formatter: function (val) {
                return '$' + parseInt(val);
              },
              offsetY: 5,
              color: legendColor,
              fontSize: '12px',
              fontFamily: fontFamily,
              show: true
            }
          }
        }
      },
      fill: {
        type: 'solid',
        colors: config.colors.primary
      },
      stroke: {
        lineCap: 'round'
      },
      grid: {
        padding: {
          top: -10,
          bottom: -15,
          left: -10,
          right: -10
        }
      },
      states: {
        hover: {
          filter: {
            type: 'none'
          }
        },
        active: {
          filter: {
            type: 'none'
          }
        }
      }
    };
  if (typeof weeklyExpensesEl !== undefined && weeklyExpensesEl !== null) {
    const weeklyExpenses = new ApexCharts(weeklyExpensesEl, weeklyExpensesConfig);
    weeklyExpenses.render();
  }
});
