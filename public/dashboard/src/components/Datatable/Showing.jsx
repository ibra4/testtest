import React from 'react';
import { useTranslation } from 'react-i18next';

function Showing({ data }) {
    const { t } = useTranslation();
    return (
        <span className="showing-label">
            {data?.data && (
                <>
                    {t('showing_datatable', {
                        from: data.from,
                        to: data.to,
                        total: data.total,
                    })}
                </>
            )}
        </span>
    );
}

export default Showing;
