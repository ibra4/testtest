import { faChevronLeft, faChevronRight, faEdit, faTrash } from '@fortawesome/fontawesome-free-solid';
import ActionButton from 'components/Fields/ActionButton';
import React from 'react';
import { Table, Button } from 'react-bootstrap';
import ReactPaginate from 'react-paginate';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import QueryString from 'qs';

const View = ({ data, queryParams, onSearch }) => {
    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.email}</td>
            <td>{item.name}</td>
            <td>{item.created_at}</td>
            <td>{item.updated_at}</td>
            <td>
                <div className="d-flex">
                    <ActionButton icon={faEdit} onClick={() => {}} variant="success" />
                    <ActionButton icon={faTrash} onClick={() => {}} variant="danger" classes="ms-3" />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <a target="_blank" href={`/admins/export?${QueryString.stringify(queryParams)}`}>
                Export
            </a>
            <Table striped>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Latest Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>{data.data.map(renderRow)}</tbody>
            </Table>
            <ReactPaginate
                className="pagination"
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
            />
        </>
    );
};

export default View;
