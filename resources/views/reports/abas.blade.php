@extends('layouts.pdf')

@section('content')
    <main class="content">

        <h1>ABAS</h1>
        <p>ABAS</p>

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
                @foreach ($abasExam->subDomains as $examSubDomain)
                    <tr>
                        <td>{{ $examSubDomain->subDomain->name }}</td>
                        <td>{{ $examSubDomain->questions->sum('result') }}</td>
                        <td>{{ $examSubDomain->questions->sum('result') }} موزونة</td>
                        @foreach ($domains as $domain)
                            @if ($domain->id == $examSubDomain->subDomain->abas_domain_id)
                                <td>{{ $examSubDomain->questions->sum('result') }} موزونة</td>
                            @else
                                <td class="bg-secondary"></td>
                            @endif
                        @endforeach
                        <td>عمر مكافئ</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">مجموع الدرجات الموزونة</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    {{-- <td></td> --}}
                </tr>
                <tr>
                    <td colspan="2">ملاحظة: المهارات الحركية مدرج في (د.م.ع) ولكن ليس في المجالات التكيفية</td>
                    <td>الدرجة المركبة العامة (د.م.ع)</td>
                    <td>المجال المفاهيمي</td>
                    <td>المجال الاجتماعي</td>
                    <td>المجال العملي</td>
                    {{-- <td></td> --}}
                </tr>
            </tbody>
        </table>
        <hr>
    </main>
@endsection
