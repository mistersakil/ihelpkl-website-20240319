/* CSS */
import "./backend-css.css";

import.meta.glob(["../../images/**", "./images/**", "./fonts/**"]);

// import "./js/pace.min";
/* Bootstrap */
import "./js/bootstrap.bundle.min";

/* Swal */
import "../common/js/swal.js";

/* Custom Bootstrap JS */
import "../../js/echo.js";

/* Import jQuery */
import $ from "jquery";
window.jQuery = window.$ = $;

/** PerfectScrollbar */
import PerfectScrollbar from "perfect-scrollbar";
window.PerfectScrollbar = PerfectScrollbar;

/* Plugins */
import "./js/simplebar.min";

import metisMenu from "metismenu";
window.metisMenu = metisMenu;

/* App */
import "./js/app_backend";
