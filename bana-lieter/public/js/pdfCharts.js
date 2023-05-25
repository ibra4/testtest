function drawGraphs() {
    const orange = "#ff7e29";

    const data3 = {
        labels: [null, 40, 55, 70, 80, 90, 110, 120, 130, 150, 170],
        datasets: [
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
        ],
    };

    const chartWithTable = document
        .getElementById("chartWithTable")
        .getContext("2d");
    const test = new Chart(chartWithTable, {
        type: "line",
        data: data3,
        options: {
            steppedLine: true,
            animation: {
                duration: 0,
            },
            legend: false,
            scales: {
                xAxes: [
                    {
                        gridLines: {
                            tickMarkLength: 10,
                        },
                    },
                    {
                        type: "category",
                        // fontStyle: "bold",
                        labels: [
                            "Severe Delay",
                            "Modetate Delay",
                            "Very Low and Mild Delay",
                            "Low",
                            "Below Avarage",
                            "Avarage",
                            "Above Avarage",
                            "High",
                            "Very High/Gifted",
                            "Extremely High/Gifted",
                        ],
                        ticks: {
                            fontColor: "#9d6ab0",
                        },
                    },
                ],
                yAxes: [
                    {
                        display: false,
                    },
                ],
            },
        },
    });

    var meta = test.getDatasetMeta(0);
    console.log('test.getDatasetMeta(0) : ', test.getDatasetMeta(0));
    console.log('test.getDatasetMeta(1) : ', test.getDatasetMeta(1));
    console.log('test.getDatasetMeta(2) : ', test.getDatasetMeta(2));

    for (let i = 0; i < meta.data.length; i++) {
        const data = meta.data[i]._model;
        const div = document.createElement("DIV");
        $(div).css({ left: `${data.x}px` });
        $(div).attr("value", data3.labels[i]).addClass("num-item");
        $("#table-container").append(div);
    }

    const pointsToDisplay = JSON.parse(document.getElementById('composite_values').getAttribute('value'));

    const items = $(".num-item").toArray();

    const h1 = getPointX(0);
    const h2 = getPointX(1);
    const moreLessDiff = (h2 - h1) / 15;

    pointsToDisplay.map(function (item) {
        const value = item.value;
        const id = item.id;

        const lessItem = getAround(value);
        const lessEl = getPointX(lessItem);

        const numbersDiff = (value - getValue(lessItem)) * moreLessDiff;
        const left = lessEl + numbersDiff;

        const bigBoss = $(".big-boss").offset().top;
        const target = $(`#${id}`).offset().top;
        const diff = target - bigBoss;

        let point = $(`<div class="point"><div class="inner">${item.value}</div></div>`);
        point.css({
            left: `${left}px`,
            top: `${diff + 15}px`,
        });
        // point.find(".inner").css({ width: `${width}px` });
        $("#table-container").append(point);
    });

    function getAround(val) {
        for (let i = 0; i < items.length; i++) {
            const num = getValue(i);
            const diff = Math.abs(num - val);
            if (diff <= 15) {
                return i;
            }
        }
    }

    function getPointX(i) {
        if (!meta.data[i]) {
            console.log("i : ", i);
        }
        return meta.data[i]._model.x;
    }

    function getValue(i) {
        return parseInt($(items[i]).attr("value"));
    }
}

window.onload = function () {
    drawGraphs();
};
