import { FaEdit, FaFileExcel, FaPlus, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import QueryString from 'qs';
import { Link, useHistory } from 'react-router-dom';
import Showing from 'components/Datatable/Showing';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
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
            <td>{item.title}</td>
            <td>{item.type}</td>
            <td>{item.for}</td>
            <td>{moment(item.created_at).format('yyyy-MM-DD')}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        icon={<FaEdit />}
                        label={t('Edit')}
                        onClick={() => push(`/settings/notifications/${item.id}/update`)}
                        variant="success"
                    />
                    <ActionButton
                        icon={<FaTrash />}
                        label={t('Delete')}
                        onClick={() => handleDelete(item.id)}
                        variant="danger"
                        classes="ms-3"
                    />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <div className="d-flex">
                    <Link to="/settings/notifications/create" className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: t('Notification') })}</span>
                    </Link>
                </div>
            </div>
            <WhiteBox>
                <Table striped>
                    <thead>
                        <tr>
                            <th>{t('ID')}</th>
                            <th>{t('Title')}</th>
                            <th>{t('Type')}</th>
                            <th>{t('For')}</th>
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
