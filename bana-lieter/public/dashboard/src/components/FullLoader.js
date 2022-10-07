import React from 'react';
import Loader from 'react-loader-spinner';

function FullLoader() {
  React.useEffect(() => {
    document.body.style.overflow = 'hidden';
    return () => {
      document.body.style.overflow = 'auto';
    };
  }, []);

  return (
    <div className="full-loader">
      <Loader type="Bars" width="200" height="200" color="#bb9c44" />
    </div>
  );
}

export default FullLoader;