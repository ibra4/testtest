import React from 'react';
import { Form } from 'react-bootstrap';
import Select from 'react-select';

function SelectField2({ options, className, label, error, onChange, value, rest }) {
    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <div className="input-group has-validation">
                {/* <div isInvalid={!!error}></div> */}
                <Select className="w-100" options={options} value={options.find(item => item.id == value)} onChange={onChange} />
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default SelectField2;
