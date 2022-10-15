import {
    faChevronLeft,
    faChevronRight,
    faEdit,
    faFileExcel,
    faPlus,
    faTrash
} from '@fortawesome/fontawesome-free-solid';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table, Button } from 'react-bootstrap';
import ReactPaginate from 'react-paginate';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import QueryString from 'qs';
import { Link, useHistory } from 'react-router-dom';

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
            <td>
                <span className="text-success">{parseInt(Math.random() * item.number_of_reports ? item.number_of_reports : 0)}</span> / <b>{item.number_of_reports}</b>
            </td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <div className="d-flex">
                    <ActionButton icon={faEdit} onClick={() => push(`admins/${item.id}/update`)} variant="success" />
                    <ActionButton icon={faTrash} onClick={() => {}} variant="danger" classes="ms-3" />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <span className="showing-label">
                    Showing {data.from} to {data.to} items of {data.total} entries
                </span>
                <div className="d-flex">
                    <Link to="/admins/create" className="btn btn-primary">
                        <FontAwesomeIcon icon={faPlus} />
                        <span className="ms-2">Add new Admin</span>
                    </Link>
                    <a
                        className="btn btn-success ms-2"
                        target="_blank"
                        href={`/admins/export?${QueryString.stringify(queryParams)}`}
                    >
                        <FontAwesomeIcon icon={faFileExcel} />
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
                        <th>Number of records</th>
                        <th>Created At</th>
                        <th>Latest Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>{data.data.map(renderRow)}</tbody>
            </Table>
            {data.total == 0 && <div className="text-danger text-center mb-4">No Data</div>}
            <ReactPaginate
                className="pagination justify-content-center"
                pageClassName="page-item"
                pageLinkClassName="page-link"
                nextClassName="page-item"
                nextLinkClassName="page-link"
                previousClassName="page-item"
                previousLinkClassName="page-link"
                activeClassName="active"
                breakLabel="..."
                nextLabel={<FontAwesomeIcon icon={faChevronRight} />}
                previousLabel={<FontAwesomeIcon icon={faChevronLeft} />}
                onPageChange={({ selected }) => onSearch({ ...queryParams, page: selected + 1 })}
                pageRangeDisplayed={5}
                pageCount={data.last_page}
                initialPage={data.current_page - 1}
            />
        </>
    );
};

export default View;
