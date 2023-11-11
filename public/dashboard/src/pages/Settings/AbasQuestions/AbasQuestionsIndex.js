import React, { useState } from 'react'
import Layout from 'components/Layout'
import FullLoader from 'components/FullLoader'
import { useTranslation } from 'react-i18next'
import { useDataTable } from 'providers/hooks/useDataTable'
import { useSelector } from 'react-redux'
import Filters from './Filters'
import { DEFAULT_VALUES } from 'providers/helpers/defaultValues'
import { FaEdit } from 'react-icons/fa'
import AbasQuestionForm from 'components/Forms/AbasQuestionForm'
import FormModal from 'components/Forms/FormModal'
import DatatableHeader from 'components/Datatable/DatatableHeader'
import WhiteBox from 'components/WhiteBox'
import { Table } from 'react-bootstrap'
import moment from 'moment'
import Pagination from 'components/Datatable/Pagination'

function AbasQuestionsIndex() {

    const { t } = useTranslation()
    const config = useSelector((state) => state.app.config);

    const [status, setStatus] = useState("not-ready")

    const [queryParams, setQueryParams] = useState(DEFAULT_VALUES.ABAS_QUESTIONS_FILTER)

    const { data, onSearch, isLoading, updateCallback, createCallback } = useDataTable(queryParams, setQueryParams, status, setStatus, '/abas/questions')

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
        <Layout title={t('ABAS Questions')}>
            {isLoading && <FullLoader />}
            <Filters onSearch={onSearch} queryParams={queryParams} config={config} />
            <DatatableHeader
                data={data}
                baseApi={'/abas/questions'}
                defaultValue={DEFAULT_VALUES.ABAS_QUESTION}
                Form={AbasQuestionForm}
                createCallback={createCallback}
                buttonLabel={t('create_new', { name: t('Question') })}
            />
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
        </Layout >
    )
}

export default AbasQuestionsIndex
