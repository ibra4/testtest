import { faHome } from '@fortawesome/fontawesome-free-solid'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React from 'react'
import { Col, Row } from 'react-bootstrap'
import WhiteBox from './WhiteBox'

function Statistics({counts}) {
  return (
    // <WhiteBox title="Statistics">
        <Row>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faHome} />
                    <div className="number">{counts.examinees}</div>
                    <div className="label">Examinees</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faHome} />
                    <div className="number">{counts.total_reports}</div>
                    <div className="label">Total Reports</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faHome} />
                    <div className="number">{counts.admin}</div>
                    <div className="label">Admin</div>
                </WhiteBox>
            </Col>
            <Col md={3}>
                <WhiteBox className="white-box statistic-item">
                    <FontAwesomeIcon icon={faHome} />
                    <div className="number">{counts.remaining_reports}</div>
                    <div className="label">Remaining Reports</div>
                </WhiteBox>
            </Col>
        </Row>
    // </WhiteBox>
  )
}

export default Statistics