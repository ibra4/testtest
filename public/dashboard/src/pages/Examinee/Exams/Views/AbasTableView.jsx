import ActionButton from 'components/Fields/ActionButton';
import WhiteBox from 'components/WhiteBox';
import moment from 'moment';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { TbReportAnalytics } from 'react-icons/tb';
import AbasExamFormModal from '../Forms/AbasExamFormModal';
import { useHistory } from 'react-router-dom';

function AbasTableView({ rows, onCreateExam }) {
    const { t } = useTranslation();
    const { push } = useHistory();

    const handleCreateAbasExam = (values) => {
        return onCreateExam(values, 'abas');
    };

    return (
        <WhiteBox title={t('ABAS-3 Adaptive Behavior Assessment System 3rd Edition')}>
            <Table className="align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('For')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
                    </tr>
                </thead>
                <tbody>
                    {rows &&
                        rows.map((abasExam) => (
                            <tr key={abasExam.id}>
                                <td>{abasExam.id}</td>
                                <td>{abasExam.age}</td>
                                <td>{abasExam?.examiner?.name}</td>
                                <td>{abasExam.application_date}</td>
                                <td>{abasExam.category}</td>
                                <td>{moment(abasExam?.created_at).format('yyyy-MM-DD')}</td>
                                <td>
                                    <ActionButton
                                        label={t('Questions Report')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/exams/abas/report-questions/${abasExam.id}`)}
                                    />
                                </td>
                                <td>
                                    <ActionButton
                                        label={t('View Exam')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/exams/abas/${abasExam.id}/introduction`)}
                                    />
                                </td>
                            </tr>
                        ))}
                </tbody>
            </Table>
            <div className="d-flex justify-content-center flex-wrap">
                <AbasExamFormModal title={t('create_new', { name: t('ABAS Exam') })} onSubmit={handleCreateAbasExam} />
            </div>
        </WhiteBox>
    );
}

export default AbasTableView;
