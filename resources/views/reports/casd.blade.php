@extends('layouts.pdf')

@section('content')
    <main class="content">
        @include('components.report_header', ['title' => __('إختبارات كازد')])
        <hr>
        @include('components.report_examinee_data', ['type' => 'casd'])
        <hr>
        <div class="section">
            <h3 class="mb-4">{{ __('Skills that apply to examinee') }}</h3>
            <p>
                بعد تطبيق قائمة (كازد) لتقدير اضطراب طيف التوحدتحصل المفحوص درجة ({{ $count }})
            </p>
            <hr>
            <ol>
                @foreach ($appliedSubDomains as $idx => $appliedSubDomain)
                    <li class="mb-4 no-break">
                        <h4>{{ $appliedSubDomain['sub_domain']->subDomain->name }}</h4>
                        <ul>
                            @foreach ($appliedSubDomain['questions'] as $question)
                                <li>
                                    <h5>{{ $question->question->name }}</h5>
                                    <p>{!! $question->question->description !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>
        </div>
        <hr>
        <div class="section">
            <h3 class="mb-4">{{ __("Skills that don't apply to examinee") }}</h3>
            <hr>
            <ol>
                @foreach ($notAppliedSubDomains as $idx => $notAppliedSubDomain)
                    <li class="mb-4 no-break">
                        <h4>{{ $notAppliedSubDomain['sub_domain']->subDomain->name }}</h4>
                        <ul>
                            @foreach ($notAppliedSubDomain['questions'] as $question)
                                <li>
                                    <h5>{{ $question->question->name }}</h5>
                                    <p>{!! $question->question->description !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>
        </div>
        <hr>
    </main>
@endsection
