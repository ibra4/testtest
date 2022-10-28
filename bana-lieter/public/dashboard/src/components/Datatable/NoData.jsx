import React from 'react';

function NoData({ data }) {
    return data && data.total == 0 && <div className="text-danger text-center mb-4">No Data</div>;
}

export default NoData;
