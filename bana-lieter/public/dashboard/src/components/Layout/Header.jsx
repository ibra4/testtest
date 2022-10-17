import { faSignOutAlt } from '@fortawesome/fontawesome-free-solid';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import React from 'react';
import { Col, Container, Dropdown, Form, Row } from 'react-bootstrap';
import HeaderBreadcrumb from './HeaderBreadcrumb';

function Header({ title }) {
    return (
        <div className="header">
            <Container fluid>
                <Row className="align-items-center">
                    <Col lg={8}>
                        <HeaderBreadcrumb />
                        <div className="title display-5 fw-bold">{title}</div>
                    </Col>
                    <Col lg={4}>
                        <div className="d-flex align-items-center justify-content-between">
                            <Form>
                                <Form.Control type="text" className="search-input" name="search" placeholder="Search..." />
                            </Form>
                            <Dropdown>
                                <Dropdown.Toggle id="profile-button" as={'div'}>
                                    <img src="/images/girl.jpg" />
                                </Dropdown.Toggle>
                                <Dropdown.Menu>
                                    <Dropdown.Item href="#/action-1">My Profile</Dropdown.Item>
                                    <Dropdown.Item href="#/action-2">Link 2</Dropdown.Item>
                                    <Dropdown.Divider />
                                    <Dropdown.Item href="/admin/logout" className="text-danger">
                                        <FontAwesomeIcon icon={faSignOutAlt} />
                                        <span className="ms-2">Logout</span>
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
