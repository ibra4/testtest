import React from 'react';
import { Table } from 'react-bootstrap';
import AvatarNameTD from 'components/Datatable/AvatarNameTD';
import { useTranslation } from 'react-i18next';

const Top5Examiners = ({ data }) => {
    const { t } = useTranslation();

    const renderRow = (item) => (
        <tr key={item.id}>
            <AvatarNameTD item={item} />
        </tr>
    );

    return (
        <>
            <Table striped>
                <thead>
                    <tr>
                        <th>{t('Admin')}</th>
                    </tr>
                </thead>
                <tbody>{data && data && data.map(renderRow)}</tbody>
            </Table>
        </>
    );
};

export default Top5Examiners;
