import { faHome, faUser, faUsers } from '@fortawesome/fontawesome-free-solid';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import React from 'react';
import { Nav } from 'react-bootstrap';
import { useSelector } from 'react-redux';
import { Link, useLocation } from 'react-router-dom';

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: faHome,
        permission: 'root'
    },
    {
        routeName: 'admins',
        label: 'Admins',
        icon: faUser
    },
    {
        routeName: 'sub-admins',
        label: 'Sub Admins',
        icon: faUsers
    }
];

function SideMenu() {
    const { pathname } = useLocation();
    const userRole = useSelector((state) => state.app.config.user.role);

    const baseRoute = pathname.split('/')[1];

    const renderRouteLink = ({ routeName, label, icon, permission = null }) => {
        if (permission && permission !== userRole) {
            return;
        }
        return (
            <Nav.Item key={routeName}>
                <Nav.Link as={Link} to={`/${routeName}`} active={baseRoute == routeName}>
                    <FontAwesomeIcon icon={icon} />
                    <span className="ms-2">{label}</span>
                </Nav.Link>
            </Nav.Item>
        );
    };

    return (
        <div className="side-menu">
            <div className="menu-logo">
                <img src="/images/logo.png" className="h-100 m-auto" />
            </div>
            <hr className="" />
            <Nav className="inner flex-column">{routes.map(renderRouteLink)}</Nav>
        </div>
    );
}

export default SideMenu;
