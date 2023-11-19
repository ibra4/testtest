@extends('layouts.pdf')

@section('content')
    <main class="content">
        @include('components.report_header', ['title' => __('إختبارات كازد')])
        <hr>
        @include('components.report_examinee_data', ['type' => 'casd'])
        <hr>
        <div class="section">
            <h3 class="mb-4">{{ __('Results') }}</h3>
            <p>
                بعد تطبيق قائمة (كازد) لتقدير اضطراب طيف التوحدتحصل المفحوص درجة ({{ $count }})
            </p>
            <canvas id="casdChart1"></canvas>
            <div id="casd-chart3-wrapper">
                <canvas height="60px" id="myChart"></canvas>
                <div class="value-point">
                    <div class="count">{{ $count }}</div>
                </div>
            </div>
            {{-- <div class="casd-bar">
                    <div class="casd-num-item"></div>
                    @foreach (range(0, 30) as $num)
                        <div class="casd-num-item">{{ $num }}</div>
                    @endforeach
                    <div class="real-casd-bar"></div>
                </div> --}}
        </div>
        <div class="section">
            <h3 class="mb-4">{{ __('Results') }} 2</h3>
            <canvas height="200px" id="casdChart2"></canvas>
        </div>
        {{-- <div class="section">
            <h3 class="mb-4">{{ __('Results') }} 3</h3>
            <div class="fuck">
                <div class="casd-bar">
                    @foreach (range(0, 30) as $num)
                        <div class="casd-num-item">{{ $num }}</div>
                    @endforeach
                    <div class="real-casd-bar"></div>
                </div>
            </div>
        </div> --}}
        <table class="table mt-3">
            <thead>
                <th>{{ __('Symptom Score') }}</th>
                <th>{{ __('Description') }}</th>
            </thead>
            <tbody>
                @foreach ($symptom as $symptomRecord)
                    <tr>
                        <td>{{ __($symptomRecord['symptom']) }}</td>
                        <td>{{ __($symptomRecord['label']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection

@section('js')
    <script>
        const xAxis = Array.from(Array(31).keys());
        let yAxis = [];
        const data1 = xAxis.map(value => {
            return value <= {{ $count }} ? value : {{ $count }};
        });
        const data2 = xAxis.map(value => {
            return value <= {{ $notCount }} ? value : {{ $notCount }};
        });

        const myChart = new Chart(document.getElementById('casdChart1').getContext('2d'), {
            type: 'line',
            data: {
                labels: xAxis,
                datasets: [{
                    label: 'المهارات التي تنطبق',
                    data: data1, // Set y values equal to x values
                    borderColor: '#9d6ab0',
                    fill: false,
                }, {
                    label: 'المهارات التي لا تنطبق',
                    data: data2, // Set y values equal to x values
                    borderColor: '#cccccc',
                    fill: false,
                }, {
                    // Fake line to show 30 in yAxis
                    label: '',
                    borderColor: 'rgba(0, 0, 0, 0)',
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    borderColor: 'rgb(0, 0, 0, 0)',
                    data: xAxis,
                    fill: false,
                    pointRadius: 0,
                    legend: {
                        display: false
                    },
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 30,
                            stepSize: 5,
                        }
                    }]
                }
            }
        });

        const subDomainsResults = @json($subDomainsResults);
        new Chart(document.getElementById('casdChart2').getContext('2d'), {
            type: 'bar',
            data: {
                // SubDomains Names
                labels: subDomainsResults.domains_names,
                datasets: [{
                        label: "النتيجة",
                        backgroundColor: '#9d6ab0',
                        borderWidth: 1,
                        // SubDomains Real Values
                        data: subDomainsResults.real_results,
                        xAxisID: "bar-x-axis1",
                        yAxisID: "bar-y-axis1"
                    },
                    {
                        label: "القيمة العظمى",
                        backgroundColor: '#cccccc',
                        borderWidth: 1,
                        // SubDomains Max Values - Real Values
                        data: subDomainsResults.remaining_results,
                        xAxisID: "bar-x-axis1",
                        yAxisID: "bar-y-axis1"
                    }
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        stacked: true,
                        id: "bar-x-axis1",
                        barThickness: 30,
                    }, {
                        display: false,
                        stacked: true,
                        id: "bar-x-axis2",
                        barThickness: 70,
                        // these are needed because the bar controller defaults set only the first x axis properties
                        type: 'category',
                        categoryPercentage: 0.8,
                        barPercentage: 0.9,
                        gridLines: {
                            offsetGridLines: true
                        },
                        offset: true
                    }],
                    yAxes: [{
                            id: "bar-y-axis1",
                            stacked: true,
                            ticks: {
                                beginAtZero: true,
                                autoSkip: false,
                                max: 15,
                                stepSize: 1
                            }
                        },
                        {
                            id: "bar-y-axis2",
                            stacked: false,
                            ticks: {
                                beginAtZero: true,
                                display: false
                            },
                            gridLines: {
                                display: false
                            }
                        }
                    ]

                }
            }
        });





















        const casdChart3 = new Chart(document.getElementById('myChart').getContext('2d'), {
            type: 'horizontalBar',
            data: {
                labels: ["   "],
                datasets: [{
                        label: "{{ __('Normal Range') }}",
                        data: [8],
                        borderWidth: 1,
                        backgroundColor: '#27AE60'
                    },
                    {
                        label: "{{ __('at risk and needs futher evaluation') }}",
                        data: [11],
                        borderWidth: 1,
                        backgroundColor: '#eeeeee', // Transparent color for the empty space
                    },
                    {
                        label: "{{ __('Borderline Range') }}",
                        data: [15], // Adjust the data for the orange segment
                        borderWidth: 1,
                        backgroundColor: '#F1C40F',
                    },
                    {
                        label: "{{ __('Autism Range') }}",
                        data: [30], // Adjust the data for the red segment
                        borderWidth: 1,
                        backgroundColor: '#E74C3C',
                    }
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 30,
                            stepSize: 1,
                            mirror: true
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        mirror: true
                    }],
                }
            }
        });

        var xScale = casdChart3.scales['x-axis-0'];
        var position = xScale.getPixelForValue({{ $count }});
        const pointSelector = $('#casd-chart3-wrapper .value-point');
        pointSelector.css('left', `${position}px`);
    </script>
@endsection
