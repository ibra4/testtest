import React, { useEffect } from 'react';
import { FaHome, FaUser, FaUsers, FaCog, FaChevronRight, FaBars, FaTable } from 'react-icons/fa';
import { Sidebar, Menu, MenuItem, SubMenu, useProSidebar } from 'react-pro-sidebar';
import { Link, useLocation } from 'react-router-dom';
import { hasAnyRole, hasRole } from 'providers/helpers';

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: <FaHome />
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
        label: 'Memory Subtests',
        routeName: 'leiter-records',
        icon: <FaTable />,
        role: 'root',
        sublinks: [
            {
                routeName: 'leiter-records/classification_analogies',
                label: 'Classification Analogies',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/sequential_order',
                label: 'Sequential Order',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/figure_ground',
                label: 'Figure Ground',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/form_completion',
                label: 'Form Completion',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/visual_patterns',
                label: 'Visual Patterns',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/attention',
                label: 'Attention',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/forward_memory',
                label: 'Forward Memory',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/reverse_memory',
                label: 'Reverse Memory',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/nonverbal_stroop_congruent_correct',
                label: 'Nonverbal Stroop Congruent Correct',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/nonverbal_stroop_incongruent_correct',
                label: 'Nonverbal Stroop Incongruent Correct',
                icon: <FaTable />,
                role: 'root'
            },
            {
                routeName: 'leiter-records/nonverbal_stroop_effect',
                label: 'Nonverbal Stroop Effect',
                icon: <FaTable />,
                role: 'root'
            }
        ]
    }
];

const renderMenuLabel = (icon, label) => (
    <>
        {icon}
        <span className="ms-2">{label}</span>
    </>
);

function SideMenu() {
    const { collapseSidebar, toggleSidebar, collapsed, toggled, broken, rtl } = useProSidebar();

    const { pathname } = useLocation();
    const baseRoute = pathname.split('/')[1];
    const fullRoute = pathname;

    useEffect(() => {
        console.log('fullRoute : ', fullRoute);
    }, [fullRoute]);

    const renderRouteLink = ({ routeName, label, icon, role = null, sublinks, sub = false }) => {
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

        if (sublinks) {
            return (
                <SubMenu open={baseRoute == routeName} active={baseRoute == routeName} key={label} label={renderMenuLabel(icon, label)}>
                    {sublinks.map((item) => renderRouteLink({ ...item, sub: true }))}
                </SubMenu>
            );
        } else {
            return (
                show && (
                    <MenuItem
                        key={routeName}
                        routerLink={<Link to={`/${routeName}`} />}
                        active={sub ? `/${routeName}` == fullRoute : baseRoute == routeName}
                    >
                        {renderMenuLabel(icon, label)}
                    </MenuItem>
                )
            );
        }
    };

    return (
        <div className="side-menu-wrapper position-relative">
            <a href="#" className="menu-toggle" onClick={() => collapseSidebar(!collapsed)}>
                <FaBars />
            </a>
            <Sidebar collapsedWidth={'100px'} breakPoint="sm">
                <Menu>
                    <div className="menu-logo">
                        <img src={collapsed ? '/images/logo_teaser.png' : '/images/logo.png'} />
                    </div>
                    {routes.map(renderRouteLink)}
                    <hr />
                    {renderRouteLink({
                        routeName: 'settings',
                        label: 'Settings',
                        icon: <FaCog />,
                        role: 'root'
                    })}
                </Menu>
            </Sidebar>
        </div>
    );
}

export default SideMenu;
