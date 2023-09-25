import React, { useState } from 'react';
import { FaHome, FaUser, FaUsers, FaCog, FaBars, FaTable, FaImage, FaBell, FaCogs } from 'react-icons/fa';
import { Sidebar, Menu, MenuItem, SubMenu } from 'react-pro-sidebar';
import { Link, useLocation } from 'react-router-dom';
import { hasAnyRole, hasRole, isRtl } from 'providers/helpers';
import { useTranslation } from 'react-i18next';

const routes = [
    {
        routeName: 'dashboard',
        label: 'Dashboard',
        icon: <FaHome />
        // role: 'admin'
    },
    {
        routeName: 'admins',
        label: 'Centers',
        icon: <FaUser />,
        role: 'root'
    },
    {
        routeName: 'sub-admins',
        label: 'Examiners',
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
        label: 'Reports',
        routeName: 'leiter-reports',
        icon: <FaTable />,
        role: ['admin', 'sub_admin'],
        sublinks: [
            {
                routeName: 'leiter-exams',
                label: 'Leiter Reports',
                icon: <FaTable />,
                role: ['admin', 'sub_admin']
            },
            {
                routeName: 'abas-exams',
                label: 'ABAS Reports',
                icon: <FaTable />,
                role: ['admin', 'sub_admin']
            }
        ]
    }
];

const routes2 = [
    {
        label: 'Settings',
        routeName: 'settings',
        icon: <FaCog />,
        role: 'root',
        sublinks: [
            {
                routeName: 'settings/slider',
                label: 'Login Slider',
                icon: <FaImage />,
                role: 'root'
            },
            {
                routeName: 'settings/notifications',
                label: 'Notifications',
                icon: <FaBell />,
                role: 'root'
            },
            {
                routeName: 'settings',
                label: 'General Settings',
                icon: <FaCogs />,
                role: 'root'
            },
        ]
    },
    {
        label: 'Leiter Tables',
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
    },
    {
        label: 'Abas Settings',
        routeName: 'settings',
        icon: <FaCog />,
        role: 'root',
        sublinks: [
            {
                routeName: 'settings/abas/domains',
                label: 'Domains',
                icon: <FaImage />,
                role: 'root'
            },
            {
                routeName: 'settings/abas/sub-domains',
                label: 'Sub Domains',
                icon: <FaImage />,
                role: 'root'
            },
            {
                routeName: 'settings/abas/questions',
                label: 'Questions',
                icon: <FaImage />,
                role: 'root'
            }
        ]
    },
    {
        label: 'CASD Settings',
        routeName: 'casd_settings',
        icon: <FaCog />,
        role: 'root',
        sublinks: [
            {
                routeName: 'settings/casd/sub-domains',
                label: 'Sub Domains',
                icon: <FaImage />,
                role: 'root'
            },
            {
                routeName: 'settings/casd/questions',
                label: 'Questions',
                icon: <FaImage />,
                role: 'root'
            }
        ]
    }
];

function SideMenu() {
    const [collapsed, setCollapsed] = useState(false);
    const { t } = useTranslation();

    const { pathname } = useLocation();
    const baseRoute = pathname.split('/')[1];
    const fullRoute = pathname;

    const renderMenuLabel = (icon, label) => (
        <>
            {icon}
            <span className="ms-2">{t(label)}</span>
        </>
    );

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
                show && (
                    <SubMenu active={baseRoute == routeName} key={label} label={renderMenuLabel(icon, label)}>
                        {sublinks.map((item) => renderRouteLink({ ...item, sub: true }))}
                    </SubMenu>
                )
            );
        } else {
            return (
                show && (
                    <MenuItem
                        key={routeName}
                        component={<Link to={`/${routeName}`} />}
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
            <a href="#" className="menu-toggle" onClick={() => setCollapsed(!collapsed)}>
                <FaBars />
            </a>
            <Sidebar collapsedWidth={'100px'} breakPoint="sm" rtl={isRtl()} collapsed={collapsed}>
                <Menu>
                    <Link to="/" className="menu-logo">
                        <img src={collapsed ? '/images/logo_teaser.png' : '/images/logo.png'} />
                    </Link>
                    {routes.map(renderRouteLink)}
                    <hr />
                    {routes2.map(renderRouteLink)}
                    {routes2.length > 0 && <hr />}
                    <Link to="/">
                        <img src={'/images/lieter3.png'} className="w-100" />
                    </Link>
                </Menu>
            </Sidebar>
        </div>
    );
}

export default SideMenu;
