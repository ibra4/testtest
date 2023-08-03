import { isRtl } from 'providers/helpers';
import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import Select from 'react-select';

function SelectField2({ options, className, label, error, name, onChange, value, ...rest }) {
    const { t } = useTranslation();
    return (
        <div className={className}>
            <Form.Label>{t(label)}</Form.Label>
            <div className="input-group has-validation">
                <Select
                    className="w-100"
                    options={options}
                    value={options.find((item) => item.id == value)}
                    isRtl={isRtl()}
                    getOptionLabel={(item) => t(item.label)}
                    onChange={onChange}
                    placeholder={t('- Select -')}
                    {...rest}
                />
                <div className="text-danger">{error && error}</div>
            </div>
        </div>
    );
}

export default SelectField2;
