import React from 'react';
import { useTranslation } from 'react-i18next';

function NoData({ data }) {
    const { t } = useTranslation();
    return data && data.total == 0 && <div className="text-danger text-center">{t('No Data to show')}</div>;
}

export default NoData;
