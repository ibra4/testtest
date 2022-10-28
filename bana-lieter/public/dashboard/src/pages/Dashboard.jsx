import React, { useEffect, useRef, useState } from 'react';

import Layout from 'components/Layout';
import WhiteBox from 'components/WhiteBox';
import Statistics from 'components/Statistics';
import { useSelector } from 'react-redux';
import world from 'components/svg-maps/packages/world';
import sa from 'components/svg-maps/packages/saudi-arabia';
import ae from 'components/svg-maps/packages/uae';
import tn from 'components/svg-maps/packages/tunisia';
import ps from 'components/svg-maps/packages/palestine';
import jo from 'components/svg-maps/packages/jordan';
import { RadioSVGMap, SVGMap } from 'react-svg-map';
import 'react-svg-map/lib/index.css';
import { Button, Col, Row } from 'react-bootstrap';
import { FaChevronLeft } from 'react-icons/fa';
import LabelValueRow from 'components/LabelValueRow';
import { ROUTES } from 'providers/routes';
import { httpClient } from 'providers/helpers';

const countriesMapper = { sa, ae, tn, ps, jo };

function Dashboard() {
    const { statistics } = useSelector((state) => state.app.config);

    const [currentMap, setCurrentMap] = useState(world);
    const [areaName, setAreaName] = useState('');
    const [lastSelectedAreaName, setLastSelectedAreaName] = useState('Arab World');
    const [onDiv, setOnDiv] = useState(false);
    const [countryStatistics, setCountryStatistics] = useState(statistics);
    const [currentCountryCode, setCurrentCountryCode] = useState(null);

    const ref = useRef(null);

    const handleBack = () => {
        setCurrentMap(world);
        setCountryStatistics(statistics)
        setLastSelectedAreaName('Arab World');
    };

    const handleLocationChange = (location) => {
        const countryCode = location.getAttribute('id');
        setLastSelectedAreaName(location.getAttribute('name'));
        setCurrentCountryCode(countryCode);
        if (countriesMapper[countryCode]) {
            setCurrentMap(countriesMapper[countryCode]);
        } else {
            console.log('Country ' + countryCode + ' Not found!');
        }
    };

    const handleMouseMove = (e) => {
        const el = document.elementFromPoint(e.clientX, e.clientY);
        if (el.tagName.toLowerCase() == 'path') {
            setAreaName(el.getAttribute('name'));
            setOnDiv(true);
        } else {
            setOnDiv(false);
        }
    };

    useEffect(() => {
        if (!onDiv) ref.current.addEventListener('mousemove', handleMouseMove);
        return () => {
            ref.current.removeEventListener('mousemove', () => {
                setOnDiv(false);
            });
        };
    }, [onDiv]);

    const getCountryStatistics = async () => {
        const res = await httpClient.get(`${ROUTES.COUNTRY_STATISTICS.GET}/${currentCountryCode}`);
        setCountryStatistics(res.data);
    };

    useEffect(() => {
        if (currentCountryCode != null) {
            getCountryStatistics();
        }
    }, [currentCountryCode]);

    return (
        <Layout title="Dashboard">
            <Statistics statistics={statistics} />
            <Row id="map-area" ref={ref}>
                <Col md={8}>
                    <WhiteBox title="Statistics By Area" hr>
                        <div className="d-flex justify-content-between align-items-center">
                            <Button variant="success" onClick={handleBack} disabled={currentMap == world}>
                                <FaChevronLeft />
                                <span className="ms-2">Back</span>
                            </Button>
                            <h3 className="text-center">{onDiv ? areaName : lastSelectedAreaName}</h3>
                            <div></div>
                        </div>
                        <RadioSVGMap
                            className="map-view"
                            onChange={(location) => handleLocationChange(location)}
                            cla
                            map={currentMap}
                        />
                    </WhiteBox>
                </Col>
                <Col md={4} className="d-flex">
                    <WhiteBox title="Details" classes="flex-1" hr>
                        <LabelValueRow
                            label="Area"
                            value={<div className="fw-bold color-main">{lastSelectedAreaName}</div>}
                        />
                        {/* <LabelValueRow label="Num of Admins" value={countryStatistics.admins} /> */}
                        <LabelValueRow label="Num of Total Reports" value={countryStatistics.total_reports} />
                        <LabelValueRow
                            label="Num of Remaining Reports"
                            value={
                                <div className="text-danger fw-bold">
                                    {countryStatistics.total_reports - countryStatistics.used_reports}
                                </div>
                            }
                        />
                        <LabelValueRow label="Examinees" value={countryStatistics.examinees} />
                    </WhiteBox>
                </Col>
            </Row>
            <Row>
                <Col md={6}>
                    <WhiteBox title="Top 5 admins" hr>
                        Continue
                    </WhiteBox>
                </Col>
                <Col md={6}>
                    <WhiteBox title="History" hr>
                        Continue
                    </WhiteBox>
                </Col>
            </Row>
        </Layout>
    );
}

export default Dashboard;
