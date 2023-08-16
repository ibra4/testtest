import { FaSignOutAlt } from 'react-icons/fa';
import React from 'react';
import { Col, Container, Dropdown, Form, Row } from 'react-bootstrap';
import HeaderBreadcrumb from './HeaderBreadcrumb';
import { AiOutlineNotification, AiOutlineMessage } from 'react-icons/ai';
import { BiMessageSquareDetail } from 'react-icons/bi';
import { CgMoreO } from 'react-icons/cg';
import { useTranslation } from 'react-i18next';
import { Link, useHistory } from 'react-router-dom';
import { useSelector } from 'react-redux';
import ChangeLangCode from './ChangeLangCode';

function Header({ title }) {
    const { t } = useTranslation();

    const user = useSelector((state) => state.app.config.user);

    return (
        <div className="header d-flex align-items-center mb-4">
            <Container fluid>
                <Row className="align-items-center">
                    <Col lg={8}>
                        {/* <HeaderBreadcrumb /> */}
                        <div className="title display-6 fw-bold">{title}</div>
                    </Col>
                    <Col lg={4}>
                        <div className="d-flex align-items-center justify-content-end">
                            <ChangeLangCode />
                            <Dropdown className="notifications-dropdown mx-2">
                                <Dropdown.Toggle className="dropdown-toggle" as={'div'}>
                                    <AiOutlineNotification />
                                    <div className="notification-number">5</div>
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Dropdown.Item href="#">
                                        <AiOutlineNotification />
                                        <span className="ms-2">{t('Notifications')}</span>
                                    </Dropdown.Item>
                                    <Dropdown.Divider />
                                    <Dropdown.Item href="#" className="unread">
                                        <BiMessageSquareDetail />
                                        <span className="ms-2">Text of notification number 1</span>
                                    </Dropdown.Item>
                                    <Dropdown.Item href="#" className="unread">
                                        <BiMessageSquareDetail />
                                        <span className="ms-2">Text of notification number 2</span>
                                    </Dropdown.Item>
                                    <Dropdown.Item href="#" className="unread">
                                        <BiMessageSquareDetail />
                                        <span className="ms-2">Text of notification number 3</span>
                                    </Dropdown.Item>
                                    <Dropdown.Item href="#">
                                        <BiMessageSquareDetail />
                                        <span className="ms-2">Text of notification number 4</span>
                                    </Dropdown.Item>
                                    <Dropdown.Item href="#">
                                        <BiMessageSquareDetail />
                                        <span className="ms-2">Text of notification number 5</span>
                                    </Dropdown.Item>
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
        </div>
    );
}

export default Header;
