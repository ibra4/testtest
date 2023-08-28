import ActionButton from 'components/Fields/ActionButton';
import WhiteBox from 'components/WhiteBox';
import moment from 'moment';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { TbReportAnalytics } from 'react-icons/tb';
import { useHistory } from 'react-router-dom';
import LeiterExamFormModal from '../Forms/LeiterExamFormModal';

function LeiterTableView({ rows, onCreateExam }) {
    const { t } = useTranslation();
    const { push } = useHistory();
    return (
        <WhiteBox title={t('Leiter International Performance Scale - Third Edition')}>
            <Table className="align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{t('Age')}</th>
                        <th>{t('Created By')}</th>
                        <th>{t('Application Date')}</th>
                        <th>{t('Created At')}</th>
                        <th>{t('Actions')}</th>
                    </tr>
                </thead>
                <tbody>
                    {rows &&
                        rows.map((leiterExam) => (
                            <tr key={leiterExam.id}>
                                <td>{leiterExam.id}</td>
                                <td>{leiterExam.age}</td>
                                <td>{leiterExam?.examiner?.name}</td>
                                <td>{leiterExam.application_date}</td>
                                <td>{moment(leiterExam?.created_at).format('yyyy-MM-DD')}</td>
                                <td>
                                    <ActionButton
                                        label={t('View Exam')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/leiter-exams/${leiterExam.id}`)}
                                    />
                                </td>
                            </tr>
                        ))}
                </tbody>
            </Table>
            <div className="text-center">
                <LeiterExamFormModal onSubmit={(values) => onCreateExam(values, 'leiter')} />
            </div>
        </WhiteBox>
    );
}

export default LeiterTableView;
