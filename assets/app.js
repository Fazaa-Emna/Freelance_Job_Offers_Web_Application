// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import noUiSlider from 'nouislider'
import 'nouislider/dist/nouislider.css'

import Filter from './modules/Filter.js'
new Filter(document.querySelector('.js-filter'))

const slider = document.getElementById('price-slider');

if (slider) {
    const min = document.getElementById('min')
    const max = document.getElementById('max')
    const range = noUiSlider.create(slider, {
        start: [min.value || 0, max.value || 1000],
        connect: true,
        step: 20,
        range: {
            'min': 0,
            'max': 1000
        }
    })

    range.on('slide', function(values, handle) {
        if (handle === 0) {
            min.value = Math.round(values[0])
        }
        if (handle === 1) {
            max.value = Math.round(values[1])
        }
    })
    range.on('end', function(values, handle) {
        min.dispatchEvent(new Event('change'))
    })
}