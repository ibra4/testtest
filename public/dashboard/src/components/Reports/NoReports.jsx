import React from 'react';
import { useTranslation } from 'react-i18next';

function NoReports() {
    const { t } = useTranslation();

    return <div className="text-secondary mb-3">{t('no_reports_to_show')}</div>;
}

export default NoReports;
