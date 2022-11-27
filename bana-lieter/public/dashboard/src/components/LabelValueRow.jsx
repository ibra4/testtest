import React from 'react';
import { Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function LabelValueRow({ label, value, cols = [6, 6] }) {
    const { t } = useTranslation();
    return (
        <div className="label-value mb-3">
            <Row>
                <Col md={cols[0]} className="label fw-bold">
                    {t(label)} :
                </Col>
                <Col md={cols[1]} className="value">
                    {value}
                </Col>
            </Row>
            <hr />
        </div>
    );
}

export default LabelValueRow;
