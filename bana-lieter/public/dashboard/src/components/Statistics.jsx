import { faFileAlt, faHome, faUser, faUsers } from '@fortawesome/fontawesome-free-solid';
import { faFile } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import WhiteBox from './WhiteBox';

function Statistics({ statistics }) {
    const renderStatisticItem = (icon, key, label) => (
        <Col md={4}>
            <WhiteBox classes="statistic-item">
                <Row className="d-flex align-items-center w-100">
                    <Col sm={3}>
                        <FontAwesomeIcon icon={icon} />
                    </Col>
                    <Col sm={9}>
                        <div className="number">{statistics[key]}</div>
                        <div className="label">{label}</div>
                    </Col>
                </Row>
            </WhiteBox>
        </Col>
    );

    return (
        <Row>
            {renderStatisticItem(faUsers, 'examinees', 'Examinees')}
            {renderStatisticItem(faFileAlt, 'total_reports', 'Total Reports')}
            {renderStatisticItem(faFile, 'remaining_reports', 'Remaining Reports')}
            {/* {renderStatisticItem(faUser, 'admin', 'Admins')} */}
        </Row>
    );
}

export default Statistics;
