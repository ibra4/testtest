import React from 'react';
import { Breadcrumb } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';

function HeaderBreadcrumb() {
    const { t } = useTranslation();
    return (
        <Breadcrumb style={{ marginBottom: 0 }}>
            <Breadcrumb.Item>{t('Dashboard')}</Breadcrumb.Item>
            <Breadcrumb.Item>{t('Content')}</Breadcrumb.Item>
        </Breadcrumb>
    );
}

export default HeaderBreadcrumb;
