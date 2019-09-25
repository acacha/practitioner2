import helpers from '../helpers.js'
// import { suma, log, saluda} from '../helpers.js'

import {template} from './templates/task'
document.body.innerHTML = template

// log('prova')
// saluda()
// const resultat = suma(1,2)
helpers.log('prova')
helpers.saluda()
const resultat = helpers.suma(1,2)
console.log(resultat)