import React from 'react';
import { Form } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function RadioField({ name, onChange, value, label, className }) {
    const { t } = useTranslation();
    return (
        <>
            <Form.Check name={name} type={'radio'} label={t(label)} onChange={onChange} value={0} />
            <Form.Check name={name} type={'radio'} label={t(label)} onChange={onChange} value={1} />
            <Form.Check name={name} type={'radio'} label={t(label)} onChange={onChange} value={2} />
            <Form.Check name={name} type={'radio'} label={t(label)} onChange={onChange} value={3} />
        </>
    );
}

export default RadioField;
