import { faFileAlt, faHome, faUser, faUsers } from '@fortawesome/fontawesome-free-solid';
import { faFile } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import React from 'react';
import { Col, Row } from 'react-bootstrap';
import WhiteBox from './WhiteBox';

function Statistics({ statistics }) {
    return (
        <Row>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faUsers} />
                    <div className="number">{statistics.examinees}</div>
                    <div className="label">Examinees</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faFileAlt} />
                    <div className="number">{statistics.total_reports}</div>
                    <div className="label">Total Reports</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faFile} />
                    <div className="number">{statistics.remaining_reports}</div>
                    <div className="label">Remaining Reports</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faUser} />
                    <div className="number">{statistics.admin}</div>
                    <div className="label">Admin</div>
                </WhiteBox>
            </Col>
        </Row>
    );
}

export default Statistics;
