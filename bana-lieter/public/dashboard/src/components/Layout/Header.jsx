import React from 'react'
import { Col, Container, Form, Row } from 'react-bootstrap'

function Header({title}) {
  return (
    <div className='header'>
        <Container fluid>
            <Row className='align-items-center'>
                <Col xs={8} className='title display-4'>{title}</Col>
                <Col xs={4}>
                    <Form>
                        <Form.Control type='text' name='search' placeholder='Search...' />
                    </Form>
                </Col>
            </Row>
        </Container>
    </div>
  )
}

export default Header