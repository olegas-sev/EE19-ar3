// import config from './config'

const getSmhiData = async function () {
  const res = await fetch(
    'https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json'
  )
  const dataSmhi = await res.json()
  console.log(dataSmhi)
  const validTime = dataSmhi.timeSeries[0].validTime
  const temp = dataSmhi.timeSeries[0].parameters[10]
  console.log(validTime)
  console.log(temp)
  const chartLabels = dataSmhi.timeSeries.map((data) =>
    new Date(data.validTime).toLocaleDateString('en-US')
  )
  const chartData = dataSmhi.timeSeries.map(
    (data) => data.parameters[10].values[0]
  )
  console.log(chartLabels)
  console.log(chartData)

  const data = {
    labels: chartLabels.slice(0, 10),
    datasets: [
      {
        label: 'Celsius in given date',
        data: chartData.slice(0, 10),
        borderColor: 'rgb(255, 99, 132)',
        backgroundColor: Samples.utils.transparentize(255, 99, 132, 0.5),
        pointStyle: 'circle',
        pointRadius: 10,
        pointHoverRadius: 15,
      },
    ],
  }

  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      plugins: {
        title: {
          display: true,
          text: (ctx) =>
            'Point Style: ' + ctx.chart.data.datasets[0].pointStyle,
        },
      },
    },
  }

  const actions = [
    {
      name: 'pointStyle: circle (default)',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'cirlce'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: cross',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'cross'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: crossRot',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'crossRot'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: dash',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'dash'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: line',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'line'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: rect',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'rect'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: rectRounded',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'rectRounded'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: rectRot',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'rectRot'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: star',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'star'
        })
        chart.update()
      },
    },
    {
      name: 'pointStyle: triangle',
      handler: (chart) => {
        chart.data.datasets.forEach((dataset) => {
          dataset.pointStyle = 'triangle'
        })
        chart.update()
      },
    },
  ]

  const myChart = new Chart(
    document.getElementById('myChart'),
    config,
    data,
    actions
  )
}
getSmhiData()
