import React from 'react';
import { useTranslation } from 'react-i18next';

function ReportTitle({ title }) {
    const { t } = useTranslation();
    return <div className="title p-25 mb-0 pb-0">{t(title)}</div>;
}

export default ReportTitle;
