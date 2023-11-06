import React from 'react';
import { Button, Col, Row } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function AbasQuestionsReports({ data }) {
    const { t } = useTranslation();

    return (
        <Row>
            <Col className="col-auto mb-3">
                <Button as={'a'} href={data.file_goals_ar} target="_blank" variant="primary">
                    {t('Goals Report (AR)')}
                </Button>
            </Col>
            <Col className="col-auto mb-3">
                <Button as={'a'} href={data.file_goals_en} target="_blank" variant="primary">
                    {t('Goals Report (EN)')}
                </Button>
            </Col>
            <Col className="col-auto mb-3">
                <Button as={'a'} href={data.file_goals_desc_ar} target="_blank" variant="primary">
                    {t('Goals Description Report (AR)')}
                </Button>
            </Col>
            <Col className="col-auto mb-3">
                <Button as={'a'} href={data.file_goals_desc_en} target="_blank" variant="primary">
                    {t('Goals Description Report (EN)')}
                </Button>
            </Col>
        </Row>
    );
}

export default AbasQuestionsReports;
