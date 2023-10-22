import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasReports({ data }) {
    const { t } = useTranslation();
    console.log('data: ', data);
    return (
        <div className="exam-reports">
            <h2 className="mb-4">{t('ABAS Reports')}</h2>
            <hr />
            <Row>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_ar} target="_blank" variant="primary">
                        {t('Report (AR)')}
                    </Button>
                </Col>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_en} disabled target="_blank" variant="primary">
                        {t('Report (EN)')}
                    </Button>
                </Col>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_charts_ar} target="_blank" variant="primary">
                        {t('Charts Report (AR)')}
                    </Button>
                </Col>
                <Col className="col-auto">
                    <Button as={'a'} href={data.file_charts_en} disabled target="_blank" variant="primary">
                        {t('Charts Report (EN)')}
                    </Button>
                </Col>
            </Row>
        </div>
    );
}

export default AbasReports;
