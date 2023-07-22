@extends('layouts.pdf')

@section('content')
    <main class="content" id="pdf">
        {{-- <div class="bar top"></div> --}}
        {{-- <header class="row align-items-center">
            <div class="col-6">
                <img width="200" src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold mb-0">Bana center for consultation and research and training</h3>
            </div>
        </header>
        <hr> --}}
        <h2 class="font-weight-bold text-center mt-2">{{ __('Confidential Test Results for the Leiter-3') }}</h2>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset($logo) }}" class="w-100" alt="">
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <img src="{{ asset('images/lieter3.jpeg') }}" class="w-100" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            {{-- <div class="col-8"> --}}
            <div class="label-value-item col-6">
                <div class="label">{{ __('Name') }}:</div>
                <div class="value">{{ $examinee->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Gender') }}:</div>
                <div class="value">{{ __($examinee->gender) }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Age') }}:</div>
                <div class="value">{{ $examinee->age }} {{ __('Months') }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Examiner') }}:</div>
                <div class="value">{{ $examinee->examiner->name }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Location of Testing') }}:</div>
                <div class="value">{{ $examinee->location }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Date of Birth') }}:</div>
                <div class="value">{{ $examinee->birthday }}</div>
            </div>
            <div class="label-value-item col-6">
                <div class="label">{{ __('Date of Report') }}:</div>
                <div class="value">{{ $examinee->application_date }}</div>
            </div>
            @if ($examinee->examiner_notes)
                <div class="label-value-item col-6">
                    <div class="label">{{ __('Notes') }}:</div>
                    <div class="value">{{ $examinee->examiner_notes }}</div>
                </div>
            @endif
            {{-- </div> --}}
        </div>
        <hr>
        <div class="section">
            {{-- <h1 class="title">Cognitive</h1> --}}
            <div class="no-break">
                <div class="table-header">{{ __('Cognitive Subtests') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th class="text-center">{{ __('Subtest') }}</th>
                            <th>{{ __('Raw Score') }}</th>
                            <th>{{ __('Scaled Score') }}</th>
                            <th>{{ __('Percentile') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>{{ __('Figure Ground (FG)') }}</b></td>
                            <td>{{ $reportCognitive->figure_ground }}</td>
                            <td>{{ $cognitive_values['fg'] }}</td>
                            <td>{{ $cognitive_values_percentile['fg'] }}</td>
                        </tr>
                        <tr>
                            <td><b>{{ __('Form Completion (FC)') }}</b></td>
                            <td>{{ $reportCognitive->form_completion }}</td>
                            <td>{{ $cognitive_values['fc'] }}</td>
                            <td>{{ $cognitive_values_percentile['fc'] }}</td>
                        </tr>
                        <tr>
                            <td><b>{{ __('Classification/Analogies (CA)') }}</b></td>
                            <td>{{ $reportCognitive->classification_analogies }}</td>
                            <td>{{ $cognitive_values['ca'] }}</td>
                            <td>{{ $cognitive_values_percentile['ca'] }}</td>
                        </tr>
                        <tr>
                            <td><b>{{ __('Sequential Order (SO)') }}</b></td>
                            <td>{{ $reportCognitive->sequential_order }}</td>
                            <td>{{ $cognitive_values['so'] }}</td>
                            <td>{{ $cognitive_values_percentile['so'] }}</td>
                        </tr>
                        <tr>
                            <td><b>{{ __('Visual Patterns (VP)') }}</b></td>
                            <td>{{ $reportCognitive->visual_patterns }}</td>
                            <td>{{ $cognitive_values['vp'] }}</td>
                            <td>{{ $cognitive_values_percentile['vp'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="no-break">
                <div class="table-header">{{ __('Cognitive Composite') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th>{{ __('Sum of 4 Scaled Scores') }}</th>
                            <th>{{ __('Nonverbal IQ') }}</th>
                            <th>{{ __('Percentile') }}</th>
                            <th>{{ __('Confidence Interval (95%)') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $sum_of_cognitive }}</td>
                            <td>{{ $nonverbal_iq }}</td>
                            <td>{{ $nonverbal_iq_percentile }}</td>
                            <td>{{ $confidence_interval_cognitive }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



        <div class="section">
            {{-- <h1 class="title">Attention / Memory</h1> --}}
            <div class="no-break">
                <div class="table-header">{{ __('Attention / Memory Subtests') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th class="text-center">{{ __('Subtest') }}</th>
                            <th>{{ __('Raw Score') }}</th>
                            <th>{{ __('Scaled Score') }}</th>
                            <th>{{ __('Percentile') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Attention Sustained (AS)') }}</td>
                            <td>{{ $reportAttention->attention_sustained }}</td>
                            <td>{{ $memory_attention_values['as'] }}</td>
                            <td>{{ $memory_attention_values_percentile['as'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Forward Memory (FM)') }}</td>
                            <td>{{ $reportMemory->forward_memory }}</td>
                            <td>{{ $memory_attention_values['fm'] }}</td>
                            <td>{{ $memory_attention_values_percentile['fm'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Reverse Memory (RM)') }}</td>
                            <td>{{ $reportMemory->reverse_memory }}</td>
                            <td>{{ $memory_attention_values['rm'] }}</td>
                            <td>{{ $memory_attention_values_percentile['rm'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal Stroop Incongruent Correct (NSic)') }}</td>
                            <td>{{ $reportAttention->nonverbal_stroop_incongruent_correct }}</td>
                            <td>{{ $memory_attention_values['nsic'] }}</td>
                            <td>{{ $memory_attention_values_percentile['nsic'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal Stroop Congruent Correct (NScc)') }}</td>
                            <td>{{ $reportAttention->nonverbal_stroop_congruent_correct }}</td>
                            <td>{{ $memory_attention_values['nscc'] }}</td>
                            <td>{{ $memory_attention_values_percentile['nscc'] }}</td>
                        </tr>
                        {{-- <tr>
                            <td class="">Nonverbal Stroop Effect (NSeff)</td>
                            <td>{{ $reportAttention->nonverbal_stroop_effect }}</td>
                            <td class="text-danger">{{ $memory_attention_values['nseff'] }}</td>
                            <td class="text-danger">25</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
            <div class="no-break">
                <div class="table-header">{{ __('Attention Memory Composites') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <tr>
                            <th>{{ __('Composite Domains') }}</th>
                            <th>{{ __('Sum of Scaled Scores') }}</th>
                            <th>{{ __('Composite Score') }}</th>
                            <th>{{ __('Percentile') }}</th>
                            <th>{{ __('Confidence Interval (95%)') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Nonverbal Memory') }}</td>
                            <td>{{ $sum_of_nonverbal_memory }}</td>
                            <td>{{ $composite_nonverbal_memory }}</td>
                            <td>{{ $composite_nonverbal_memory_percentile }}</td>
                            <td>{{ $confidence_interval_noverbal_memory }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Processing Speed') }}</td>
                            <td>{{ $sum_of_processing_speed }}</td>
                            <td>{{ $composite_processing_speed }}</td>
                            <td>{{ $composite_processing_speed_percentile }}</td>
                            <td>{{ $confidence_interval_processing_speed }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="no-break">
                <div class="table-header">{{ __('Supplemental Attention/Memory Scores') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <th class="text-center">{{ __('Attention Scores') }}</th>
                        <th>{{ __('Raw Score') }}</th>
                        <th>{{ __('Scaled Score') }}</th>
                        <th>{{ __('Percentile') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Attention Sustained Errors (ASe)') }}</td>
                            <td>{{ $reportSupplementalAttention->attention_sustained_errors }}</td>
                            <td>{{ $attention_anonymous_values['ase']['scaled_score'] }}</td>
                            <td>{{ $attention_anonymous_values['ase']['percentile'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Attention Divided Correct (ADc)') }}</td>
                            <td>{{ $reportSupplementalAttention->attention_divided_correct }}</td>
                            <td>{{ $attention_anonymous_values['adc']['scaled_score'] }}</td>
                            <td>{{ $attention_anonymous_values['adc']['percentile'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Attention Divided Incorrect (ADi)') }}</td>
                            <td>{{ $reportSupplementalAttention->attention_divided_incorrect }}</td>
                            <td>{{ $attention_anonymous_values['adi']['scaled_score'] }}</td>
                            <td>{{ $attention_anonymous_values['adi']['percentile'] }}</td>
                        </tr>
                        <tr class="bg font-weight-bold">
                            <td class="text-center">{{ __('Nonverbal Stroop Scores') }}</td>
                            <td>{{ __('Raw Score') }}</td>
                            <td>{{ __('Scaled Score') }}</td>
                            <td>{{ __('Percentile') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal Stroop Congruent Incorrect (NSCi)') }}</td>
                            <td>{{ $reportSupplementalAttention->nonverbal_stroop_congruent_incorrect }}</td>
                            <td>{{ $attention_anonymous_values['nsci']['scaled_score'] }}</td>
                            <td>{{ $attention_anonymous_values['nsci']['percentile'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal Stroop Incongruent Incorrect (NSii)') }}</td>
                            <td>{{ $reportSupplementalAttention->nonverbal_stroop_incongruent_incorrect }}</td>
                            <td>{{ $attention_anonymous_values['nsii']['scaled_score'] }}</td>
                            <td>{{ $attention_anonymous_values['nsii']['percentile'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="section">
            {{-- <h1 class="title">Examiner Rating</h1> --}}
            <div class="no-break">
                <div class="table-header">{{ __('Examiner Rating Scale Scores') }}</div>
                <table class="table-bordered table">
                    <tbody>
                        <tr class="bg font-weight-bold">
                            <td class="text-center">{{ __('Section A-D') }}</td>
                            <td>{{ __('Raw Score') }}</td>
                            <td>{{ __('Scaled Score') }}</td>
                            <td>{{ __('Percentile') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Attention') }}</td>
                            <td>{{ $reportExaminer->attention }}</td>
                            <td>{{ $examiner_scores['attention']->scaled_score }}</td>
                            <td>{{ $examiner_scores['attention']->percentile }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Organization / Impulse Control') }}</td>
                            <td>{{ $reportExaminer->organization_impulse_control }}</td>
                            <td>{{ $examiner_scores['organization']->scaled_score }}</td>
                            <td>{{ $examiner_scores['organization']->percentile }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Activity Level') }}</td>
                            <td>{{ $reportExaminer->activity_level }}</td>
                            <td class="bg-secondary"></td>
                            <td class="bg-secondary"></td>
                        </tr>
                        <tr>
                            <td>{{ __('Sociablility') }}</td>
                            <td>{{ $reportExaminer->sociability }}</td>
                            <td class="bg-secondary"></td>
                            <td class="bg-secondary"></td>
                        </tr>
                        <tr class="bg font-weight-bold">
                            <td class="text-center">{{ __('Section A-D Composite') }}</td>
                            <td>{{ __('Raw Score') }}</td>
                            <td>{{ __('Composite Score') }}</td>
                            <td>{{ __('Percentile') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Cognitive / Social Composite Score') }}</td>
                            <td>{{ $examiner_section_ad_sum }}</td>
                            <td>{{ $examiner_scores['social']->scaled_score }}</td>
                            <td>{{ $examiner_social_percentile }}</td>
                        </tr>
                        <tr class="bg font-weight-bold">
                            <td class="text-center">{{ __('Section E-H') }}</td>
                            <td>{{ __('Raw Score') }}</td>
                            <td>{{ __('Scaled Score') }}</td>
                            <td>{{ __('Percentile') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Energy and Feelings') }}</td>
                            <td>{{ $reportExaminer->energy_and_feelings }}</td>
                            <td>{{ $examiner_scores['energy']->scaled_score }}</td>
                            <td>{{ $examiner_scores['energy']->percentile }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Regulation') }}</td>
                            <td>{{ $reportExaminer->regulation }}</td>
                            <td class="bg-secondary"></td>
                            <td class="bg-secondary"></td>
                        </tr>
                        <tr>
                            <td>{{ __('Anxiety') }}</td>
                            <td>{{ $reportExaminer->anxiety }}</td>
                            <td>{{ $examiner_scores['anxiety']->scaled_score }}</td>
                            <td>{{ $examiner_scores['anxiety']->percentile }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Sensory Reaction') }}</td>
                            <td>{{ $reportExaminer->sensory_reaction }}</td>
                            <td class="bg-secondary"></td>
                            <td class="bg-secondary"></td>
                        </tr>
                        <tr class="bg font-weight-bold">
                            <td class="text-center">{{ __('Section E-H Composite') }}</td>
                            <td>{{ __('Raw Score') }}</td>
                            <td>{{ __('Composite Score') }}</td>
                            <td>{{ __('Percentile') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Emotions/Regulations Composite Score') }}</td>
                            <td>{{ $examiner_section_eh_sum }}</td>
                            <td>{{ $examiner_scores['emotions']->scaled_score }}</td>
                            <td>{{ $examiner_social_emotions }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="section">
            {{-- <h1 class="title">Growth Profile Scores</h1> --}}
            <div class="no-break">
                <div class="table-header">{{ __('Growth Profile Scores') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <th class="text-center">{{ __('Cognitive Subtests') }}</th>
                        <th>{{ __('Standard Error of Measurement (SEM)') }}</th>
                        <th>{{ __('Growth Score') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Nonverbal IQ (NVIQ)') }}</td>
                            <td>{{ $sem_growth['nonverbal_iq']['sem'] }}</td>
                            <td>{{ $sem_growth['nonverbal_iq']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Figure Ground (FG)') }}</td>
                            <td>{{ $sem_growth['figure_ground']['sem'] }}</td>
                            <td>{{ $sem_growth['figure_ground']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Form Completion (FC)') }}</td>
                            <td>{{ $sem_growth['form_completion']['sem'] }}</td>
                            <td>{{ $sem_growth['form_completion']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Classification / Analogies (CA)') }}</td>
                            <td>{{ $sem_growth['classification_analogies']['sem'] }}</td>
                            <td>{{ $sem_growth['classification_analogies']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Sequential Order (SO)') }}</td>
                            <td>{{ $sem_growth['sequential_order']['sem'] }}</td>
                            <td>{{ $sem_growth['sequential_order']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Visual Patterns (VP)') }}</td>
                            <td>{{ $sem_growth['visual_patterns']['sem'] }}</td>
                            <td>{{ $sem_growth['visual_patterns']['growth'] }}</td>
                        </tr>
                    </tbody>
                    <thead>
                        <th class="text-center">{{ __('Memory Subtests') }}</th>
                        <th>{{ __('Standard Error of Measurement (SEM)') }}</th>
                        <th>{{ __('Growth Score') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Nonverbal Memory (NVm)') }}</td>
                            <td>{{ $sem_growth['nonverbal_memory']['sem'] }}</td>
                            <td>{{ $sem_growth['nonverbal_memory']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Forward Memory (FM)') }}</td>
                            <td>{{ $sem_growth['forward_memory']['sem'] }}</td>
                            <td>{{ $sem_growth['forward_memory']['growth'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Reverse Memory (RM)') }}</td>
                            <td>{{ $sem_growth['reverse_memory']['sem'] }}</td>
                            <td>{{ $sem_growth['reverse_memory']['growth'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="no-break">
                <div class="table-header">{{ __('Equivalent Age') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <th class="text-center">{{ __('Growth Scale') }}</th>
                        <th>{{ __('Age Equivalent') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Cognitive Growth Scale') }}</td>
                            <td>{{ $age_equivalent['cognitive'] }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Memory Growth Scale') }}</td>
                            <td>{{ $age_equivalent['memory'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="no-break">
                <div class="table-header">{{ __('Cognitive and Attention/Memory Score Differences') }}</div>
                <table class="table-bordered table">
                    <thead>
                        <th class="text-center">{{ __('Subtest Group') }}</th>
                        <th>{{ __('Difference') }}</th>
                        <th>{{ __('Critical Value') }}</th>
                        <th>{{ __('Percentile') }}</th>
                        <th>{{ __('Significance') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('Nonverbal IQ vs Nonverbal Memory') }}</td>
                            <td>{{ $diffs['nviq_nvm'] }}</td>
                            <td>{{ $vs['nviq_nvm'] }}</td>
                            <td>{{ $diffs_percentile['nviq_nvm'] }}</td>
                            <td>{{ __('Not Significant') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal IQ vs Processing Speed') }}</td>
                            <td>{{ $diffs['nviq_ps'] }}</td>
                            <td>{{ $vs['nviq_ps'] }}</td>
                            <td>{{ $diffs_percentile['nviq_ps'] }}</td>
                            <td>{{ __('Not Significant') }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('Nonverbal Memory vs Processing Speed') }}</td>
                            <td>{{ $diffs['nvm_ps'] }}</td>
                            <td>{{ $vs['nvm_ps'] }}</td>
                            <td>{{ $diffs_percentile['nvm_ps'] }}</td>
                            <td>{{ __('Not Significant') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <div class="table-header">Scatter Indices</div>
            <table class="no-break table-bordered table text-danger">
                <thead>
                    <th class="text-center">Battery</th>
                    <th>Scatter Value</th>
                    <th>Frequency of Occurrence</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Cognitive Battery</td>
                        <td>3</td>
                        <td>77.5</td>
                    </tr>
                    <tr>
                        <td>Attention / Memory Battery</td>
                        <td>5</td>
                        <td>39.6</td>
                    </tr>
                </tbody>
            </table> --}}
        </div>

        <hr>

        @include('components.pdf_footer')
        {{-- <div class="bar bottom"></div> --}}
    </main>
@endsection
