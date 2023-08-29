import ExamineeGeneralData from 'components/ExamineeGeneralData';
import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import React from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasView({ data, onSubDomainSubmit }) {
    const { t } = useTranslation();
    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={data?.examinee} examiner={data.examiner} showNotes={false} />
                <div className="title">{t('Exam Data')}</div>
                <Row>
                    <LabelValueCol label={'ID'} value={data.id} md={3} />
                    <LabelValueCol label={'Application Date'} value={data.application_date} md={3} />
                    <LabelValueCol label={'Age'} value={data.translated_age} md={3} />
                    {data?.examiner_notes && <LabelValueCol label={'Notes'} value={data.examiner_notes} md={12} />}
                </Row>
            </WhiteBox>
        </>
    );
}

export default AbasView;
