import React from 'react'

function WhiteBox({ children, title, ...rest }) {
    return (
        <div className='white-box' {...rest}>
            {title && <div className="title">{title}</div>}
            {children}
        </div>
    )
}

export default WhiteBox