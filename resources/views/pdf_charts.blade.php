@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf-charts">
        @include('components.report_header', [
            'title' => __('Confidential Test Results for the Leiter-3'),
            'type' => 'leiter',
        ])
        <hr>
        @include('components.report_examinee_data')
        <hr>
        <div class="section no-break" id="iq-section-chart">
            <h1 class="title">{{ __('IQ and Composite') }}</h1>
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
                        <div class="table-container" style="height: 150px">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($composite_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-4">
                                @foreach ($composite_values as $compositeValue)
                                    <p id="{{ $compositeValue['id'] }}" class="label-item">{{ $compositeValue['label'] }}
                                    </p>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                @foreach ($composite_values as $compositeValue)
                    <p style="max-width: 80%">{{ $compositeValue['desc'] }}</p>
                @endforeach
            </div>
        </div>








        <div class="section no-break" id="fig-section-chart">
            <br>
            <h1 class="title">{{ __('Cognitive') }}</h1>
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
                        <div class="table-container" style="height: 480px">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($cognitive_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-4">
                                @foreach ($cognitive_values as $cognitiveValue)
                                    <p id="{{ $cognitiveValue['id'] }}" class="label-item">{{ $cognitiveValue['label'] }}
                                    </p>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <table class="table mt-3">
            <thead>
                <th>{{ __('IQ and Composite Scores') }}</th>
                <th>{{ __('Subtest Scores') }}</th>
                <th>{{ __('Category') }}</th>
            </thead>
            <tbody>
                @foreach ($iq as $iqRecord)
                    <tr>
                        <td>{{ $iqRecord['iq_composite_score'] }}</td>
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
        // fig-section-chart Chart Data
        const figLabels = [0, 1, 4, 6, 8, 13, 15, 17, 19, 20, 21];
        const figDatasets = [{
            data: [0, 0.05, 0.2, 0.6, 1.4, 1.7, 1.4, 0.6, 0.2, 0, 0],
            fill: false
        }];
        const figBelowLabels = document.documentElement.lang == 'en' ? [
            "Modetate Delay",
            "Mild Delay",
            "Low",
            "Below Avarage",
            "Avarage",
            "Above Avarage",
            "High",
            "Very High",
            "Extremely High",
            " ",
            " "
        ] : [
            'تأخر متوسط',
            'تأخر بسيط',
            'ضعف',
            "أقل من المتوسط",
            "ضمن المتوسط",
            "أعلى من المتوسط",
            "مرتفع",
            "مرتفع جدا",
            "مرتفع للغاية",
            " ",
            " "
        ];

        // iq-section-chart Chart Data
        const iqLabels = [30, 40, 55, 70, 80, 90, 110, 120, 130, 150, 170, 171];
        const iqDatasets = [{
            data: [0, 0.2, 0.6, 1.4, 3, 3.4, 3, 1.4, 0.6, 0.2, 0],
            fill: false
        }];
        const iqBelowLabels = document.documentElement.lang == 'en' ? [
            "Severe Delay",
            "Modetate Delay",
            "Mild Delay",
            "Low",
            "Below Avarage",
            "Avarage",
            "Above Avarage",
            "High",
            "Very High",
            "Extremely High",
            " ",
            " "
        ] : [
            'تأخر شديد',
            'تأخر متوسط',
            'تأخر بسيط',
            'ضعف',
            "أقل من المتوسط",
            "ضمن المتوسط",
            "أعلى من المتوسط",
            "مرتفع",
            "مرتفع جدا",
            "مرتفع للغاية",
            " ",
            " "
        ];
        window.onload = function() {
            drawGraphs('fig-section-chart', figLabels, figDatasets, figBelowLabels);
            drawGraphs('iq-section-chart', iqLabels, iqDatasets, iqBelowLabels);
        };
    </script>
@endsection
