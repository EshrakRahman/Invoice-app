import "./bootstrap";
// resources/js/app.js
import.meta.glob(["../images/**", "../fonts/**"]);
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
