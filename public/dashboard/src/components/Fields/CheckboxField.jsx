import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function CheckboxField({ name, onChange, value, label, error, className, ...rest }) {
    const { t } = useTranslation();
    return (
        <div className={className}>
            <div className="input-group has-validation">
                <Form.Check
                    name={name}
                    label={t(label)}
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
