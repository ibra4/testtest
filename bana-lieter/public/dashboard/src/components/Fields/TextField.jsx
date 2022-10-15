import React from 'react';
import { Form } from 'react-bootstrap';

function TextField({ name, onChange, value, label, error, className, ...rest }) {
    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <div className="input-group has-validation">
                <Form.Control isInvalid={!!error} type="text" name={name} onChange={onChange} value={value} {...rest} />
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default TextField;
