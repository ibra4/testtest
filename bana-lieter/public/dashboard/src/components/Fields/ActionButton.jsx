import React from 'react';
import classNames from 'classnames';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

function ActionButton({ variant = 'primary', classes, icon, onClick, label }) {
    return (
        <div className={classNames('action-button', `text-${variant}`, classes)} onClick={onClick}>
            {icon && <FontAwesomeIcon icon={icon} />}
            {label && <span className={icon && 'ml-2'}>{label}</span>}
        </div>
    );
}

export default ActionButton;
