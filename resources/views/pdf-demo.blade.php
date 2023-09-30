@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf">
        <div class="bar top"></div>
        <header class="row align-items-center">
            <div class="col-6">
                <img width="200" src="{{ setting('bana_logo') }}" alt="">
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold mb-0">Bana center for consultation and research and training</h3>
            </div>
        </header>
        <hr>
        <div class="row">
            <div class="col-8">
                <h1 class="font-weight-bold text-danger my-4"><i class="fa fa-lock"></i> Secret Report</h1>
                <hr>
                <h4 class="font-weight-bold">Lieter - 3</h4>
                <h4 class="text-secondary">Kaufman Test of Educational Achievement, Third Edition</h4>
                <h4 class="text-secondary">Growth Scale Value Charts</h4>
                <h4 class="text-secondary">Alan S. Kaufman, PhD, & Nadeen L. Kaufman, EdD</h4>
            </div>
            <div class="col-4">
                <img src="{{ setting('leiter_logo') }}" class="w-100" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-8">
                <div class="label-value-item">
                    <div class="label">Full Name:</div>
                    <div class="value">Sample BANA Student</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Center:</div>
                    <div class="value">Bana Center</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Date of Report:</div>
                    <div class="value">09/10/2022</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Examinee ID:</div>
                    <div class="value">43827</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Age:</div>
                    <div class="value">146 Months</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Gender:</div>
                    <div class="value">Male</div>
                </div>
                <div class="label-value-item">
                    <div class="label">Grade:</div>
                    <div class="value">
                        <span class="text-success">19</span>/<span>20</span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section">
            <h1 class="title">Evaluation procedure</h1>
            <p class="description">Determining the mental ability of an individual is one of the very complex issues that
                must be done very carefully because of the consequences

                It has significant <span class="text-highlight">impacts on the life</span> of the individual, and should
                only be carried out by examiners who
                have received professional training under supervision,

                Individuals who need evaluation, whether it is for themselves or <span class="text-highlight">their
                    children</span>, should make sure of this
                before applying

                the test. The examiners are responsible for <span class="text-highlight">protecting the examinees</span>
                from any dangers arising from the
                evaluation process, as well

                They must maintain <span class="text-highlight">confidentiality and privacy and protect the subjects</span>
                from any stigma, and that

                They pay great attention to the process of applying, correcting and interpreting the scale</p>
            <canvas id="evaluationProcedureChart" width="400" height="100"></canvas>
        </div>
        <hr>
        <div class="section">
            <h1 class="title">LEITER-3 International Performance Scale</h1>
            <p>This scale is one of the most important scales in measuring intelligence, and non-verbal-performance
                cognitive abilities

                The scale consists of a set of <span class="text-highlight">cognitive tests consisting of 5
                    sub-tests</span>, which give a non-intelligent
                degree

                Verbal-Performance. It also contains a set of tests for memory and processing speed/attention in order to
                assess

                Level of <span class="text-highlight">non-verbal memory and processing</span> speed. This scale is
                characterized by high reliability and
                stability due to its liberation from

                Cultural factors and a performance measure of abilities, as it contains broad <span
                    class="text-highlight">clinical implications</span> that are
                useful in
            </p>
            <canvas id="cognitiveTestsFileChart4" width="400" height="100"></canvas>
        </div>
        <hr>
        <div class="section">
            <h1 class="title">Behavior During Testing</h1>
            <p>This scale is one of the most important scales in measuring intelligence, and non-verbal-performance
                cognitive abilities

                The scale consists of a set of <span class="text-highlight">cognitive tests consisting of 5
                    sub-tests</span>, which give a non-intelligent
                degree

                Verbal-Performance. It also contains a set of tests for memory and processing speed/attention in order to
                assess

                Level of <span class="text-highlight">non-verbal memory and processing</span> speed. This scale is
                characterized by high reliability and
                stability due to its liberation from

                Cultural factors and a performance measure of abilities, as it contains broad <span
                    class="text-highlight">clinical implications</span> that are
                useful in
            </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Subtests</th>
                        <th>Raw grade</th>
                        <th>weighted score</th>
                        <th>percentile rank</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>shape and floor</b></td>
                        <td>12</td>
                        <td>9</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <td><b>complement figure</b></td>
                        <td>19</td>
                        <td>11</td>
                        <td>63</td>
                    </tr>
                    <tr>
                        <td><b>Classification and similar</b></td>
                        <td>16</td>
                        <td>14</td>
                        <td>84</td>
                    </tr>
                    <tr>
                        <td><b>sequential commands</b></td>
                        <td>11</td>
                        <td>9</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <td><b>visual patterns</b></td>
                        <td>12</td>
                        <td>9</td>
                        <td>37</td>
                    </tr>
                </tbody>
            </table>
            <h3 class="sub-title text-success font-weight-bold ml-0">Composite score/cognitive tests:</h3>
            <table class="table table-success">
                <thead>
                    <tr>
                        <th>confidence period:</th>
                        <th>percentile rank:</th>
                        <th>Nonverbal IQ:</th>
                        <th>The total weighted score:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>96 - 108</td>
                        <td>55</td>
                        <td>102</td>
                        <td>73</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="section">
            <h1 class="title">Cognitive tests file</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non distinctio nulla enim consequuntur quam odit
                numquam commodi? Asperiores eligendi esse totam eius quibusdam, dolore facere beatae perspiciatis a quam
                ducimus?</p>
            <canvas id="cognitiveTestsFileChart" width="400" height="200"></canvas>
        </div>
        <hr>
        <div class="section">
            <h1 class="title">Another type of charts</h1>
            <canvas id="cognitiveTestsFileChart2" width="400" height="200"></canvas>
        </div>
        <hr>

        <div class="section">
            <h1 class="title">Test</h1>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div id="canvas-wrapper">
                        <canvas id="chartWithTable" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="big-boss canvas-wrapper white-bar">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <div id="table-container">
                        </div>
                    </div>
                </div>
                <div class="canvas-table-group-wrapper">
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-2">
                                <p id="reading">Reading</p>
                                <p id="math">Math</p>
                                <p id="languages">Written Language</p>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-table-group bordered">
                        <div class="row">
                            <div class="col-2">
                                <p id="test1">Test 1</p>
                                <p id="test2">Test 2</p>
                                <p id="test3">Test 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-table-group">
                        <div class="row">
                            <div class="col-2">
                                <p id="test4">Test 4</p>
                                <p id="test5">Test 5</p>
                                <p id="test6">Test 6</p>
                                <p id="test7">Test 7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <footer class="row">
            <div class="col-3">
                <img src="{{ setting('bana_logo') }}" class="w-100" alt="">
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
