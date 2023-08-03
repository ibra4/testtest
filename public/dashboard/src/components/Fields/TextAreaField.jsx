import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function TextAreaField({ name, onChange, value, label, error, className, ...rest }) {
    const { t } = useTranslation();
    return (
        <div className={className}>
            <Form.Label>{t(label)}</Form.Label>
            <div className="input-group has-validation">
                <Form.Control
                    isInvalid={!!error}
                    as="textarea"
                    name={name}
                    onChange={onChange}
                    defaultValue={value}
                    rows={3}
                    {...rest}
                />

                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default TextAreaField;
