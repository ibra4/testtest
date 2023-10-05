import { FaEye, FaFileExcel, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import QueryString from 'qs';
import { useHistory } from 'react-router-dom';
import Showing from 'components/Datatable/Showing';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';
import WhiteBox from 'components/WhiteBox';
import { useTranslation } from 'react-i18next';
import { hasRole } from 'providers/helpers';
import moment from 'moment';

const View = ({ data, queryParams, onSearch, handleDelete }) => {
    const { t } = useTranslation();
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.examinee_id}</td>
            <td>{item.examineename}</td>
            <td>{item.examinername}</td>
            <td>{item.centername}</td>
            <td>{moment(item.created_at).format('yyyy-MM-DD')}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        icon={<FaEye />}
                        label={t('View Exam')}
                        onClick={() => push(`/exams/abas/${item.id}/introduction`)}
                        variant="primary"
                    />
                    {hasRole('root') && (
                        <ActionButton
                            icon={<FaTrash />}
                            label={t('Delete')}
                            onClick={() => handleDelete(item.id)}
                            variant="danger"
                            classes="ms-3"
                        />
                    )}
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <div className="d-flex">
                    {/* <Link to="/admins/create" className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: t('Admin') })}</span>
                    </Link> */}
                    {/* <a
                        className="btn btn-success ms-2"
                        target="_blank"
                        href={`/exams/abas/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FaFileExcel />
                        <span className="ms-2">{t('Export to Excel')}</span>
                    </a> */}
                </div>
            </div>
            <WhiteBox>
                <Table striped>
                    <thead>
                        <tr>
                            <th>{t('Exam ID')}</th>
                            <th>{t('Examinee ID')}</th>
                            <th>{t('Examinee')}</th>
                            <th>{t('Examiner')}</th>
                            <th>{t('Admin')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>{data && data.data && data.data.map(renderRow)}</tbody>
                </Table>
                <NoData data={data} />
            </WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
