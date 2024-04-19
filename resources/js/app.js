import './bootstrap';

	
// Import our custom CSS
import '~resources/scss/app.scss'

// import Bootstrap JS
import '~bootstrap/js/index.esm.js'

// precompilazione immagini
import.meta.glob([
    '../img/**'
])