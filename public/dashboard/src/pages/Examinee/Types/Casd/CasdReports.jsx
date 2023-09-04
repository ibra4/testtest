import React from 'react';
import { useTranslation } from 'react-i18next';

function CasdReports({ reports }) {
    const { t } = useTranslation();
    return (
        <div className="exam-reports">
            <h2 className="text-danger">{t('Coming Soon ^_^')}</h2>
        </div>
    );
}

export default CasdReports;
