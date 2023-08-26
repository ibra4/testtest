import React from 'react';
import { Col, Row, Button } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function ReportsButtons({ data }) {
    const { t } = useTranslation();
    return (
        <>
            <hr className="mb-0" />
            <div className="p-25 section-reports">
                <h3 className="title text-success mb-3">{t('Reports')} :</h3>
                <div className="d-flex justify-content-between">
                    {data.file_en && data.file_ar ? (
                        <div>
                            <Row className="align-items-center">
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_ar} target="_blank" variant="success">
                                        {t('Report (AR)')}
                                    </Button>
                                </Col>
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_en} target="_blank" variant="success">
                                        {t('Report (EN)')}
                                    </Button>
                                </Col>
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_normal_dist_en} target="_blank" variant="success">
                                        {t('Normal Distribution Report (EN)')}
                                    </Button>
                                </Col>
                                <Col className="col-auto">
                                    <Button as={'a'} href={data.file_normal_dist_ar} target="_blank" variant="success">
                                        {t('Normal Distribution Report (AR)')}
                                    </Button>
                                </Col>
                            </Row>
                        </div>
                    ) : (
                        <div>
                            <div className="text-danger">{t('No reports to show')}</div>
                            <div className="text-secondary">{t('Click save to generate reports')}</div>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}

export default ReportsButtons;
