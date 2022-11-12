import React from 'react';

function NoData({ data }) {
    return data && data.total == 0 && <div className="text-danger text-center">No Data</div>;
}

export default NoData;
