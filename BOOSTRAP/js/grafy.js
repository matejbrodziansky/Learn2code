// var element = document.getElementById("mojGraf1").getContext('2d')
//     mojGraf1 = new Chart(element, {
//         tybe: 'bar',
//         data: {
//             labels: ['1.1.2018','2.1.2018','3.1.2018','4.1.2018','5.1.2018','10.1.2018','12.1.2018','16.1.2018','19.1.2018','20.1.2018','25.1.2018','31.1.2018',],
//             datasets: [{
//                 label: ["Príjem"],
//                 data: [10,50,60,10,0,14.5,10,0,50,60,10,14.5],
//                 backgroundColor: [
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                 ],
//                 borderColor: [
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                     'rgba(75, 192, ,192, 0.2)',
//                 ],
//                 borderWidth: 1
//             }]
//         },
//         options: {
//             scales: {
//                 yAxes: [{
//                     ticks: {
//                         beginAtZero: true
//                     }
//                 }]
//             }
//         }
//     })


var ctx = document.getElementById('mojGraf1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});