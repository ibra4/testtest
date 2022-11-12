import React from 'react';
import { Col, Row } from 'react-bootstrap';
import WhiteBox from './WhiteBox';
import {TbReportAnalytics, TbReport, TbReportMoney} from 'react-icons/tb'
import classNames from 'classnames';

function Statistics({ statistics }) {
    const renderStatisticItem = (icon, value, label, svgWrapperClass) => (
        <Col md={4} className="d-flex">
            <WhiteBox classes="statistic-item flex-1">
                <Row>
                    <Col sm={3} className={classNames('svg-wrapper', svgWrapperClass)}>
                        {icon}
                    </Col>
                    <Col sm={9}>
                        <div className="number">{value}</div>
                        <div className="label">{label}</div>
                    </Col>
                </Row>
            </WhiteBox>
        </Col>
    );

    return (
        <Row>
            {renderStatisticItem(<TbReportAnalytics />, statistics.total_reports, 'Total Reports', 'bg-primary')}
            {renderStatisticItem(<TbReport />, statistics.used_reports, 'Used Reports', 'bg-warning')}
            {renderStatisticItem(
                <TbReportMoney />,
                statistics.total_reports - statistics.used_reports,
                'Remaining Reports',
                'bg-danger'
            )}
        </Row>
    );
}

export default Statistics;
