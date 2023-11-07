@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf-charts">
        @include('components.report_header', [
            'title' => __('Confidential Test Results for ABAS'),
            'type' => 'abas',
        ])
        <hr>
        @include('components.report_examinee_data', ['type' => 'abas'])
        <hr>

        @foreach ($examQuestionsResults as $examQuestionsResult)
            <div class="section mb-4">
                <h1 class="title">{{ $examQuestionsResult['sub_domain'][$lang == 'ar' ? 'name' : 'name_en'] }}</h1>
                <div class="mb-5">
                    @foreach ($examQuestionsResult['questions'] as $question)
                        @php
                            $questionTitle = $question[$lang == 'ar' ? 'name' : 'name_en'];
                            $description = $question[$lang == 'ar' ? 'description' : 'description_en'];
                        @endphp
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <div>{{ $question['question_number'] }}. {{ $questionTitle }}</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>{{ __('Result') }} : </span>
                                        <span class="text-success font-weight-bold">{{ $question['result'] }}</span>
                                    </td>
                                    <td>
                                        <span>{{ __('Guess') }} : </span>
                                        <span
                                            class="text-success font-weight-bold">{{ $question['guess'] ? __('Yes') : __('No') }}</span>
                                    </td>
                                </tr>
                                @if ($description)
                                    <tr>
                                        <td colspan="2">
                                            <div class="font-weight-bold">{{ __('Goal Explaination') }} : </div>
                                            {!! nl2br($description) !!}
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    @endforeach
                </div>
            </div>
        @endforeach

        @include('components.pdf_footer')

    </main>
@endsection

@section('js')
@endsection
