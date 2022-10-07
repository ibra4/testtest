
import i18n from "i18next";
import translation_ar from "./ar.json";
import translation_en from "./en.json";
import { initReactI18next } from "react-i18next";
import { langcode } from "providers/constants";

i18n.use(initReactI18next).init({
  lng: langcode,
  resources: {
    [langcode]: {
      translation: langcode == "ar" ? translation_ar : translation_en,
    },
  },
});