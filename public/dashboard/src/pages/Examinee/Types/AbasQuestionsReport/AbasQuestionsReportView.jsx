import ExamineeGeneralData from 'components/ExamineeGeneralData';
import NoReports from 'components/Reports/NoReports';
import WhiteBox from 'components/WhiteBox';
import React, { useEffect, useState } from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { useSelector } from 'react-redux';
import AbasQuestionsReports from './AbasQuestionsReports';

function AbasQuestionsReportView({ data, handleUpdate }) {
    const { t } = useTranslation();

    const config = useSelector((state) => state.app.config.config);
    const [subDomains, setSubDomains] = useState([]);

    const isAllQuestionsChecked = (examSubDomainId) => {
        return subDomains.find((item) => item.id == examSubDomainId).questions.every((item) => item.show_in_report);
    };

    useEffect(() => {
        setSubDomains(
            Object.values(data.exam_questions).map((examSubDomain) => {
                return {
                    id: examSubDomain.sub_domain.id,
                    name: examSubDomain.sub_domain.name,
                    checked: data.exam_questions[examSubDomain.sub_domain.id].questions.every(
                        (item) => item.show_in_report
                    ),
                    questions: examSubDomain.questions
                };
            })
        );
    }, []);

    const handleExamSubDomainCheck = (checked, examSubDomainId) => {
        setSubDomains(
            subDomains.map((examSubdomainData) => {
                if (examSubdomainData.id == examSubDomainId) {
                    if (!checked) {
                        return {
                            ...examSubdomainData,
                            checked: false,
                            questions: examSubdomainData.questions.map((subDomainQuestion) => {
                                return { ...subDomainQuestion, show_in_report: false };
                            })
                        };
                    } else {
                        return {
                            ...examSubdomainData,
                            checked: true,
                            questions: data.exam_questions[examSubDomainId].questions.map((question) => {
                                return { ...question, show_in_report: true };
                            })
                        };
                    }
                } else {
                    return examSubdomainData;
                }
            })
        );
    };

    const handleExamSubDomainQuestionCheck = (checked, examSubDomainQuestionId, examSubDomainId) => {
        setSubDomains(
            subDomains.map((examSubdomainData) => {
                if (examSubdomainData.id === examSubDomainId) {
                    return {
                        ...examSubdomainData,
                        questions: examSubdomainData.questions.map((subDomainQuestion) => {
                            if (subDomainQuestion.id == examSubDomainQuestionId) {
                                return { ...subDomainQuestion, show_in_report: checked };
                            } else {
                                return subDomainQuestion;
                            }
                        })
                    };
                } else {
                    return examSubdomainData;
                }
            })
        );
    };

    return (
        <>
            <WhiteBox title={t('Examinee Data')}>
                <ExamineeGeneralData examinee={data.examinee} center={data.center} examiner={data.examiner} />
            </WhiteBox>
            <WhiteBox title={t('Questions')}>
                <h3>{t('Reports')}</h3>
                <div className="mb-4">
                    {data.is_saved_questions ? <AbasQuestionsReports data={data} /> : <NoReports />}
                </div>
                <h3>{t('Filters')}</h3>
                <div className="questions-report-subdomains-filter mb-3">
                    {subDomains.map((subDomain) => (
                        <h6
                            onClick={(e) =>
                                handleExamSubDomainCheck(!isAllQuestionsChecked(subDomain.id), subDomain.id)
                            }
                            key={subDomain.id}
                            className={`me-2${isAllQuestionsChecked(subDomain.id) ? ' selected' : ''}`}
                        >
                            {subDomain.name}
                        </h6>
                    ))}
                </div>
                <Row>
                    {subDomains.map((examSubDomain) => (
                        <Col key={examSubDomain.id} className="mb-5" md={6}>
                            <h3>
                                <input
                                    type="checkbox"
                                    id={`subdomain.${examSubDomain.id}`}
                                    checked={isAllQuestionsChecked(examSubDomain.id)}
                                    onChange={(e) => handleExamSubDomainCheck(e.target.checked, examSubDomain.id)}
                                />
                                <label htmlFor={`subdomain.${examSubDomain.id}`} className="ms-2">
                                    {examSubDomain.name}
                                </label>
                            </h3>
                            <Row className="fw-bold">
                                <Col xs={1}>{t('Show')}</Col>
                                <Col xs={1}>{t('Number')}</Col>
                                <Col xs={1}>{t('Result')}</Col>
                                <Col xs={9}>{t('Question')}</Col>
                            </Row>
                            <hr className="mt-0" />
                            {examSubDomain.questions.map((subDomainQuestion) => (
                                <Col key={`question.${subDomainQuestion.id}`} className="question-report-question-item">
                                    <Row htmlFor={`question.${subDomainQuestion.id}`} as={'label'}>
                                        <Col xs={1}>
                                            <input
                                                type="checkbox"
                                                id={`question.${subDomainQuestion.id}`}
                                                name={`question.${subDomainQuestion.id}`}
                                                checked={subDomainQuestion.show_in_report}
                                                onChange={(e) =>
                                                    handleExamSubDomainQuestionCheck(
                                                        e.target.checked,
                                                        subDomainQuestion.id,
                                                        examSubDomain.id
                                                    )
                                                }
                                            />
                                        </Col>
                                        <Col xs={1}>{subDomainQuestion.question_number}</Col>
                                        <Col xs={1} className="fw-bold text-success">
                                            {subDomainQuestion.result}
                                        </Col>
                                        <Col xs={9}>{subDomainQuestion.name}</Col>
                                    </Row>
                                </Col>
                            ))}
                        </Col>
                    ))}
                </Row>
                <Button variant="primary" className="mt-3" onClick={() => handleUpdate(subDomains)}>
                    {t('Save')}
                </Button>
            </WhiteBox>
        </>
    );
}

export default AbasQuestionsReportView;
