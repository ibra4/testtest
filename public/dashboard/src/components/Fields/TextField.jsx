import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function TextField({ name, onChange, value, label, error, className, helperText, ...rest }) {
    const { t } = useTranslation();
    return (
        <div className={className ? className : 'mb-3'}>
            <Form.Label>{t(label)}</Form.Label>
            <div className="input-group has-validation">
                <Form.Control isInvalid={!!error} type="text" name={name} onChange={onChange} value={value} {...rest} />
                <div className="invalid-feedback">{error && error}</div>
                {helperText && <small className="text-muted w-100">{helperText && t(helperText)}</small>}
            </div>
        </div>
    );
}

export default TextField;
