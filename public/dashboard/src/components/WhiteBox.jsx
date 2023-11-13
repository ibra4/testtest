import React from 'react';
import classNames from 'classnames';

function WhiteBox({ children, title, classes, shadow = true, hr = false, ...rest }) {
    return (
        <div className={classNames('white-box', classes, shadow ? 'shadow' : '')} {...rest}>
            {title && <div className="title">{title}</div>}
            {hr && <hr />}
            {children}
        </div>
    );
}

export default WhiteBox;
