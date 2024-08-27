import "./bootstrap";

import { Tooltip, initTWE } from "tw-elements";
initTWE({ Tooltip });

const myTooltip = new Tooltip(document.getElementById("my-tooltip"));

// resources/js/app.js
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
