import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import { getAdminById, getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import AttentionForm from './SubForms/AttentionForm';
import CognitiveSubtestsForm from './SubForms/CognitiveSubtestsForm';
import ExaminerRatingScaleSectionForm from './SubForms/ExaminerRatingScaleSectionForm';
import MemoryBatteryForm from './SubForms/MemoryBatteryForm';
import NarrativeReportForm from './SubForms/NarrativeReportForm';
import SupplementalAttentionForm from './SubForms/SupplementalAttentionForm';

function View({ data: { examinee, reports }, onSectionSubmit }) {
    const { t } = useTranslation();
    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <Row>
                    <LabelValueCol label={'Name'} value={examinee.name} md={3} />
                    <LabelValueCol label={'Birthday'} value={examinee.birthday} md={3} />
                    <LabelValueCol label={'Age'} value={examinee.age} md={3} />
                    <LabelValueCol label={'Gender'} value={getGender(examinee.gender)} md={3} />
                    <LabelValueCol label={'Country'} value={getCountryById(examinee.country_id)} md={3} />
                    <LabelValueCol label={'Application Date'} value={examinee.application_date} md={3} />
                    <LabelValueCol label={'Center Name'} value={getAdminById(examinee.admin_id)} md={3} />
                    <LabelValueCol label={'Notes'} value={examinee.examiner_notes} md={12} />
                </Row>
            </WhiteBox>
            <CognitiveSubtestsForm examinee={examinee} initialValues={reports.cognitive} onSubmit={onSectionSubmit} />
            <MemoryBatteryForm examinee={examinee} initialValues={reports.memory} onSubmit={onSectionSubmit} />
            <AttentionForm examinee={examinee} initialValues={reports.attention} onSubmit={onSectionSubmit} />
            <SupplementalAttentionForm
                examinee={examinee}
                initialValues={reports.supplemental_attention}
                onSubmit={onSectionSubmit}
            />
            <ExaminerRatingScaleSectionForm
                examinee={examinee}
                initialValues={reports.examiner}
                onSubmit={onSectionSubmit}
            />
            <NarrativeReportForm examinee={examinee} initialValues={reports.narrative} onSubmit={onSectionSubmit} />
        </>
    );
}

export default View;
