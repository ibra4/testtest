import ExamineeGeneralData from 'components/ExamineeGeneralData';
import WhiteBox from 'components/WhiteBox';
import { generateRandomColor } from 'providers/helpers';
import React, { useMemo } from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { useSelector } from 'react-redux';

function AbasQuestionsReportView({ data }) {
    const { t } = useTranslation();

    const config = useSelector((state) => state.app.config.config);
    const domains = useMemo(() => {
        // extract domains to use  it as filters
        return Object.values(data.exam_questions).map((domain) => domain.sub_domain.name);
    }, []);

    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={data.examinee} examiner={data.examiner} />
            </WhiteBox>
            <h3>{t('Filters')}</h3>
            <div className="questions-report-domains d-flex flex-wrap mb-3">
                {domains.map((domain) => (
                    <h6
                        key={domain}
                        className="text-white p-2 me-2 mb-2"
                        style={{ backgroundColor: generateRandomColor() }}
                    >
                        {domain}
                    </h6>
                ))}
            </div>
            <WhiteBox title={t('Questions')}>
                {Object.values(data.exam_questions).map((examSubDomain) => (
                    <div key={examSubDomain.sub_domain.id} className="mb-5">
                        <h3>{examSubDomain.sub_domain.name}</h3>
                        <Table>
                            <thead>
                                <tr>
                                    <th>{t('Show')}</th>
                                    <th>{t('Number')}</th>
                                    <th>{t('Question')}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {examSubDomain.questions.map((subDomainQuestion) => (
                                    <tr key={subDomainQuestion.id}>
                                        <td>
                                            <input type="checkbox" />
                                        </td>
                                        <td>{subDomainQuestion.question_number}</td>
                                        <td>{subDomainQuestion.name}</td>
                                    </tr>
                                ))}
                            </tbody>
                        </Table>
                    </div>
                ))}
            </WhiteBox>
        </>
    );
}

export default AbasQuestionsReportView;
