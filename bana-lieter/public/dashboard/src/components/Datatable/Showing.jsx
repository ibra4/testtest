import React from 'react';

function Showing({ data }) {
    return (
        <span className="showing-label">
            {data?.data && (
                <>
                    Showing {data.from} to {data.to} items of {data.total} entries
                </>
            )}
        </span>
    );
}

export default Showing;
