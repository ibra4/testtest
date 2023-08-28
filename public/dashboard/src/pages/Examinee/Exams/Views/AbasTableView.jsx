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

    return (
        <WhiteBox title={t('Abas Tests')}>
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
                        rows.map((abasExam) => (
                            <tr key={abasExam.id}>
                                <td>{abasExam.id}</td>
                                <td>{abasExam.age}</td>
                                <td>{abasExam?.examiner?.name}</td>
                                <td>{abasExam.application_date}</td>
                                <td>{moment(abasExam?.created_at).format('yyyy-MM-DD')}</td>
                                <td>
                                    <ActionButton
                                        label={t('View Exam')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/reports/abas/${abasExam.id}`)}
                                    />
                                </td>
                            </tr>
                        ))}
                </tbody>
            </Table>
            <div className="d-flex justify-content-center">
                <AbasExamFormModal
                    title={t('Create exam for examiner')}
                    forWho={'examiner'}
                    onSubmit={(values) => onCreateExam(values, 'abas')}
                />
                <div className="ms-2">
                    <AbasExamFormModal
                        title={t('Create exam for parent')}
                        forWho={'parent'}
                        onSubmit={(values) => onCreateExam(values, 'abas')}
                    />
                </div>
                <div className="ms-2">
                    <AbasExamFormModal
                        title={t('Create exam for adult')}
                        forWho={'adult'}
                        onSubmit={(values) => onCreateExam(values, 'abas')}
                        disabled
                    />
                </div>
            </div>
        </WhiteBox>
    );
}

export default AbasTableView;
