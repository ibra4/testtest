@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf">
        <div class="bar top"></div>
        <header class="row align-items-center">
            <div class="col-6">
                <img width="200" src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold mb-0">Bana center for consultation and research and training</h3>
            </div>
        </header>
        <hr>
        <div class="row">
            <div class="col-8">
                {{-- <h3 class="font-weight-bold text-danger my-4"><i class="fa fa-lock"></i> Secret Report</h3> --}}
                <h2 class="font-weight-bold mt-2">Confidential Test Results for the Leiter-3</h2>
                {{-- <hr> --}}
                {{-- <h4 class="text-secondary">Confidential Test Results for the Leiter-3</h4> --}}
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
                <div class="value">Sample BANA Student</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Gender:</div>
                <div class="value">Male</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Age:</div>
                <div class="value">146 Months</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Examiner:</div>
                <div class="value">Ahmad Hamdan</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Ethnicity:</div>
                <div class="value">Other</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Location of Testing:</div>
                <div class="value">Amman - Jordan</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Date of Birth:</div>
                <div class="value">09/22/2018</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">IDEA/Disability:</div>
                <div class="value"></div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">Date of Report:</div>
                <div class="value">09/10/2022</div>
            </div>
            {{-- </div> --}}
        </div>
        <hr>
        <div class="section">
            <h1 class="title">Cognitive Subtests</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Subtest</th>
                        <th>Raw Score</th>
                        <th>Scaled Score</th>
                        <th>Percentile</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Figure Ground (FG)</b></td>
                        <td>11</td>
                        <td>10</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td><b>Form Completion (FC)</b></td>
                        <td>14</td>
                        <td>9</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <td><b>Classification/Analogies (CA)</b></td>
                        <td>7</td>
                        <td>7</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td><b>Sequential Order (SO)</b></td>
                        <td>7</td>
                        <td>7</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td><b>Visual Patterns (VP)</b></td>
                        <td>21</td>
                        <td>8</td>
                        <td>25</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr>
        <footer class="row">
            <div class="col-3">
                <img src="{{ asset('images/logo.png') }}" class="w-100" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6 mb-3">
                        <i class="fa fa-phone"></i> +962 (0)79 9621166
                    </div>
                    <div class="col-6 mb-3">
                        <i class="fa fa-mobile"></i> +962 (0)6 553 4748
                    </div>
                    <div class="col-6 mb-3">
                        <i class="fas fa-envelope"></i> mail@banacenter.com
                    </div>
                    <div class="col-6 mb-3">
                        <i class="fa fa-home"></i> Amman, Jordan
                    </div>
                    <div class="col-6 mb-3">
                        <i class="fa-brands fa-internet-explorer"></i> https://banacenter.com
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <i class="fa-brands fa-facebook"></i> banacenterRCT
                </div>
                <div class="mb-3">
                    <i class="fa-brands fa-twitter"></i> bana_center
                </div>
                <div class="mb-3">
                    <i class="fa-brands fa-linkedin"></i> bana_center
                </div>
            </div>
        </footer>
    </main>
@endsection
