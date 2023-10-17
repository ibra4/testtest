@extends('layouts.pdf')

@section('content')
    <main class="content">
        @include('components.report_header', [
            'title' => __('إختبارات السلوك التكيفي'),
            'subTitle' => 'نموذج' . ' ' . __($report->category),
        ])
        <hr>
        @include('components.report_examinee_data')
        <hr>
        <div class="section">

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="4">بيانات الإدخال</th>
                    </tr>
                    <tr>
                        <td>مجال المهارات التكيفية</td>
                        <td>صافى المجموع</td>
                        <td>عدد العناصر التي تم تخطيها</td>
                        <td>عدد العناصر التي تم تخمينها</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subDomainsCounters as $item)
                        <tr>
                            <td>{{ $item->subdomain_name }}</td>
                            <td>{{ $item->sum_of_result }}</td>
                            <td>{{ $item->number_of_zeros }}</td>
                            <td>{{ $item->number_of_guesses }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="{{ count($domains) + 3 }}">النتيجة الأولية للتحويلات المحسوبة</th>
                    </tr>
                    <tr>
                        <td>مجال المهارات التكيفية</td>
                        <td>صافي المجموع</td>
                        <td colspan="{{ count($domains) }}">الدرجة الموزونة</td>
                        <td>المكافئ العمري</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($examScaledScores as $examResult)
                        <tr>
                            <td>{{ $examResult->name }}</td>
                            <td>{{ $examResult->result }}</td>
                            <td>{{ $examResult->scaled_score }}</td>
                            @foreach ($domains as $i => $domain)
                                @if ($domain['id'] == $examResult->domain_id)
                                    <td>{{ $examResult->scaled_score }}</td>
                                @elseif ($i != 0)
                                    <td class="bg-secondary"></td>
                                @endif
                            @endforeach
                            <td>{{ $examResult->age_equ }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">مجموع الدرجات الموزونة</td>
                        {{-- <td>{{ $totalScaledScore }}</td> --}}
                        @foreach ($domains as $domain)
                            <td>{{ $domain['sum'] }}</td>
                        @endforeach
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">ملاحظة: المهارات الحركية مدرج في (د.م.ع) ولكن ليس في المجالات التكيفية</td>
                        {{-- <td>الدرجة المركبة العامة (د.م.ع)</td> --}}
                        @foreach ($domains as $domain)
                            <td>{{ $domain['name'] }}</td>
                        @endforeach
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th colspan="5">مجموع الدرجات المقاسة للمركب التكيفي العام (GAC) وتحويلات درجات المجال التكيفي
                        </th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>مجموع الدرجات المقاسة</td>
                        <td>النتيجة القياسية</td>
                        <td>الرتبة المئوية</td>
                        <td>فاصل الثقة: 95٪</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($domains as $domain)
                        <tr>
                            <td>{{ $domain['name'] }}</td>
                            <td>{{ $domain['sum'] }}</td>
                            <td>{{ $domain['composite']['std_score'] }}</td>
                            <td>{{ $domain['composite']['per_rank'] }}</td>
                            <td>{{ $domain['confidence'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        <canvas id="iqChart" width="400" height="200"></canvas>
    </main>
@endsection
