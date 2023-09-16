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
        <div class="label">{{ __('Age') }}:</div>
        <div class="value">{{ $report->translated_age }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Examiner') }}:</div>
        <div class="value">{{ $examinee->center->name }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Location of Testing') }}:</div>
        <div class="value">{{ $examinee->location }}</div>
    </div>
    <div class="label-value-item col-6">
        <div class="label">{{ __('Date of Birth') }}:</div>
        <div class="value">{{ $examinee->birthday }}</div>
    </div>
    @if ($report->examiner_notes)
        <div class="col-12">
            <div class="font-weight-bold">{{ __('Notes') }}:</div>
            <div class="value">{{ $report->examiner_notes }}</div>
        </div>
    @endif
</div>
