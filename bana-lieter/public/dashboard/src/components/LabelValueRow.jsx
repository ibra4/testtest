import React from 'react';
import { Col, Row } from 'react-bootstrap';

function LabelValueRow({ label, value, cols = [6, 6] }) {
    return (
        <div className="label-value mb-3">
            <Row>
                <Col md={cols[0]} className="label fw-bold">
                    {label} : 
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
