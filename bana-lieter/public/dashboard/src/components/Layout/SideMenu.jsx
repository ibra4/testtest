import { faHome, faUser, faUsers } from '@fortawesome/fontawesome-free-solid';
import { faCog } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { hasRole } from 'providers/helpers';
import React from 'react';
import { Nav } from 'react-bootstrap';
import { Link, useLocation } from 'react-router-dom';

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: faHome,
        role: 'admin'
    },
    {
        routeName: 'admins',
        label: 'Admins',
        icon: faUser,
        role: 'root'
    },
    {
        routeName: 'sub-admins',
        label: 'Sub Admins',
        icon: faUsers,
        role: 'admin'
    },
    // {
    //     routeName: 'users',
    //     label: 'Users',
    //     icon: faUsers,
    //     role: 'admin'
    // }
];

function SideMenu() {
    const { pathname } = useLocation();

    const baseRoute = pathname.split('/')[1];

    const renderRouteLink = ({ routeName, label, icon, role = null }) => {
        const show = role ? hasRole(role) : true;

        return (
            show && (
                <Nav.Item key={routeName}>
                    <Nav.Link as={Link} to={`/${routeName}`} active={baseRoute == routeName}>
                        <FontAwesomeIcon icon={icon} />
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
                        icon: faCog,
                        role: 'root'
                    })}
                </div>
            </div>
        </div>
    );
}

export default SideMenu;
