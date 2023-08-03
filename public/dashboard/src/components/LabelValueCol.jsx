import React from 'react';
import { Col } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function LabelValueCol({ label, value, ...rest }) {
    const { t } = useTranslation();
    return (
        <Col className="label-value mb-3" {...rest}>
            <div className="fw-bold">{t(label)}</div>
            <div>{value}</div>
        </Col>
    );
}

export default LabelValueCol;
