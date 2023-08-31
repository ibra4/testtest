import React from 'react';

function AbasIntroduction({ content }) {
    return (
        <div className="abas-introduction">
            <div dangerouslySetInnerHTML={{ __html: content }} />
        </div>
    );
}

export default AbasIntroduction;
