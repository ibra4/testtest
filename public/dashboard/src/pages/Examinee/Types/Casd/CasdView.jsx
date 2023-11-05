import ExamineeGeneralData from 'components/ExamineeGeneralData';
import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import React from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import CasdReports from './CasdReports';
import SubDomainForm from './SubDomainForm';

function CasdView({ data, onExamSubmit }) {
    const { t } = useTranslation();

    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData
                    showNotes={false}
                    examinee={data?.examinee}
                    center={data.center}
                    examiner={data.examiner}
                />
                <div className="title">{t('Exam Data')}</div>
                <Row>
                    <LabelValueCol label={'ID'} value={data.id} md={3} />
                    <LabelValueCol label={'Application Date'} value={data.application_date} md={3} />
                    <LabelValueCol label={'Age'} value={data.translated_age} md={3} />
                    {data?.examiner_notes && <LabelValueCol label={'Notes'} value={data.examiner_notes} md={12} />}
                </Row>
            </WhiteBox>
            <SubDomainForm exam={data} onSubmit={onExamSubmit} />
            <WhiteBox title={t('Reports')}>
                <CasdReports />
            </WhiteBox>
        </>
    );
}

export default CasdView;
