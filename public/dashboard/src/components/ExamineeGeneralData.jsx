import LabelValueCol from 'components/LabelValueCol';
import { getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';

function ExamineeGeneralData({ examinee, examiner }) {
    return (
        <Row>
            <LabelValueCol label={'ID'} value={examinee && examinee.id} md={3} />
            <LabelValueCol label={'Name'} value={examinee && examinee.name} md={3} />
            <LabelValueCol label={'Birthday'} value={examinee && examinee.birthday} md={3} />
            <LabelValueCol label={'Gender'} value={examinee && getGender(examinee.gender)} md={3} />
            <LabelValueCol label={'Country'} value={examinee && getCountryById(examinee.country_id)} md={3} />
            <LabelValueCol label={'Center Name'} value={examiner && examiner.name} md={3} />
        </Row>
    );
}

export default ExamineeGeneralData;
