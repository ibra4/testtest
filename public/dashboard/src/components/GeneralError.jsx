import React from 'react';
import { useTranslation } from 'react-i18next';

function GeneralError({message = 'Someething went wrong!'}) {
    const { t } = useTranslation();
    return <div>{message}</div>;
}

export default GeneralError;
