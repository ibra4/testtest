import { FaEdit, FaFileExcel, FaPlus, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import QueryString from 'qs';
import { Link, useParams } from 'react-router-dom';
import Showing from 'components/Datatable/Showing';
import Pagination from 'components/Datatable/Pagination';
import WhiteBox from 'components/WhiteBox';
import DataTable from 'react-data-table-component';
import { useTranslation } from 'react-i18next';
import { getLeiterRecordLabelByType } from 'providers/helpers';
import ActionLink from 'components/Fields/ActionLink';

const View = ({ data, queryParams, onSearch, handleDelete }) => {
    const { t } = useTranslation();
    const { type } = useParams();

    const columns = [
        {
            id: 'scaled_score',
            name: t('Scaled Score'),
            selector: (row) => row.scaled_score,
            sortable: true
        },
        {
            id: 'value',
            name: t('Value'),
            selector: (row) => row.value,
            sortable: true
        },
        {
            id: 'min_age',
            name: t('Min age'),
            selector: (row) => row.min_age,
            sortable: true
        },
        {
            id: 'max_age',
            name: t('Max age'),
            selector: (row) => row.max_age,
            sortable: true
        },
        {
            id: 'actions',
            name: t('Actions'),
            selector: (row) => (
                <>
                    <div className="d-flex">
                        <ActionLink
                            icon={<FaEdit />}
                            label={t('Edit')}
                            to={`/leiter-records/${row._id}/update`}
                            variant="success"
                        />
                        <ActionButton
                            icon={<FaTrash />}
                            onClick={() => handleDelete(row._id)}
                            label={t('Delete')}
                            variant="danger"
                            classes="ms-3"
                        />
                    </div>
                </>
            )
        }
    ];

    const handleSort = ({ id }, order) => {
        onSearch({ ...queryParams, sort: [id, order] });
    };

    const renderRow = (item) => (
        <tr key={item._id}>
            {/* <td>{item._id}</td> */}
            <td>{item.scaled_score}</td>
            <td>{item.value}</td>
            <td>{item.min_age}</td>
            <td>{item.max_age}</td>
            <td>
                <div className="d-flex">
                    <ActionLink
                        icon={<FaEdit />}
                        label={t('Edit')}
                        to={`/leiter-records/${item._id}/update`}
                        variant="success"
                    />
                    <ActionButton
                        icon={<FaTrash />}
                        label={t('Delete')}
                        onClick={() => {}}
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
                    <Link to={`/leiter-records/${type}/create`} className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">{t('create_new', { name: t(getLeiterRecordLabelByType(type)) })}</span>
                    </Link>
                    <a
                        className="btn btn-success ms-2"
                        target="_blank"
                        href={`/leiter-records/${type}/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FaFileExcel />
                        <span className="ms-2">{t('Export to Excel')}</span>
                    </a>
                </div>
            </div>
            <WhiteBox>{data?.data && <DataTable columns={columns} data={data?.data} onSort={handleSort} />}</WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
