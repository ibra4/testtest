@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf-charts">
        <div class="row">
            <div class="col-8">
                <h2 class="font-weight-bold mt-2">{{ __('Confidential Test Results for the Leiter-3') }}</h2>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/lieter3.jpeg') }}" class="w-100" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            {{-- <div class="col-8"> --}}
            <div class="label-value-item col-6">
                <div class="label">{{ __('Name') }}:</div>
                <div class="value">{{ $examinee->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Gender') }}:</div>
                <div class="value">{{ $examinee->gender }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Age') }}:</div>
                <div class="value">{{ $examinee->age }} Months</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Examiner') }}:</div>
                <div class="value">{{ $examinee->examiner->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Ethnicity') }}:</div>
                <div class="value">Other</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Location of Testing') }}:</div>
                <div class="value">{{ $examinee->location }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Date of Birth') }}:</div>
                <div class="value">{{ $examinee->birthday }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Date of Report') }}:</div>
                <div class="value">{{ $examinee->application_date }}</div>
            </div>
            @if ($examinee->examiner_notes)
                <div class="label-value-item col-6">
                    <div class="label">{{ __('Notes') }}:</div>
                    <div class="value">{{ $examinee->examiner_notes }}</div>
                </div>
            @endif
            {{-- </div> --}}
        </div>
        <hr>
        <div class="section no-break" id="iq-section-chart">
            <h1 class="title">{{ __('IQ and Composite') }}</h1>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-9">
                    <div class="canvas-wrapper">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss">
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
                    <div class="canvas-wrapper">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss">
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
                <tr>
                    <td>30 - 39</td>
                    <td>---</td>
                    <td>{{ __('Severe Delay') }}</td>
                </tr>
                <tr>
                    <td>40 - 54</td>
                    <td>0</td>
                    <td>{{ __('Modetate Delay') }}</td>
                </tr>
                <tr>
                    <td>55 - 69</td>
                    <td>1-3</td>
                    <td>{{ __('Very Low and Mild Delay') }}</td>
                </tr>
                <tr>
                    <td>70 - 79</td>
                    <td>4-5</td>
                    <td>{{ __('Low') }}</td>
                </tr>
                <tr>
                    <td>80 - 89</td>
                    <td>6-7</td>
                    <td>{{ __('Below Avarage') }}</td>
                </tr>
                <tr>
                    <td>90 - 109</td>
                    <td>8-12</td>
                    <td>{{ __('Avarage') }}</td>
                </tr>
                <tr>
                    <td>110 - 119</td>
                    <td>13-14</td>
                    <td>{{ __('Above Avarage') }}</td>
                </tr>
                <tr>
                    <td>120 - 129</td>
                    <td>15-16</td>
                    <td>{{ __('High') }}</td>
                </tr>
                <tr>
                    <td>130 - 149</td>
                    <td>17-19</td>
                    <td>{{ __('Very High/Gifted') }}</td>
                </tr>
                <tr>
                    <td>150 - 170</td>
                    <td>20</td>
                    <td>{{ __('Extremely High/Gifted') }}</td>
                </tr>
            </tbody>
        </table>
        <hr>
        @include('components.pdf_footer')

    </main>
@endsection
