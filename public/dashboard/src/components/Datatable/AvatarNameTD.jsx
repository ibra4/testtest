import { generateRandomColor, renderUserNameShortcut } from 'providers/helpers';
import React from 'react';

function AvatarNameTD({ item }) {
    return (
        <td className="d-flex align-items-center">
            {item && item.avatar ? (
                <img src={item.avatar} alt="" className="small-avatar img" />
            ) : (
                <div className="small-avatar txt" style={{ backgroundColor: generateRandomColor() }}>
                    {renderUserNameShortcut(item.name)}
                </div>
            )}
            <span className="ms-3">{item.name}</span>
        </td>
    );
}

export default AvatarNameTD;
