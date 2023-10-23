@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf-charts">
        @include('components.report_header', [
            'title' => __('Confidential Test Results for ABAS'),
            'type' => 'abas',
        ])
        <hr>
        @include('components.report_examinee_data')
        <hr>



        <div class="section no-break" id="abas-section-chart">
            <br>
            <h1 class="title">{{ __('الملف الشخصي للنتيجة') }}</h1>
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-8">
                    <div class="canvas-wrapper white-bar">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss canvas-wrapper white-bar">
                <div class="row">
                    <div class="col-4">
                    </div>
                    <div class="col-8">
                        <div class="table-container" style="height: 600px">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($sub_domains_composite) }}"></div>
                <div class="canvas-table-group-wrapper h-100">
                    <div class="canvas-table-group">
                        {{-- <hr class="purple-line"> --}}
                        <div class="row">
                            <div class="col-4">
                                @foreach ($withDomains as $key => $subDomains)
                                    <div class="composite-parent">
                                        <h5 class="composite-title mb-0">{{ $key }}</h5>
                                        <div class="composite-subdomain">
                                            <hr class="purple-line">
                                            @foreach ($subDomains as $subDomain)
                                                <p id="abas_sub_domain-{{ $subDomain['id'] }}" class="label-item">
                                                    {{ $subDomain['label'] }}
                                                </p>
                                                <hr>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <table class="table mt-3">
            <thead>
                <th>{{ __('Subtest Scores') }}</th>
                <th>{{ __('Category') }}</th>
            </thead>
            <tbody>
                @foreach ($iq as $iqRecord)
                    <tr>
                        <td>{{ $iqRecord['subtest_score'] }}</td>
                        <td>{{ __($iqRecord['label']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        @include('components.pdf_footer')

    </main>
@endsection

@section('js')
    <script>
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
                        yAxes: [{
                            display: false,
                            gridLines: {
                                display: false
                            }
                        }, ],
                    },
                },
            });

            var xScale = chart.scales['x-axis-0'];
            chart.data.labels.forEach(function(label) {
                var position = xScale.getPixelForValue(label);
                const div = document.createElement("DIV");
                $(div).css({
                    left: `${position}px`
                });
                $(div).attr("value", label).addClass("num-item");
                tableContainer.append(div);
            });

            const pointsToDisplay = JSON.parse(document.querySelector(`#${sectionId} .composite_values`).getAttribute(
                'value'));

            pointsToDisplay.map(function(item) {
                const itemValue = item.value;
                const xaxis3 = chart.scales['x-axis-3'];
                const topElement = document.getElementById(`${compositePrefix}-${item.id}`).offsetTop
                console.log(document.getElementById(`${compositePrefix}-${item.id}`))

                let point = $(`<div class="point"><div class="inner">${itemValue}</div></div>`);
                point.css({
                    left: `${xaxis3.getPixelForValue(itemValue)}px`,
                    top: `${topElement + 15}px`,
                });
                tableContainer.append(point);
            })
        }

        // abas-section-chart Chart Data
        const figLabels = [, , 70, 80, 90, 100, 110, 120, , , , ];
        const figDatasets = [{
            data: [0, 0.05, 0.2, 0.6, 1.4, 1.7, 1.4, 0.6, 0.2, 0, 0],
            fill: false
        }];

        const xAxis = [{
                gridLines: {
                    tickMarkLength: 10,
                },
            },
            {
                display: false,
            },
            {
                type: "category",
                labels: document.documentElement.lang == 'en' ? [,
                    "Extreemly Low", ,
                    "Low",
                    "Below Avarage", ,
                    "Avarage", ,
                    "Above Avarage", ,
                    "High", ,
                ] : [,
                    "تأخر شديد", ,
                    "تأخر بسيط",
                    "أقل من المتوسط", ,
                    "متوسط", ,
                    "أعلى من المتوسط", ,
                    "مرتفع", , ,
                ],
                ticks: {
                    fontColor: "#9d6ab0",
                    callback: function(value, index, values) {
                        return value.split(' ');
                    },
                    // maxRotation: 90, // Rotate labels by 90 degrees
                    // minRotation: 90, // Rotate labels by 90 degrees
                    padding: 10,
                    fontFamily: 'Tajawal, sans-serif',
                },
                gridLines: {
                    display: false,
                    tickMarkLength: 0,
                },
            },
            {
                labels: [, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
                // Hide vertical grid lines
                gridLines: {
                    display: false,
                    tickMarkLength: 0,
                },
            }
        ]

        window.onload = function() {
            drawGraphs('abas-section-chart', figLabels, figDatasets, xAxis, 'abas_sub_domain');
        };
    </script>
@endsection
