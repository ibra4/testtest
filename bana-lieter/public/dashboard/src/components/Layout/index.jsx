import React from 'react';
import { Col } from 'react-bootstrap';
import Footer from './Footer';
import Header from './Header';
import SideMenu from './SideMenu';

function index({ children, title = '' }) {
    return (
        <>
            <div className="d-flex">
                <SideMenu />
                <Col className="outer-page-wrapper p-3">
                    <Header title={title} />
                    <div className="content">{children}</div>
                    <Footer />
                </Col>
            </div>
        </>
    );
}

export default index;
