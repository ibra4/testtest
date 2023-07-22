function drawGraphs(sectionId, labels, datasets, belowLabels) {
    const data3 = {
        labels: labels,
        datasets: datasets,
    };

    const chartWithTable = document
        .querySelector(`#${sectionId} canvas`)
        .getContext("2d");

    const tableContainer = $(`#${sectionId} .table-container`);

    const test = new Chart(chartWithTable, {
        type: "line",
        data: data3,
        options: {
            steppedLine: false,
            animation: {
                duration: 0,
            },
            legend: false,
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            display: false,
                            tickMarkLength: 10,
                        },
                    },
                    {
                        type: "category",
                        // fontStyle: "bold",
                        labels: belowLabels,
                        ticks: {
                            fontColor: "#9d6ab0",
                        },
                    },
                ],
                yAxes: [
                    {
                        display: false,
                        gridLines: {
                            display: false
                        }
                    },
                ],
            },
        },
    });

    var xScale = test.scales['x-axis-0'];
    test.data.labels.forEach(function (label) {
        var position = xScale.getPixelForValue(label);
        const div = document.createElement("DIV");
        $(div).css({ left: `${position}px` });
        $(div).attr("value", label).addClass("num-item");
        tableContainer.append(div);
    });

    const pointsToDisplay = JSON.parse(document.querySelector(`#${sectionId} .composite_values`).getAttribute('value'));


    pointsToDisplay.map(function (item) {
        const itemValue = item.value;
        const { previousPoint, nextPoint } = getNearestPoints(itemValue)
        console.log(xScale.getPixelForValue(previousPoint))
        console.log(xScale.getPixelForValue(nextPoint))

        const pixelsDiff = xScale.getPixelForValue(nextPoint) - xScale.getPixelForValue(previousPoint)
        const labelsDiff = nextPoint - previousPoint;


        const percentage = pixelsDiff / labelsDiff;
        const realValue = itemValue - previousPoint;

        const topElement = document.getElementById(item.id).offsetTop

        let point = $(`<div class="point"><div class="inner">${itemValue}</div></div>`);
        point.css({
            left: `${(realValue * percentage) + xScale.getPixelForValue(previousPoint)}px`,
            top: `${topElement + 10}px`,
        });
        tableContainer.append(point);
    })



    function getNearestPoints(point) {
        let previousPoint = null;
        let nextPoint = null;

        for (let i = 0; i < test.data.labels.length; i++) {
            const currentPoint = test.data.labels[i];

            if (currentPoint <= point) {
                previousPoint = currentPoint;
            } else if (currentPoint > point) {
                nextPoint = currentPoint;
                break; // Stop iteration once the next point is found
            }
        }

        return { previousPoint, nextPoint };
    }
}




const iqLabels = [30, 40, 55, 70, 80, 90, 110, 120, 130, 150, 170];
const iqDatasets = [
    {
        data: [0, 0.2, , , , , , , ,],
        fill: true,
        backgroundColor: "#cfc4dc",
    },
    {
        data: [, 0.2, 0.6, , , , , , , ,],
        fill: true,
        backgroundColor: "#bdb0ce",
    },
    {
        data: [, , 0.6, 1.4, , , , , , ,],
        fill: true,
        backgroundColor: "#927ab0",
    },
    {
        data: [, , , 1.4, 3, , , , , ,],
        fill: true,
        backgroundColor: "#cec5da",
    },
    {
        data: [, , , , 3, 3.4, 3, , , ,],
        fill: true, //// center
        backgroundColor: "#927ab0",
    },
    {
        data: [, , , , , , 3, 1.4, , ,],
        fill: true,
        backgroundColor: "#cec5da",
    },
    {
        data: [, , , , , , , 1.4, 0.6, ,],
        fill: true,
        backgroundColor: "#927ab0",
    },
    {
        data: [, , , , , , , , 0.6, 0.2,],
        fill: true,
        backgroundColor: "#bdb0ce",
    },
    {
        data: [, , , , , , , , , 0.2, 0],
        fill: true,
        backgroundColor: "#cfc4dc",
    },
];
const iqBelowLabels = document.documentElement.lang == 'en' ? [
    "Severe Delay",
    "Modetate Delay",
    "Very Low and Mild Delay",
    "Low",
    "Below Avarage",
    "Avarage",
    "Above Avarage",
    "High",
    "Very High/Gifted",
    "Extremely High/Gifted"
] : [
    'تأخير شديد',
    'تأخير معتدل',
    'تأخير منخفض جدًا وخفيف',
    'قليل',
    "أقل من المتوسط",
    "متوسط",
    "فوق المتوسط",
    "عالي",
    "مرتفع جدا / موهوب",
    "مرتفع للغاية / موهوب"
];

const figLabels = [0, 1, 4, 6, 8, 13, 15, 17, 19, 20, 21];
const figDatasets = [
    {
        data: [0, 0.2, , , , , , ,],
        fill: true,
        backgroundColor: "#cfc4dc",
    },
    {
        data: [, 0.2, 0.6, , , , , , ,],
        fill: true,
        backgroundColor: "#927ab0",
    },
    {
        data: [, , 0.6, 1.4, , , , , ,],
        fill: true,
        backgroundColor: "#bdb0ce",
    },
    ///////////////////////////
    {
        data: [, , , 1.4, 1.8, 1.8,1.4 , , ,],
        fill: true,
        backgroundColor: "#927ab0",
    },
    ///////////////////////////
    {
        data: [, , , , , , 1.4, 0.6, ,],
        fill: true,
        backgroundColor: "#bdb0ce",
    },
    {
        data: [, , , , , , , 0.6, 0.2,],
        fill: true,
        backgroundColor: "#927ab0",
    },
    {
        data: [, , , , , , , , 0.2, 0],
        fill: true,
        backgroundColor: "#cfc4dc",
    },
];

const figBelowLabels = document.documentElement.lang == 'en' ? [
    "Modetate Delay",
    "Very Low and Mild Delay",
    "Low",
    "Below Avarage",
    "Avarage",
    "Above Avarage",
    "High",
    "Very High/Gifted",
    "Extremely High/Gifted",
    " "
] : [
    'تأخير معتدل',
    'تأخير منخفض جدًا وخفيف',
    'قليل',
    "أقل من المتوسط",
    "متوسط",
    "فوق المتوسط",
    "عالي",
    "مرتفع جدا / موهوب",
    "مرتفع للغاية / موهوب",
    " "
];


window.onload = function () {
    drawGraphs('iq-section-chart', iqLabels, iqDatasets, iqBelowLabels);
    drawGraphs('fig-section-chart', figLabels, figDatasets, figBelowLabels);
};
