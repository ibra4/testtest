import React from 'react';
import ReactPaginate from 'react-paginate';
import { FaChevronRight, FaChevronLeft } from 'react-icons/fa';

function Pagination({ data, onSearch, queryParams }) {
    return (
        data && (
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
                nextLabel={<FaChevronLeft />}
                previousLabel={<FaChevronRight />}
                onPageChange={({ selected }) => onSearch({ ...queryParams, page: selected + 1 })}
                pageRangeDisplayed={5}
                pageCount={data.last_page}
                initialPage={data.current_page - 1}
            />
        )
    );
}

export default Pagination;
