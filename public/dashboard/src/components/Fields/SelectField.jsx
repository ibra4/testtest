import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function SelectField({ name, onChange, className, value, label, options, error, emptyLabel = '- Select -', ...rest }) {
    const { t } = useTranslation();
    const renderOption = (item) => (
        <option key={item.id} value={item.id}>
            {t(item.label)}
        </option>
    );

    return (
        <div className={className}>
            <Form.Label>{t(label)}</Form.Label>
            <div className="input-group has-validation">
                <Form.Control as="select" name={name} onChange={onChange} value={value} isInvalid={!!error} {...rest}>
                    <option value="">{t(emptyLabel)}</option>
                    {options.map(renderOption)}
                </Form.Control>
                <div className="invalid-feedback">{error && error}</div>
            </div>
        </div>
    );
}

export default SelectField;
