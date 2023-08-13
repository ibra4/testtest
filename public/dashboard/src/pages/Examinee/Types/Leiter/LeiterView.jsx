import ExamineeGeneralData from 'components/ExamineeGeneralData';
import LabelValueCol from 'components/LabelValueCol';
import ReportsButtons from 'components/Reports/ReportsButtons';
import WhiteBox from 'components/WhiteBox';
import { getCountryById, getGender, renderAge } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import AttentionForm from './SubForms/AttentionForm';
import CognitiveSubtestsForm from './SubForms/CognitiveSubtestsForm';
import ExaminerRatingScaleSectionForm from './SubForms/ExaminerRatingScaleSectionForm';
import MemoryBatteryForm from './SubForms/MemoryBatteryForm';
import SupplementalAttentionForm from './SubForms/SupplementalAttentionForm';

function LeiterView({ data, onSectionSubmit }) {
    const { t } = useTranslation();
    return (
        data.examinee && (
            <>
                <WhiteBox title={t('Examinee Data')}>
                    <ExamineeGeneralData examinee={data.examinee} examiner={data.examiner} />
                    <div className="title">{t('Exam Data')}</div>
                    <Row>
                        <LabelValueCol label={'ID'} value={data.id} md={3} />
                        <LabelValueCol label={'Application Date'} value={data.application_date} md={3} />
                        <LabelValueCol label={'Age'} value={renderAge(data.formated_age)} md={3} />
                        <LabelValueCol label={'Notes'} value={data.examiner_notes} md={12} />
                    </Row>
                </WhiteBox>
                <CognitiveSubtestsForm initialValues={data.reports.cognitive} onSubmit={onSectionSubmit} />
                <MemoryBatteryForm initialValues={data.reports.memory} onSubmit={onSectionSubmit} />
                <AttentionForm initialValues={data.reports.attention} onSubmit={onSectionSubmit} />
                <SupplementalAttentionForm
                    initialValues={data.reports.supplemental_attention}
                    onSubmit={onSectionSubmit}
                />
                <ExaminerRatingScaleSectionForm initialValues={data.reports.examiner} onSubmit={onSectionSubmit} />
                <ReportsButtons
                    data={{
                        file_en: data.file_en,
                        file_ar: data.file_ar,
                        file_normal_dist_en: data.file_normal_dist_en,
                        file_normal_dist_ar: data.file_normal_dist_ar
                    }}
                />
            </>
        )
    );
}

export default LeiterView;
