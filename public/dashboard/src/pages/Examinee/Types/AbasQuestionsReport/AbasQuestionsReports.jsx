import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasQuestionsReports({ data }) {
    const { t } = useTranslation();

    return (
        <Row>
            <Col className="col-auto">
                <Button as={'a'} href={data.file_ar} target="_blank" variant="primary">
                    {t('Report (AR)')}
                </Button>
            </Col>
            <Col className="col-auto">
                <Button as={'a'} href={data.file_en} target="_blank" variant="primary">
                    {t('Report (EN)')}
                </Button>
            </Col>
        </Row>
    );
}

export default AbasQuestionsReports;
