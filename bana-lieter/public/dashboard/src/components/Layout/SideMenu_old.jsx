import { FaHome, FaUser, FaUsers, FaCog, FaChevronRight, FaBars, FaTable } from 'react-icons/fa';
import { hasAnyRole, hasRole } from 'providers/helpers';
import React, { useEffect, useState } from 'react';
import { Nav } from 'react-bootstrap';
import { Link, useLocation } from 'react-router-dom';
import { Transition } from 'react-transition-group';
import { useRef } from 'react';
import useWindowDimensions from 'providers/hooks/useWindowDimensions';

const duration = 300;

const defaultStyle = {
    transition: `${duration}ms ease-in-out`,
    width: '400px'
};

const textDefaultStyle = {
    transition: `${duration}ms ease-in-out`
};

const linkDefaultStyle = {
    transition: `${duration}ms ease-in-out`
};

const logoDefaultStyle = {
    transition: `${duration}ms ease-in-out`
};

const transitionStyles = {
    entering: { width: '130px' },
    entered: { width: '130px' },
    exiting: { width: '400px' },
    exited: { width: '400px' }
};

const navLinkTextStyles = {
    entering: { display: 'none' },
    entered: { display: 'none' },
    exiting: { display: 'none' },
    exited: { display: 'inline-block' }
};

const logoStyles = {
    entering: { textAlign: 'center' },
    entered: { textAlign: 'center' },
    exiting: { textAlign: 'initial' },
    exited: { textAlign: 'initial' }
};

const linkStyles = {
    entering: {
        fontSize: '30px',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        width: '80px',
        height: '80px',
        margin: 'auto'
    },
    entered: {
        fontSize: '30px',
        display: 'flex',
        justifyContent: 'center',
        alignItems: 'center',
        width: '80px',
        height: '80px',
        margin: 'auto'
    },
    exiting: { fontSize: '18px' },
    exited: { fontSize: '18px' }
};

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: <FaHome />,
        // role: 'admin'
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
    },
    {
        routeName: 'leiter-records/attention',
        label: 'Attention',
        icon: <FaTable />,
        role: 'root'
    },
];

function SideMenu() {
    const { pathname } = useLocation();

    const baseRoute = pathname.split('/')[1];

    const nodeRef = useRef(null);

    const renderRouteLink = ({ routeName, label, icon, role = null, state }) => {
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
                    <Nav.Link
                        as={Link}
                        to={`/${routeName}`}
                        active={baseRoute == routeName}
                        style={{ ...linkDefaultStyle, ...linkStyles[state] }}
                    >
                        {icon}
                        <span className="ms-2" style={{ ...textDefaultStyle, ...navLinkTextStyles[state] }}>
                            {label}
                        </span>
                    </Nav.Link>
                </Nav.Item>
            )
        );
    };

    const [inProp, setInProp] = useState(false);

    const { width } = useWindowDimensions();

    useEffect(() => {
        if (width < 992) {
            setInProp(true);
        }
    }, [width]);

    return (
        <Transition nodeRef={nodeRef} in={inProp} timeout={duration}>
            {(state) => (
                <div className="side-menu-wrapper">
                    <div
                        className="side-menu shadow"
                        ref={nodeRef}
                        style={{
                            ...defaultStyle,
                            ...transitionStyles[state]
                        }}
                    >
                        <a href="#" className="menu-toggle" onClick={() => setInProp(!inProp)}>
                            <FaBars />
                        </a>
                        <div className="menu-logo" style={{ ...logoDefaultStyle, ...logoStyles[state] }}>
                            <img
                                src={inProp ? '/images/logo_teaser.png' : '/images/logo.png'}
                                className="h-100 m-auto"
                            />
                        </div>
                        <hr className="" />
                        <Nav className="inner flex-column">
                            {routes.map((item) => renderRouteLink({ ...item, state }))}
                        </Nav>
                        <hr />
                        <div className="inner bottom">
                            {renderRouteLink({
                                routeName: 'settings',
                                label: 'Settings',
                                icon: <FaCog />,
                                role: 'root',
                                state
                            })}
                        </div>
                    </div>
                </div>
            )}
        </Transition>
    );
}

export default SideMenu;
