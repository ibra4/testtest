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
        </div>
        <hr>
        <div class="section">
            <h3 class="mb-4">{{ __('Results') }}</h3>
            <canvas id="casdChart1"></canvas>
        </div>
    </main>
@endsection

@section('js')
    <script>
        const casdChart1 = document.getElementById('casdChart1').getContext('2d');
        const xAxis = Array.from(Array(31).keys());
        let yAxis = [];
        const data1 = Array.from(Array(31).keys()).map(value => {
            return value <= {{ $count }} ? value : {{ $count }};
        });
        const data2 = Array.from(Array(31).keys()).map(value => {
            return value <= {{ $notCount }} ? value : {{ $notCount }};
        });

        const myChart = new Chart(casdChart1, {
            type: 'line',
            data: {
                labels: xAxis,
                datasets: [{
                    label: 'المهارات التي تنطبق',
                    data: data1, // Set y values equal to x values
                    borderColor: 'rgb(255, 99, 132)',
                    fill: false,
                }, {
                    label: 'المهارات التي لا تنطبق',
                    data: data2, // Set y values equal to x values
                    borderColor: 'rgb(54, 162, 235)',
                    fill: false,
                }]
            }
        });
    </script>
@endsection
