import { faHome, faUser, faUsers } from '@fortawesome/fontawesome-free-solid'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import React from 'react'
import { Nav, NavItem } from 'react-bootstrap'

function SideMenu() {
  return (
    <div className="side-menu">
      <div className="menu-logo">
        <img src='/images/logo.png' className='h-100 m-auto' />
      </div>
      <hr className='' />
      <Nav className="inner flex-column">
        <Nav.Item>
          <Nav.Link href='/admin/dashboard' active>
            <FontAwesomeIcon icon={faHome} />
            <span className="ms-2">Dashboard</span>
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link href='/admin/dashboard'>
            <FontAwesomeIcon icon={faUser} />
            <span className="ms-2">Users</span>
          </Nav.Link>
        </Nav.Item>
        <Nav.Item>
          <Nav.Link href='/admin/dashboard'>
            <FontAwesomeIcon icon={faUsers} />
            <span className="ms-2">Examinees</span>
          </Nav.Link>
        </Nav.Item>
      </Nav>
    </div>
  )
}

export default SideMenu