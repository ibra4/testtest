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
import { RadioSVGMap } from 'react-svg-map';
import 'react-svg-map/lib/index.css';
import { Button, Col, Row } from 'react-bootstrap';
import { FaChevronLeft } from 'react-icons/fa';
import LabelValueRow from 'components/LabelValueRow';
import { ROUTES } from 'providers/routes';
import { httpClient } from 'providers/helpers';
import { useTranslation } from 'react-i18next';
import HistoryView from 'components/HistoryView';
import Top5Examiners from 'components/Top5Examiners';

const countriesMapper = { sa, ae, tn, ps, jo };

function Dashboard() {
    const { t } = useTranslation();

    const { statistics } = useSelector((state) => state.app.config);

    const [historyData, setHistoryData] = useState();
    const [top5, setTop5] = useState();

    const [currentMap, setCurrentMap] = useState(world);
    const [areaName, setAreaName] = useState('');
    const [lastSelectedAreaName, setLastSelectedAreaName] = useState(t('Arab World'));
    const [onDiv, setOnDiv] = useState(false);
    const [countryStatistics, setCountryStatistics] = useState(statistics);
    const [currentCountryCode, setCurrentCountryCode] = useState(null);

    const ref = useRef(null);

    const getHistory = async () => {
        const res = await httpClient.get(ROUTES.HISTORY.TEASER);
        setHistoryData(res.data);
    };

    const getTop5 = async () => {
        const res = await httpClient.get(ROUTES.TOP5.TEASER);
        setTop5(res.data);
    };

    const handleBack = () => {
        setCurrentMap(world);
        setCountryStatistics(statistics);
        setLastSelectedAreaName(t('Arab World'));
    };

    const handleLocationChange = (location) => {
        console.log(location);
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

    useEffect(() => {
        getHistory();
        getTop5();
    }, []);

    return (
        <Layout title={t('Dashboard')}>
            <Statistics statistics={statistics} />
            <Row id="map-area" ref={ref}>
                <Col md={8} className="d-flex">
                    <WhiteBox title={t('Statistics By Area')} classes="flex-1" hr>
                        <div className="d-flex justify-content-between align-items-center">
                            <Button variant="success" onClick={handleBack} disabled={currentMap == world}>
                                <FaChevronLeft />
                                <span className="ms-2">{t('Back')}</span>
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
                    <WhiteBox title={t('Details')} classes="flex-1" hr>
                        <LabelValueRow
                            label={'Area'}
                            value={<div className="fw-bold color-main">{lastSelectedAreaName}</div>}
                        />
                        <LabelValueRow label="Num of Admins" value={countryStatistics.admins} />
                        <LabelValueRow label="Num of Examiners" value={countryStatistics.sub_admins} />
                        <LabelValueRow label={'Num of Total Reports'} value={countryStatistics.total_reports} />
                        <LabelValueRow label={'Num of Used Reports'} value={countryStatistics.used_reports} />
                        <LabelValueRow label={'Examinees'} value={countryStatistics.examinees} />
                    </WhiteBox>
                </Col>
            </Row>
            <WhiteBox title={t('Top 5 Examiners')} hr>
                <Top5Examiners data={top5} />
            </WhiteBox>
            <WhiteBox title={t('History')} hr>
                <HistoryView data={historyData} />
            </WhiteBox>
        </Layout>
    );
}

export default Dashboard;
