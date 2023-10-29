<div class="row">
    <div class="label-value-item col-6">
        <div class="label">{{ __('Name') }}:</div>
        <div class="value">
            @if (app()->getLocale() == 'en' && $examinee->name_en)
                {{ $examinee->name_en }}
            @else
                {{ $examinee->name }}
            @endif
        </div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Gender') }}:</div>
        <div class="value">{{ __($examinee->gender) }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Examiner') }}:</div>
        <div class="value">{{ $examinee->center->name }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Location of Testing') }}:</div>
        <div class="value">{{ $examinee->location }}</div>
    </div>
</div>
<div class="row">
    <div class="label-value-item col-6">
        <div class="label">{{ __('Application Date') }}:</div>
        <div class="value">{{ $report->application_date }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Date of Birth') }}:</div>
        <div class="value">{{ $examinee->birthday }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Age') }}:</div>
        <div class="value">{{ $report->translated_age }}</div>
    </div>
    @if ($examinee->information_source)
        <div class="label-value-item col-6">
            <div class="label">{{ __('Information Source') }}:</div>
            <div class="value">{{ __($examinee->information_source) }}</div>
        </div>
    @endif
    @if ($examinee->referral_source)
        <div class="label-value-item col-6">
            <div class="label">{{ __('Referral Source') }}:</div>
            <div class="value">{{ __($examinee->referral_source) }}</div>
        </div>
    @endif
    @if ($examinee->school)
        <div class="label-value-item col-6">
            <div class="label">{{ __('School - Workplace') }}:</div>
            <div class="value">{{ $examinee->school }}</div>
        </div>
    @endif
    @if ($examinee->grade)
        <div class="label-value-item col-6">
            <div class="label">{{ __('Grade') }}:</div>
            <div class="value">{{ $examinee->grade }}</div>
        </div>
    @endif
    @if (isset($type) && $type == 'abas')
        <div class="label-value-item col-6">
            <div class="label">{{ __('Sample') }}:</div>
            <div class="value">{{ __($abasExam->category) }}</div>
        </div>
    @endif
    @if ($report->examiner_notes)
        <div class="col-12">
            <div class="font-weight-bold">{{ __('Notes') }}:</div>
            <div class="value">{{ $report->examiner_notes }}</div>
        </div>
    @endif
</div>
