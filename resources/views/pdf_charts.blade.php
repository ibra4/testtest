@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf-charts">
        @include('components.report_header', ['title' => __('Confidential Test Results for the Leiter-3'), 'type' => 'leiter'])
        <hr>
        @include('components.report_examinee_data')
        <hr>
        <div class="section no-break" id="iq-section-chart">
            <h1 class="title">{{ __('IQ and Composite') }}</h1>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-9">
                    <div class="canvas-wrapper white-bar">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss canvas-wrapper white-bar">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <div class="table-container" style="height: 150px">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($composite_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-3">
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
                <div class="col-3">
                </div>
                <div class="col-9">
                    <div class="canvas-wrapper white-bar">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss canvas-wrapper white-bar">
                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-9">
                        <div class="table-container" style="height: 480px">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($cognitive_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-3">
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
