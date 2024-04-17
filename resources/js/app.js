import './bootstrap';

import * as bootstrap from 'bootstrap'

// Import our custom CSS
import '~resources/scss/app.scss'


import '~bootstrap/js/index.esm.js'

// resources/js/app.js // pre compilazione delle immagini
import.meta.glob([
    '../img/**'
    ])