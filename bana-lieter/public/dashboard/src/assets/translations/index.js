import i18n from "i18next";
import { getLangcode } from "providers/helpers";
import { initReactI18next } from "react-i18next";
import translations_ar from './ar.json'
import translations_en from './en.json'

i18n
  .use(initReactI18next)
  .init({
    resources: {
      en: {
        translation: translations_en
      },
      ar: {
        translation: translations_ar
      }
    },
    lng: getLangcode(),
    interpolation: {
      escapeValue: false
    }
  });

export default i18n;