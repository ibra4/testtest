import LabelValueCol from 'components/LabelValueCol';
import WhiteBox from 'components/WhiteBox';
import { getAdminById, getCountryById, getGender } from 'providers/helpers';
import React from 'react';
import { Row } from 'react-bootstrap';
import AttentionForm from './SubForms/AttentionForm';
import Attention from './SubForms/AttentionForm';
import CognitiveSubtestsForm from './SubForms/CognitiveSubtestsForm';
import ExaminerRatingScaleSectionForm from './SubForms/ExaminerRatingScaleSectionForm';
import MemoryBatteryForm from './SubForms/MemoryBatteryForm';
import NarrativeReportForm from './SubForms/NarrativeReportForm';

const cognitiveSubtestsValues = {
    figure_ground: '',
    form_completion: '',
    classification_analogies: '',
    sequential_order: '',
    visual_patterns: ''
};

const memoryBatteryValues = {
    forward_memory: '',
    reverse_memory: ''
};

const attentionValues = {
    attention_sustained: '',
    nonverbal_stroop_congruent_correct: '',
    nonverbal_stroop_incongruent_correct: ''
};

const examinerRatingScaleSectionValues = {
    attention: '',
    organization_impulse_control: '',
    activity_level: '',
    sociability: '',
    energy_and_feelings: '',
    regulation: '',
    anxiety: '',
    sensory_reaction: ''
};

const onSubmit = console.log;

function View({ data }) {
    return (
        <>
            <WhiteBox title="Examinee Data">
                <Row>
                    <LabelValueCol label={'Name'} value={data.name} md={3} />
                    <LabelValueCol label={'Birthday'} value={data.birthday} md={3} />
                    <LabelValueCol label={'Age'} value={data.age} md={3} />
                    <LabelValueCol label={'Gender'} value={getGender(data.gender)} md={3} />
                    <LabelValueCol label={'Country'} value={getCountryById(data.country_id)} md={3} />
                    <LabelValueCol label={'Application Date'} value={data.application_date} md={3} />
                    <LabelValueCol label={'Center'} value={getAdminById(data.admin_id)} md={3} />
                </Row>
            </WhiteBox>
            <CognitiveSubtestsForm initialValues={cognitiveSubtestsValues} onSubmit={onSubmit} />
            <MemoryBatteryForm initialValues={memoryBatteryValues} onSubmit={onSubmit} />
            <AttentionForm initialValues={attentionValues} onSubmit={onSubmit} />
            <ExaminerRatingScaleSectionForm initialValues={examinerRatingScaleSectionValues} onSubmit={onSubmit} />
            <NarrativeReportForm />
        </>
    );
}

export default View;
