import { FaEdit, FaFileExcel, FaPlus, FaTrash } from 'react-icons/fa';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table } from 'react-bootstrap';
import QueryString from 'qs';
import { Link, useHistory } from 'react-router-dom';
import { hasRole } from 'providers/helpers';
import Showing from 'components/Datatable/Showing';
import NoData from 'components/Datatable/NoData';
import Pagination from 'components/Datatable/Pagination';

const View = ({ data, queryParams, onSearch }) => {
    const { push } = useHistory();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>
                <img src={item.avatar} alt="" className="small-avatar" />
                <span className="ms-3">{item.name}</span>
            </td>
            <td>{item.email}</td>
            {hasRole('root') && <td> {item.adminname}</td>}
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <div className="d-flex">
                    <ActionButton
                        icon={FaEdit}
                        onClick={() => push(`/sub-admins/${item.id}/update`)}
                        variant="success"
                    />
                    <ActionButton icon={FaTrash} onClick={() => {}} variant="danger" classes="ms-3" />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <div className="d-flex">
                    <Link to="/sub-admins/create" className="btn btn-primary">
                        <FaPlus />
                        <span className="ms-2">Add new Admin</span>
                    </Link>
                    <a
                        className={`btn btn-success ms-2${!!!data.total ? ' disabled' : ''}`}
                        target="_blank"
                        href={`/sub-admins/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FaFileExcel />
                        <span className="ms-2">Export to Excel</span>
                    </a>
                </div>
            </div>
            <Table striped>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        {hasRole('root') && <th>Admin</th>}
                        <th>Created At</th>
                        <th>Latest Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>{data && data.data && data.data.map(renderRow)}</tbody>
            </Table>
            <NoData data={data} />
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
