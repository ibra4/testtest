import React from 'react';

function Introduction({ content }) {
    return (
        <div className="abas-introduction">
            <div dangerouslySetInnerHTML={{ __html: content }} />
        </div>
    );
}

export default Introduction;
