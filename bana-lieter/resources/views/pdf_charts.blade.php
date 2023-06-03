@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf">
        <div class="row">
            <div class="col-8">
                <h2 class="font-weight-bold mt-2">Confidential Test Results for the Leiter-3</h2>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/lieter3.jpeg') }}" class="w-100" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            {{-- <div class="col-8"> --}}
            <div class="label-value-item col-6">
                <div class="label">Name:</div>
                <div class="value">{{ $examinee->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Gender:</div>
                <div class="value">{{ $examinee->gender }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Age:</div>
                <div class="value">{{ $examinee->age }} Months</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Examiner:</div>
                <div class="value">{{ $examinee->examiner->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Ethnicity:</div>
                <div class="value">Other</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Location of Testing:</div>
                <div class="value">{{ $examinee->location }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Date of Birth:</div>
                <div class="value">{{ $examinee->birthday }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Date of Report:</div>
                <div class="value">{{ $examinee->application_date }}</div>
            </div>
            @if ($examinee->examiner_notes)
                <div class="label-value-item col-6">
                    <div class="label">Notes:</div>
                    <div class="value">{{ $examinee->examiner_notes }}</div>
                </div>
            @endif
            {{-- </div> --}}
        </div>
        <hr>
        <div class="section" id="iq-section-chart">
            <h1 class="title">IQ and Composite</h1>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div class="canvas-wrapper">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div class="table-container">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($composite_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-2">
                                @foreach ($composite_values as $compositeValue)
                                    <p id="{{ $compositeValue['id'] }}" class="label-item">{{ $compositeValue['label'] }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>








        <div class="section" id="fig-section-chart">
            <h1 class="title">Cognitive</h1>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div class="canvas-wrapper">
                        <canvas width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div class="table-container">
                        </div>
                    </div>
                </div>
                <div class="composite_values" value="{{ json_encode($cognitive_values) }}"></div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-2">
                                @foreach ($cognitive_values as $cognitiveValue)
                                    <p id="{{ $cognitiveValue['id'] }}" class="label-item">{{ $cognitiveValue['label'] }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <table class="table">
            <thead>
                <th>IQ and Composite Scores</th>
                <th>Subtest Scores</th>
                <th>Category</th>
            </thead>
            <tbody>
                <tr>
                    <td>30 - 39</td>
                    <td>---</td>
                    <td>Severe Delay</td>
                </tr>
                <tr>
                    <td>40 - 54</td>
                    <td>0</td>
                    <td>Modetate Delay</td>
                </tr>
                <tr>
                    <td>55 - 69</td>
                    <td>1-3</td>
                    <td>Very Low and Mild Delay</td>
                </tr>
                <tr>
                    <td>70 - 79</td>
                    <td>4-5</td>
                    <td>Low</td>
                </tr>
                <tr>
                    <td>80 - 89</td>
                    <td>6-7</td>
                    <td>Below Avarage</td>
                </tr>
                <tr>
                    <td>90 - 109</td>
                    <td>8-12</td>
                    <td>Avarage</td>
                </tr>
                <tr>
                    <td>110 - 119</td>
                    <td>13-14</td>
                    <td>Above Avarage</td>
                </tr>
                <tr>
                    <td>120 - 129</td>
                    <td>15-16</td>
                    <td>High</td>
                </tr>
                <tr>
                    <td>130 - 149</td>
                    <td>17-19</td>
                    <td>Very High/Gifted</td>
                </tr>
                <tr>
                    <td>150 - 170</td>
                    <td>20</td>
                    <td>Extremely High/Gifted</td>
                </tr>
            </tbody>
        </table>
        <hr>
        @include('components.pdf_footer')

    </main>
@endsection
