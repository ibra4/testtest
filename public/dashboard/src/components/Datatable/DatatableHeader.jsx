import FormModal from 'components/Forms/FormModal';
import React from 'react';
import { FaPlus } from 'react-icons/fa';
import Showing from './Showing';

function DatatableHeader({ data, baseApi, defaultValue, Form, createCallback, buttonLabel }) {
    return (
        <div className="datatable-header">
            <Showing data={data} />
            <FormModal
                apiPrefix={baseApi}
                defaultValue={defaultValue}
                Form={Form}
                createCallback={createCallback}
                icon={<FaPlus />}
                variant="primary"
                buttonLabel={buttonLabel}
            />
        </div>
    );
}

export default DatatableHeader;
