import React from 'react'
import { Breadcrumb } from 'react-bootstrap'

function HeaderBreadcrumb() {
  return (
    <Breadcrumb style={{marginBottom: 0}}>
        <Breadcrumb.Item>Home</Breadcrumb.Item>
        <Breadcrumb.Item>content</Breadcrumb.Item>
    </Breadcrumb>
  )
}

export default HeaderBreadcrumb