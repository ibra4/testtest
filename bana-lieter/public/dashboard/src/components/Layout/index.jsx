import React from 'react'
import Header from './Header'
import SideMenu from './SideMenu'

function index({ children, title = "" }) {
  return (
    <>
      <div className="d-flex">
        <SideMenu />
        <div className="col p-3">
          <Header title={title} />
          <hr className='mt-0' />
          <div className="content">
            {children}
          </div>
        </div>
      </div>
    </>
  )
}

export default index