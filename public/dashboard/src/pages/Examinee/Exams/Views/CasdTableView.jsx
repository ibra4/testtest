import ActionButton from 'components/Fields/ActionButton';
import WhiteBox from 'components/WhiteBox';
import moment from 'moment';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { TbReportAnalytics } from 'react-icons/tb';
import { useHistory } from 'react-router-dom';
import CasdExamFormModal from '../Forms/CasdExamFormModal';

function CasdTableView({ rows, onCreateExam }) {
    const { t } = useTranslation();
    const { push } = useHistory();
    return (
        <WhiteBox title={t('Checklist for Autism Spectrum Disorder (CASD)')}>
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
                        rows.map((casdExam) => (
                            <tr key={casdExam.id}>
                                <td>{casdExam.id}</td>
                                <td>{casdExam.age}</td>
                                <td>{casdExam?.examiner?.name}</td>
                                <td>{casdExam.application_date}</td>
                                <td>{moment(casdExam?.created_at).format('yyyy-MM-DD')}</td>
                                <td>
                                    <ActionButton
                                        label={t('View Exam')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/casd-exams/${casdExam.id}`)}
                                    />
                                </td>
                            </tr>
                        ))}
                </tbody>
            </Table>
            <div className="text-center">
                <CasdExamFormModal onSubmit={(values) => onCreateExam(values, 'casd')} />
            </div>
        </WhiteBox>
    );
}

export default CasdTableView;
