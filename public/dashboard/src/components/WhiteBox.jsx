import React from 'react';
import classNames from 'classnames'

function WhiteBox({ children, title, classes, hr = false, ...rest }) {
    return (
        <div className={classNames('white-box shadow', classes)} {...rest}>
            {title && <div className="title">{title}</div>}
            {hr && <hr />}
            {children}
        </div>
    );
}

export default WhiteBox;
