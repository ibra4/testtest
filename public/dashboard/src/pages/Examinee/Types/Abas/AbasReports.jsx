import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasReports({ data }) {
    const { t } = useTranslation();
    console.log('data: ', data);
    return (
        <div className="exam-reports">
            <h2 className="text-danger">{t('Coming Soon ^_^')}</h2>
            <Row>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_ar} target="_blank" variant="success">
                        {t('Report (AR)')}
                    </Button>
                </Col>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_en} disabled target="_blank" variant="success">
                        {t('Report (EN)')}
                    </Button>
                </Col>
            </Row>
        </div>
    );
}

export default AbasReports;
