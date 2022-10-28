import { FaHome, FaUser, FaUsers, FaCog } from 'react-icons/fa';
import { hasAnyRole, hasRole } from 'providers/helpers';
import React from 'react';
import { Nav } from 'react-bootstrap';
import { Link, useLocation } from 'react-router-dom';

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: <FaHome />,
        role: 'admin'
    },
    {
        routeName: 'admins',
        label: 'Admins',
        icon: <FaUser />,
        role: 'root'
    },
    {
        routeName: 'sub-admins',
        label: 'Sub Admins',
        icon: <FaUsers />,
        role: 'admin'
    },
    {
        routeName: 'examinees',
        label: 'Examinees',
        icon: <FaUsers />,
        role: ['admin', 'sub_admin']
    }
];

function SideMenu() {
    const { pathname } = useLocation();

    const baseRoute = pathname.split('/')[1];

    const renderRouteLink = ({ routeName, label, icon, role = null }) => {
        var show;
        if (role) {
            if (Array.isArray(role)) {
                show = hasAnyRole(role);
            } else {
                show = hasRole(role);
            }
        } else {
            show = true;
        }

        return (
            show && (
                <Nav.Item key={routeName}>
                    <Nav.Link as={Link} to={`/${routeName}`} active={baseRoute == routeName}>
                        {icon}
                        <span className="ms-2">{label}</span>
                    </Nav.Link>
                </Nav.Item>
            )
        );
    };

    return (
        <div className="side-menu-wrapper">
            <div className="side-menu shadow">
                <div className="menu-logo">
                    <img src="/images/logo.png" className="h-100 m-auto" />
                </div>
                <hr className="" />
                <Nav className="inner flex-column">{routes.map(renderRouteLink)}</Nav>
                <hr />
                <div className="inner bottom">
                    {renderRouteLink({
                        routeName: 'settings',
                        label: 'Settings',
                        icon: <FaCog />,
                        role: 'root'
                    })}
                </div>
            </div>
        </div>
    );
}

export default SideMenu;
