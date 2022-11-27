import React from 'react';
import classNames from 'classnames';
import { useTranslation } from 'react-i18next';

function ActionButton({ variant = 'primary', classes, icon, onClick, label }) {
    const { t } = useTranslation();
    return (
        <div className={classNames('action-button', `text-${variant}`, classes)} onClick={onClick}>
            {icon && icon}
            {label && <span className={icon && 'ml-2'}>{t(label)}</span>}
        </div>
    );
}

export default ActionButton;
