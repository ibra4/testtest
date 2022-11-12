import React from 'react';
import { Col } from 'react-bootstrap';

function LabelValueCol({ label, value, ...rest }) {
    return (
        <Col className="label-value mb-3" {...rest}>
            <div className="fw-bold">{label}</div>
            <div>{value}</div>
        </Col>
    );
}

export default LabelValueCol;
