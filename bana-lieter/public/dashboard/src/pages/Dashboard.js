import React from 'react'

import Layout from 'components/Layout'
import WhiteBox from 'components/WhiteBox'
import Statistics from 'components/Statistics'

function Dashboard() {
  return (
    <Layout title='Dashboard'>
      <Statistics counts={{
        examinees: "621",
        total_reports: "20,000",
        admin: "20",
        remaining_reports: "1546"
      }} />
      <WhiteBox></WhiteBox>
      <WhiteBox title="Top 5 Admins">
        <div>dashboard</div>
      </WhiteBox>
    </Layout>
  )
}

export default Dashboard