export default {
  title: {
    text: 'Répartition des frais',
    x: 'center'
  },
  tooltip: {
    trigger: 'item',
    formatter: '{a} <br/>{b} : {c} ({d}%)'
  },
  legend: {
    orient: 'vertical',
    left: 'left',
    data: ['Hôtel', 'Frais kilométriques', 'test 1', 'test 2', 'Autres']
  },
  series: [
    {
      name: 'coucou',
      type: 'pie',
      radius: '55%',
      center: ['50%', '60%'],
      data: [
        {value: 335, name: 'Hôtel'},
        {value: 310, name: 'Frais kilométriques'},
        {value: 234, name: 'test 1'},
        {value: 135, name: 'test 2'},
        {value: 1548, name: 'Autres'}
      ],
      itemStyle: {
        emphasis: {
          shadowBlur: 10,
          shadowOffsetX: 0,
          shadowColor: 'rgba(0, 0, 0, 0.5)'
        }
      }
    }
  ]
}
