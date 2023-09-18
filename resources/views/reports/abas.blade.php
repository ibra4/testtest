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
                        <th colspan="7">النتيجة الأولية للتحويلات المحسوبة</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>النتيجة الأولية للتحويلات المحسوبة</td>
                        <td>الدرجة الخام</td>
                        <td colspan="4">الدرجة الموزونة</td>
                        <td>المكافئ العمري</td>
                    </tr>
                    @foreach ($examResults as $examResult)
                        <tr>
                            <td>{{ $examResult->name }}</td>
                            <td>{{ $examResult->result }}</td>
                            <td>{{ $examResult->scaled_score }}</td>
                            @foreach ($domains as $domain)
                                @if ($domain['id'] == $examResult->domain_id)
                                    <td>{{ $examResult->scaled_score }}</td>
                                @else
                                    <td class="bg-secondary"></td>
                                @endif
                            @endforeach
                            <td class="text-danger">2:0-2:2</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="2">مجموع الدرجات الموزونة</td>
                        <td>{{ $totalScaledScore }}</td>
                        @foreach ($domains as $domain)
                            <td>{{ array_sum($sums[$domain['id']]) }}</td>
                        @endforeach
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">ملاحظة: المهارات الحركية مدرج في (د.م.ع) ولكن ليس في المجالات التكيفية</td>
                        <td>الدرجة المركبة العامة (د.م.ع)</td>
                        @foreach ($domains as $domain)
                            <td>{{ $domain['name'] }}</td>
                        @endforeach
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
    </main>
@endsection
