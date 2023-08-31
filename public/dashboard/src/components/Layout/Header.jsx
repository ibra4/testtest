import { FaSignOutAlt } from 'react-icons/fa';
import React from 'react';
import { Col, Container, Dropdown, Row } from 'react-bootstrap';
import { AiOutlineNotification } from 'react-icons/ai';
import { BiMessageSquareDetail } from 'react-icons/bi';
import { CgMoreO } from 'react-icons/cg';
import { useTranslation } from 'react-i18next';
import { Link } from 'react-router-dom';
import { useSelector } from 'react-redux';
import ChangeLangCode from './ChangeLangCode';
import WhiteBox from 'components/WhiteBox';

function Header({ title }) {
    const { t } = useTranslation();

    const user = useSelector((state) => state.app.config.user);
    const notifications = useSelector((state) => state.app.config.notifications);

    return (
        <WhiteBox classes="header d-flex align-items-center mb-4">
            <Container fluid>
                <Row className="align-items-center">
                    <Col lg={8}>
                        <div className="title text-black display-6 fw-bold mb-0">{title}</div>
                    </Col>
                    <Col lg={4}>
                        <div className="d-flex align-items-center justify-content-end">
                            <ChangeLangCode />
                            <Dropdown className="notifications-dropdown mx-2">
                                <Dropdown.Toggle className="dropdown-toggle" as={'div'}>
                                    <AiOutlineNotification />
                                    {notifications.unread_count ? (
                                        <div className="notification-number">{notifications.unread_count}</div>
                                    ) : (
                                        ''
                                    )}
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">
                                        <AiOutlineNotification />
                                        <span className="ms-2">{t('Notifications')}</span>
                                    </Dropdown.Item>
                                    <Dropdown.Divider />
                                    {notifications.list.map((userNotification) => (
                                        <Dropdown.Item
                                            key={userNotification.id}
                                            href="#"
                                            className={userNotification.read_at == null ? 'unread' : ''}
                                        >
                                            <BiMessageSquareDetail />
                                            <span className="ms-2">{userNotification.notification.title}</span>
                                        </Dropdown.Item>
                                    ))}
                                    <Dropdown.Divider />
                                    <Dropdown.Item href="#" className="text-primary">
                                        <CgMoreO />
                                        <span className="ms-2">{t('more')}</span>
                                    </Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                            <Dropdown>
                                <Dropdown.Toggle className="dropdown-toggle" as={'div'}>
                                    <img src={user.avatar} />
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Link className="dropdown-item" to={'/my-profile'}>
                                        {t('My Profile')}
                                    </Link>
                                    <Dropdown.Divider />
                                    <Dropdown.Item href="/admin/logout" className="text-danger">
                                        <FaSignOutAlt />
                                        <span className="ms-2">{t('Logout')}</span>
                                    </Dropdown.Item>
                                </Dropdown.Menu>
                            </Dropdown>
                        </div>
                    </Col>
                </Row>
            </Container>
        </WhiteBox>
    );
}

export default Header;
