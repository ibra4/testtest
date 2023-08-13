import ExamineeGeneralData from 'components/ExamineeGeneralData';
import ReportsButtons from 'components/Reports/ReportsButtons';
import WhiteBox from 'components/WhiteBox';
import React from 'react';
import { useTranslation } from 'react-i18next';
import AttentionForm from './SubForms/AttentionForm';
import CognitiveSubtestsForm from './SubForms/CognitiveSubtestsForm';
import ExaminerRatingScaleSectionForm from './SubForms/ExaminerRatingScaleSectionForm';
import MemoryBatteryForm from './SubForms/MemoryBatteryForm';
import SupplementalAttentionForm from './SubForms/SupplementalAttentionForm';

function View({
    data: { examinee, reports, file_en, file_ar, file_normal_dist_en, file_normal_dist_ar },
    onSectionSubmit
}) {
    const { t } = useTranslation();
    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={examinee} />
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

export default View;