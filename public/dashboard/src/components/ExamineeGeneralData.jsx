import LabelValueCol from 'components/LabelValueCol';
import { getAdminById, getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';

function ExamineeGeneralData({ examinee }) {
    return (
        <Row>
            <LabelValueCol label={'Name'} value={examinee && examinee.name} md={3} />
            <LabelValueCol label={'Birthday'} value={examinee && examinee.birthday} md={3} />
            {/* <LabelValueCol label={'Age'} value={examinee && examinee.age} md={3} /> */}
            <LabelValueCol label={'Gender'} value={examinee && getGender(examinee.gender)} md={3} />
            <LabelValueCol label={'Country'} value={examinee && getCountryById(examinee.country_id)} md={3} />
            <LabelValueCol label={'Center Name'} value={examinee && getAdminById(examinee.admin_id)} md={3} />
            <LabelValueCol label={'Notes'} value={examinee && examinee.examiner_notes} md={12} />
        </Row>
    );
}

export default ExamineeGeneralData;
