import React from 'react';
// import classNames from 'classnames';
import classNames from 'classnames'

function WhiteBox({ children, title, classes, ...rest }) {
    return (
        <div className={classNames('white-box shadow', classes)} {...rest}>
            {title && <div className="title">{title}</div>}
            {children}
        </div>
    );
}

export default WhiteBox;
