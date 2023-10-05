import React from 'react';
import classNames from 'classnames';
import { useTranslation } from 'react-i18next';

function BlankLink({ variant = 'primary', classes, icon, link, label }) {
    const { t } = useTranslation();
    return (
        <a className={classNames('action-button', `text-${variant}`, classes)} href={link}>
            {icon && icon}
            {label && <span className={icon && 'ms-2'}>{t(label)}</span>}
        </a>
    );
}

export default BlankLink;
