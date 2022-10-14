import React from 'react'

import Layout from 'components/Layout'
import WhiteBox from 'components/WhiteBox'
import Statistics from 'components/Statistics'
import { useSelector } from 'react-redux'

function Dashboard() {

  const {statistics} = useSelector(state => state.app.config)
  
  return (
    <Layout title='Dashboard'>
      <Statistics statistics={statistics} />
      <WhiteBox></WhiteBox>
      <WhiteBox title="Top 5 Admins">
        <div>dashboard</div>
      </WhiteBox>
    </Layout>
  )
}

export default Dashboard