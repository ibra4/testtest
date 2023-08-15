import { getLangcode, httpClient } from 'providers/helpers';
import { generalErrorText } from 'providers/helpers/constants';
import React from 'react';
import { useTranslation } from 'react-i18next';
import { useToasts } from 'react-toast-notifications';

function ChangeLangCode() {
    const { addToast } = useToasts();
    const { t } = useTranslation();

    const currentLocale = getLangcode();
    const langcodeName = currentLocale == 'en' ? 'ع' : 'EN';
    const langcode = currentLocale == 'en' ? 'ar' : 'en';

    const onSubmitLang = async () => {
        try {
            await httpClient.post('change-lang', { langcode });
            if (langcode != currentLocale) {
                localStorage.setItem('lang', langcode);
                let pathname = window.location.pathname;
                pathname = pathname.replace(currentLocale, langcode);
                window.location.pathname = pathname;
            }
        } catch (error) {
            console.log('errrrr', error);
            addToast(t(generalErrorText), { appearance: 'error' });
        }
    };

    return (
        <div className="change-lang-button" onClick={onSubmitLang}>
            {langcodeName}
        </div>
    );
}

export default ChangeLangCode;
