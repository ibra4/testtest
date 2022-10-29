import React from 'react';
import { Form } from 'react-bootstrap';

function SelectField({ name, onChange, className, value, label, options, error, emptyLabel = '- Select -', ...rest }) {
    const renderOption = (item) => (
        <option key={item.id} value={item.id}>
            {item.label}
        </option>
    );

    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <div className="input-group has-validation">
                <Form.Control as="select" name={name} onChange={onChange} value={value} isInvalid={!!error} {...rest}>
                    <option value="">{emptyLabel}</option>
                    {options.map(renderOption)}
                </Form.Control>
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default SelectField;
