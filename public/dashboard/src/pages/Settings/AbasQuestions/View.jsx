import { FaEdit, FaPlus } from 'react-icons/fa';
import React from 'react';
import { Table } from 'react-bootstrap';
import { useTranslation } from 'react-i18next';
import moment from 'moment';
import WhiteBox from 'components/WhiteBox';
import Showing from 'components/Datatable/Showing';
import FormModal from 'components/Forms/FormModal';
import AbasQuestionForm from 'components/Forms/AbasQuestionForm';
import { DEFAULT_VALUES } from 'providers/helpers/defaultValues';
import Pagination from 'components/Datatable/Pagination';

const View = ({ data, onSearch, queryParams, updateCallback, createCallback }) => {
    const { t } = useTranslation();

    const renderRow = (item) => (
        <tr key={item.id}>
            <td>{item.id}</td>
            <td>{item.question_number}</td>
            <td>{item.name}</td>
            <td>{item.name_en}</td>
            <td>{item.domain_full_name}</td>
            <td>{moment(item.created_at).format('yyyy-MM-DD')}</td>
            <td>
                <div className="d-flex">
                    <FormModal
                        apiPrefix={'/abas/questions'}
                        defaultValue={item}
                        Form={AbasQuestionForm}
                        updateCallback={updateCallback}
                        icon={<FaEdit />}
                        variant="success"
                        buttonLabel={t('Edit')}
                    />
                </div>
            </td>
        </tr>
    );

    return (
        <>
            <div className="datatable-header">
                <Showing data={data} />
                <FormModal
                    apiPrefix={'/abas/questions'}
                    defaultValue={DEFAULT_VALUES.ABAS_QUESTION}
                    Form={AbasQuestionForm}
                    createCallback={createCallback}
                    icon={<FaEdit />}
                    variant="primary"
                    buttonLabel={t('create', { name: t('Question') })}
                />
            </div>
            <WhiteBox>
                <Table striped>
                    <thead>
                        <tr>
                            <th>{t('ID')}</th>
                            <th>{t('Question Number')}</th>
                            <th>{t('Title')}</th>
                            <th>{t('Title En')}</th>
                            <th>{t('Sub Domain')}</th>
                            <th>{t('Created At')}</th>
                            <th>{t('Actions')}</th>
                        </tr>
                    </thead>
                    <tbody>{data && data.data && data.data.map(renderRow)}</tbody>
                </Table>
            </WhiteBox>
            <Pagination data={data} onSearch={onSearch} queryParams={queryParams} />
        </>
    );
};

export default View;
