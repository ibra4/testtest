import LabelValueCol from 'components/LabelValueCol';
import { getCountryById, getExamineeName, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';

function ExamineeGeneralData({ examinee, examiner, showNotes = true }) {
    return (
        <Row>
            <LabelValueCol label={'ID'} value={examinee && examinee.id} md={3} />
            <LabelValueCol label={'Name'} value={examinee && getExamineeName(examinee)} md={3} />
            <LabelValueCol label={'Birthday'} value={examinee && examinee.birthday} md={3} />
            <LabelValueCol label={'Gender'} value={examinee && getGender(examinee.gender)} md={3} />
            <LabelValueCol label={'Country'} value={examinee && getCountryById(examinee.country_id)} md={3} />
            <LabelValueCol label={'Center Name'} value={examiner && examiner.name} md={3} />
            {examinee?.information_source && (
                <LabelValueCol label={'Information Source'} value={examinee.information_source} md={3} />
            )}
            {examinee?.referral_source && (
                <LabelValueCol label={'Referral Source'} value={examinee.referral_source} md={3} />
            )}
            {examinee?.school && (
                <LabelValueCol label={'School - Workplace'} value={examinee.school} md={3} />
            )}
            {examinee?.grade && (
                <LabelValueCol label={'Grade'} value={examinee.grade} md={3} />
            )}
            {showNotes && examinee && examinee?.examiner_notes && (
                <LabelValueCol label={'Notes'} value={examinee.examiner_notes} md={12} />
            )}
        </Row>
    );
}

export default ExamineeGeneralData;
