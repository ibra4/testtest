import classNames from 'classnames';
import ExamineeGeneralData from 'components/ExamineeGeneralData';
import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import React, { useMemo } from 'react';
import { Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { FaInfoCircle, FaSave, FaTable } from 'react-icons/fa';
import { Link } from 'react-router-dom';
import { useParams } from 'react-router-dom';
import AbasIntroduction from './AbasIntroduction';
import AbasReports from './AbasReports';
import SubDomainForm from './SubDomainForm';

function AbasView({ data, onSubDomainSubmit }) {
    const { t } = useTranslation();
    const { sub_domain_id } = useParams();

    const renderView = () => {
        switch (sub_domain_id) {
            case 'introduction':
                return <AbasIntroduction content={data.introduction} />;
            case 'reports':
                return <AbasReports data={data} />;
            default:
                const subDomain = data.sub_domains.find((item) => item.id == sub_domain_id);
                return <SubDomainForm subDomain={subDomain} onSubmit={onSubDomainSubmit} />;
        }
    };

    const atLeastOneSaved = useMemo(() => data.sub_domains.find((item) => item.is_saved), [data]);

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
                    <LabelValueCol label={'Category'} value={data.category} md={3} />
                    {data?.examiner_notes && <LabelValueCol label={'Notes'} value={data.examiner_notes} md={12} />}
                </Row>
            </WhiteBox>
            <div className="abas-tabs">
                <Link
                    className={classNames([
                        'abas-tab-item bg-primary text-white me-2',
                        sub_domain_id == 'introduction' && 'active'
                    ])}
                    to={`/exams/abas/${data.id}/introduction`}
                >
                    <FaInfoCircle />
                </Link>
                {data.sub_domains.map((subDomain) => (
                    <Link
                        className={classNames([
                            'abas-tab-item me-2',
                            sub_domain_id == subDomain.id && 'active',
                            subDomain.is_saved && 'saved'
                        ])}
                        key={subDomain.id}
                        to={`/exams/abas/${data.id}/${subDomain.id}`}
                    >
                        <span className="icon-wrapper me-2">
                            <FaSave />
                        </span>
                        {subDomain.title}
                    </Link>
                ))}
                {atLeastOneSaved && (
                    <Link
                        className={classNames([
                            'abas-tab-item bg-success text-white',
                            sub_domain_id == 'reports' && 'active',
                            'saved'
                        ])}
                        to={`/exams/abas/${data.id}/reports`}
                    >
                        <span className="icon-wrapper me-2">
                            <FaTable />
                        </span>
                        {t('Extract reports')}
                    </Link>
                )}
            </div>
            <WhiteBox>{renderView()}</WhiteBox>
        </>
    );
}

export default AbasView;
