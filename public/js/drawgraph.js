// Remvamp this fucking logic, look at abas report
function drawGraphs(sectionId, labels, datasets, xAxes, compositePrefix) {
    const data = {
        labels: labels,
        datasets: datasets,
    };

    const canvas = document
        .querySelector(`#${sectionId} canvas`)
        .getContext("2d");

    const tableContainer = $(`#${sectionId} .table-container`);

    const chart = new Chart(canvas, {
        type: "line",
        data,
        options: {
            legend: false,
            scales: {
                xAxes,
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

    var xScale = chart.scales['x-axis-0'];
    chart.data.labels.forEach(function (label) {
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

        const pixelsDiff = xScale.getPixelForValue(nextPoint) - xScale.getPixelForValue(previousPoint)
        const labelsDiff = nextPoint - previousPoint;


        const percentage = pixelsDiff / labelsDiff;
        const realValue = itemValue - previousPoint;

        const topElement = document.getElementById(`${compositePrefix}-${item.id}`).offsetTop

        let point = $(`<div class="point"><div class="inner">${itemValue}</div></div>`);
        point.css({
            left: `${(realValue * percentage) + xScale.getPixelForValue(previousPoint)}px`,
            top: `${topElement + 15}px`,
        });
        tableContainer.append(point);
    })

    function getNearestPoints(point) {
        let previousPoint = null;
        let nextPoint = null;

        for (let i = 0; i < chart.data.labels.length; i++) {
            const currentPoint = chart.data.labels[i];

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