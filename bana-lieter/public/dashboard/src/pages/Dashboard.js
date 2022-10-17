import React, { useEffect, useRef, useState } from 'react'

import Layout from 'components/Layout'
import WhiteBox from 'components/WhiteBox'
import Statistics from 'components/Statistics'
import { useSelector } from 'react-redux'
import world from "components/svg-maps/packages/world";
import sa from "components/svg-maps/packages/saudi-arabia";
import ae from "components/svg-maps/packages/uae";
import tn from "components/svg-maps/packages/tunisia";
import ps from "components/svg-maps/packages/palestine";
import jo from "components/svg-maps/packages/jordan";
import { RadioSVGMap, SVGMap } from "react-svg-map";
import "react-svg-map/lib/index.css";
import { Button } from 'react-bootstrap'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faChevronLeft } from '@fortawesome/fontawesome-free-solid'

const countriesMapper = { sa, ae, tn, ps, jo }

function Dashboard() {

  const { statistics } = useSelector(state => state.app.config)

  const [currentMap, setCurrentMap] = useState(world)
  const [areaName, setAreaName] = useState("")
  const [lastSelectedAreaName, setLastSelectedAreaName] = useState("Arab World")
  const [onDiv, setOnDiv] = useState(false)

  const ref = useRef(null)

  const handleBack = () => {
    setCurrentMap(world)
    setLastSelectedAreaName("Arab World")
  }

  const handleLocationChange = location => {
    const countryCode = location.getAttribute('id')
    setLastSelectedAreaName(location.getAttribute('name'))
    if (countriesMapper[countryCode]) {
      setCurrentMap(countriesMapper[countryCode])
    } else {
      console.log("Country " + countryCode + " Not found!")
    }
  }

  const handleMouseMove = e => {
    const el = document.elementFromPoint(e.clientX, e.clientY)
    if (el.tagName.toLowerCase() == "path") {
      setAreaName(el.getAttribute("name"))
      setOnDiv(true)
    } else {
      setOnDiv(false)
    }
  }

  useEffect(() => {
    if (!onDiv) ref.current.addEventListener('mousemove', handleMouseMove)
    return () => {
      ref.current.removeEventListener('mousemove', () => {
        setOnDiv(false)
      })
    }
  }, [onDiv])

  return (
    <Layout title='Dashboard'>
      <Statistics statistics={statistics} />
      <WhiteBox title="Top 5 Admins">
        <div className="d-flex justify-content-between align-items-center">
          <Button variant="success" onClick={handleBack} disabled={currentMap == world}>
            <FontAwesomeIcon icon={faChevronLeft} />
            <span className="ms-2">Back</span>
          </Button>
          <h3 className="text-center">{onDiv ? areaName : lastSelectedAreaName}</h3>
          <div></div>
        </div>
        <div id="map-area" ref={ref}>
          <RadioSVGMap className="map-view" onChange={location => handleLocationChange(location)} cla map={currentMap} />
        </div>
        <div>dashboard</div>
      </WhiteBox>
    </Layout>
  )
}

export default Dashboard