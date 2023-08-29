import ActionButton from 'components/Fields/ActionButton';
import WhiteBox from 'components/WhiteBox';
import moment from 'moment';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import { TbReportAnalytics } from 'react-icons/tb';
import AbasExamFormModal from '../Forms/AbasExamFormModal';
import { useHistory } from 'react-router-dom';
import { renderAbasExamFor } from 'providers/helpers';

function AbasTableView({ rows, onCreateExam }) {
    const { t } = useTranslation();
    const { push } = useHistory();

    const handleCreateAbasExam = (values, forWho) => {
        onCreateExam({ ...values, for: forWho }, 'abas');
    };

    return (
        <WhiteBox title={t('Abas Tests')}>
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
                                <td>{t(renderAbasExamFor(abasExam.for))}</td>
                                <td>{moment(abasExam?.created_at).format('yyyy-MM-DD')}</td>
                                <td>
                                    <ActionButton
                                        label={t('View Exam')}
                                        icon={<TbReportAnalytics />}
                                        onClick={() => push(`/abas-exams/${abasExam.id}`)}
                                    />
                                </td>
                            </tr>
                        ))}
                </tbody>
            </Table>
            <div className="d-flex justify-content-center">
                <AbasExamFormModal
                    title={t('Create exam for teacher')}
                    onSubmit={(values) => handleCreateAbasExam(values, 'teacher')}
                />
                <div className="ms-2">
                    <AbasExamFormModal
                        title={t('Create exam for parent')}
                        onSubmit={(values) => handleCreateAbasExam(values, 'parent')}
                    />
                </div>
                <div className="ms-2">
                    <AbasExamFormModal
                        title={t('Create exam for adult')}
                        onSubmit={(values) => handleCreateAbasExam(values, 'adult')}
                        disabled
                    />
                </div>
            </div>
        </WhiteBox>
    );
}

export default AbasTableView;
