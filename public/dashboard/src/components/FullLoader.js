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
      <Loader type="Rings" width="200" height="200" color="#fd7d37" />
    </div>
  );
}

export default FullLoader;