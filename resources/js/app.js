import './bootstrap';
import '../css/app.css';
require('bootstrap-table');
import 'bootstrap-table/dist/bootstrap-table.css';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
