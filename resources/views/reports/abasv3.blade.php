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
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Number') }}&nbsp;&nbsp;</th>
                            <th>{{ __('Result') }}&nbsp;&nbsp;</th>
                            <th>{{ __('Guess') }}&nbsp;&nbsp;</th>
                            <th>{{ __('Question') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($examQuestionsResult['questions'] as $question)
                            <tr>
                                <td>{{ $question['question_number'] }}</td>
                                <td class="text-success font-weight-bold">{{ $question['result'] }}</td>
                                <td>{{ $question['guess'] ? __('Yes') : __('No') }}</td>
                                <td>{{ $question[$lang == 'ar' ? 'name' : 'name_en'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        @endforeach

        @include('components.pdf_footer')

    </main>
@endsection

@section('js')
@endsection
