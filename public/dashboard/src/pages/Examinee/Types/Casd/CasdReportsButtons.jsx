import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function CasdReportsButtons({ data }) {
    const { t } = useTranslation();

    return (
        <div className="exam-reports mb-4">
            <h3 className="mb-4">{t('Reports')}</h3>
            <hr />
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
            </Row>
        </div>
    );
}

export default CasdReportsButtons;
