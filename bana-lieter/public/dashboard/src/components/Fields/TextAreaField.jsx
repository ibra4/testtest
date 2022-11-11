import React from 'react';
import { Form } from 'react-bootstrap';

function TextAreaField({ name, onChange, value, label, error, className, ...rest }) {
    return (
        <div className={className}>
            <Form.Label>{label}</Form.Label>
            <div className="input-group has-validation">
                <textarea
                    className="form-control"
                    isInvalid={!!error}
                    type="textarea"
                    name={name}
                    onChange={onChange}
                    {...rest}
                    defaultValue={value}
                />
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default TextAreaField;
