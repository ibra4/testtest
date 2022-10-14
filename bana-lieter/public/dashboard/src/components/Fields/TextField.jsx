import React from 'react';
import { Form } from 'react-bootstrap';

function TextField({ name, onChange, value, label, ...rest }) {
    return (
        <>
        <Form.Label>{label}</Form.Label>
            <Form.Control type="text" name={name} onChange={onChange} value={value} {...rest} />
        </>
    );
}

export default TextField;
