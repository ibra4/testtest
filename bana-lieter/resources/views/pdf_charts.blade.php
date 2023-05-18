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
        <div class="section">
            <h1 class="title">Normal Distribution</h1>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div id="canvas-wrapper">
                        <canvas id="chartWithTable" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div id="table-container">
                        </div>
                    </div>
                </div>
                <div id="composite_values" value="{{ json_encode($composite_values) }}"></div>
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

        <table class="table">
            <thead>
                <th>Value</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td>40 - 55</td>
                    <td>Very Low</td>
                </tr>
                <tr>
                    <td>55 - 70</td>
                    <td>Low</td>
                </tr>
                <tr>
                    <td>70 - 85</td>
                    <td>Below Avarage</td>
                </tr>
                <tr>
                    <td>85 - 115</td>
                    <td>Avarage</td>
                </tr>
                <tr>
                    <td>115 - 130</td>
                    <td>Above Avarage</td>
                </tr>
                <tr>
                    <td>130 - 145</td>
                    <td>High</td>
                </tr>
                <tr>
                    <td>145 - 160</td>
                    <td>Very High</td>
                </tr>
            </tbody>
        </table>
        <hr>
        @include('components.pdf_footer')

    </main>
@endsection
