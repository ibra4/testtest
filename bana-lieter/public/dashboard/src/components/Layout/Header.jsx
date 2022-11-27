import { FaSignOutAlt } from 'react-icons/fa';
import React from 'react';
import { Col, Container, Dropdown, Form, Row } from 'react-bootstrap';
import HeaderBreadcrumb from './HeaderBreadcrumb';
import { AiOutlineNotification, AiOutlineMessage } from 'react-icons/ai';
import { BiMessageSquareDetail } from 'react-icons/bi';
import { CgMoreO } from 'react-icons/cg';
import { useTranslation } from 'react-i18next';

function Header({ title }) {
    const { t } = useTranslation();
    return (
        <div className="header">
            <Container fluid>
                <Row className="align-items-center">
                    <Col lg={6}>
                        <HeaderBreadcrumb />
                        <div className="title display-6 fw-bold">{title}</div>
                    </Col>
                    <Col lg={6}>
                        <div className="d-flex align-items-center justify-content-between">
                            <Form className="flex-1">
                                <Form.Control
                                    type="text"
                                    className="search-input"
                                    name="search"
                                    placeholder={t("Search") + "..."}
                                />
                            </Form>
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
                                    <img src="/images/girl.jpg" />
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Dropdown.Item href="#/action-1">{t('My Profile')}</Dropdown.Item>
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
