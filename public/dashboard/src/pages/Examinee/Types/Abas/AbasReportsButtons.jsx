import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasReportsButtons({ data }) {
    const { t } = useTranslation();

    return (
        <div className="exam-reports mb-4">
            <Row>
                <Col className="col-auto mb-3">
                    <Button as={'a'} href={data.file_ar} target="_blank" variant="primary">
                        {t('Report (AR)')}
                    </Button>
                </Col>
                <Col className="col-auto mb-3">
                    <Button as={'a'} href={data.file_en} disabled target="_blank" variant="primary">
                        {t('Report (EN)')}
                    </Button>
                </Col>
                <Col className="col-auto mb-3">
                    <Button as={'a'} href={data.file_charts_ar} target="_blank" variant="primary">
                        {t('Charts Report (AR)')}
                    </Button>
                </Col>
                <Col className="col-auto mb-3">
                    <Button as={'a'} href={data.file_charts_en} disabled target="_blank" variant="primary">
                        {t('Charts Report (EN)')}
                    </Button>
                </Col>
            </Row>
        </div>
    );
}

export default AbasReportsButtons;
