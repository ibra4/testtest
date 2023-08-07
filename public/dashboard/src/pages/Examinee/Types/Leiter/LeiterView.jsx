import LabelValueCol from 'components/LabelValueCol';
import ReportsButtons from 'components/Reports/ReportsButtons';
import WhiteBox from 'components/WhiteBox';
import { getAdminById, getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import AttentionForm from './SubForms/AttentionForm';
import CognitiveSubtestsForm from './SubForms/CognitiveSubtestsForm';
import ExaminerRatingScaleSectionForm from './SubForms/ExaminerRatingScaleSectionForm';
import MemoryBatteryForm from './SubForms/MemoryBatteryForm';
import SupplementalAttentionForm from './SubForms/SupplementalAttentionForm';

function LeiterView({
    data: { examinee, reports, file_en, file_ar, file_normal_dist_en, file_normal_dist_ar },
    onSectionSubmit
}) {
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
            <CognitiveSubtestsForm initialValues={reports.cognitive} onSubmit={onSectionSubmit} />
            <MemoryBatteryForm initialValues={reports.memory} onSubmit={onSectionSubmit} />
            <AttentionForm initialValues={reports.attention} onSubmit={onSectionSubmit} />
            <SupplementalAttentionForm initialValues={reports.supplemental_attention} onSubmit={onSectionSubmit} />
            <ExaminerRatingScaleSectionForm initialValues={reports.examiner} onSubmit={onSectionSubmit} />
            <ReportsButtons
                data={{
                    file_en,
                    file_ar,
                    file_normal_dist_en,
                    file_normal_dist_ar
                }}
            />
        </>
    );
}

export default LeiterView;
