import React from 'react';
import { Form } from 'react-bootstrap';

function SelectField({ name, onChange, value, label, options, emptyLabel = '- Select -', ...rest }) {
    const renderOption = (item) => (
        <option key={item.id} value={item.id}>
            {item.label}
        </option>
    );

    return (
        <>
            <Form.Label>{label}</Form.Label>
            <Form.Control as="select" type="text" name={name} onChange={onChange} value={value} {...rest}>
                <option value="">{emptyLabel}</option>
                {options.map(renderOption)}
            </Form.Control>
        </>
    );
}

export default SelectField;
