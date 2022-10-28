import React from 'react';
import { Form } from 'react-bootstrap';

function CheckboxField({ name, onChange, value, label, error, className, ...rest }) {
    return (
        <div className={className}>
            <div className="input-group has-validation">
                <Form.Check
                    name={name}
                    label={label}
                    isInvalid={!!error}
                    onChange={onChange}
                    checked={value}
                    size="lg"
                    type="switch"
                    {...rest}
                />
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default CheckboxField;
