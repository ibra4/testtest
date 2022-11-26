import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import Loader from 'react-loader-spinner';

function ReportsButtons({ data, isLoading }) {
    return (
        <>
            <hr className="mb-0" />
            <div className={`p-25 section-reports${isLoading ? ' loading' : ''}`}>
                <span className="title text-success">Reports: </span>
                <div className="d-flex justify-content-between">
                    {data.file_en && data.file_ar ? (
                        <div>
                            <div className="text-secondary mb-3">Last Update: {data.updated_at}</div>
                            <Row className="align-items-center">
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_en} target="_blank" variant="success">
                                        Report (AR)
                                    </Button>
                                </Col>
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_en} target="_blank" variant="success">
                                        Report (EN)
                                    </Button>
                                </Col>
                            </Row>
                        </div>
                    ) : (
                        <div>
                            <div className="text-danger">No reports to show</div>
                            <div className="text-secondary">Click save to generate reports</div>
                        </div>
                    )}
                    {isLoading && (
                        <div className="loader-wrapper">
                            <Loader type="Rings" width="100" height="100" color="#fd7d37" />
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}

export default ReportsButtons;