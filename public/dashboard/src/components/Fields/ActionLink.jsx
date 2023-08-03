import React from 'react';
import classNames from 'classnames';
import { useTranslation } from 'react-i18next';
import { Link } from 'react-router-dom';

function ActionLink({ variant = 'primary', classes, icon, to, label }) {
    const { t } = useTranslation();
    return (
        <Link className={classNames('action-button', `text-${variant}`, classes)} to={to}>
            {icon && icon}
            {label && <span className={icon && 'ms-2'}>{t(label)}</span>}
        </Link>
    );
}

export default ActionLink;
