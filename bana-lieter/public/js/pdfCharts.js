function drawGraphs() {
    const orange = "#ff7e29";

    const data3 = {
        labels: [40, 55, 70, 85, 100, 115, 130, 145, 160],
        datasets: [
            {
                label: "Very Low",
                data: [1.2, 1.3, , , , , , ,],
                fill: true,
                backgroundColor: "#cfc4dc",
            },
            {
                label: "Low",
                data: [, 1.3, 2, , , , , ,],
                fill: true,
                backgroundColor: "#bdb0ce",
            },
            {
                label: "Below Avarage",
                data: [, , 2, 4, , , , ,],
                fill: true,
                backgroundColor: "#927ab0",
            },
            {
                label: "Avarage",
                data: [, , , 4, 5, 4, , ,],
                fill: true,
                backgroundColor: "#cec5da",
            },
            {
                label: "Above Avarage",
                data: [, , , , , 4, 2, ,],
                fill: true,
                backgroundColor: "#927ab0",
            },
            {
                label: "High",
                data: [, , , , , , 2, 1.3, null],
                fill: true,
                backgroundColor: "#bdb0ce",
            },
            {
                label: "Very High",
                data: [, , , , , , , 1.3, 1.2, null],
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
                        fontStyle: "bold",
                        labels: [
                            " ",
                            ["Very", "Low"],
                            " ",
                            "Low",
                            " ",
                            ["Below", "Avarage"],
                            " ",
                            " ",
                            "Avarage",
                            " ",
                            " ",
                            ["Above", "Avarage"],
                            " ",
                            "High",
                            " ",
                            ["Very", "High"],
                            " ",
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

    for (let i = 0; i < meta.data.length; i++) {
        const data = meta.data[i]._model;
        const div = document.createElement("DIV");
        $(div).css({ left: `${data.x}px` });
        $(div).attr("value", data3.labels[i]).addClass("num-item");
        $("#table-container").append(div);
    }

    const pointsToDisplay = JSON.parse(document.getElementById('composite_values').getAttribute('value'));
    console.log('pointsToDisplay : ', pointsToDisplay);

    const pointsToDisplay2 = [
        {
            id: "reading",
            value: 46,
            // width: 100,
        },
        {
            id: "math",
            value: 65,
            // width: 150,
        },
        {
            id: "languages",
            value: 120,
            // width: 80,
        }
    ];

    const items = $(".num-item").toArray();

    const h1 = getPointX(0);
    const h2 = getPointX(1);
    const moreLessDiff = (h2 - h1) / 15;

    pointsToDisplay.map(function (item) {
        const value = item.value;
        const id = item.id;
        // const width = item.width;

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
