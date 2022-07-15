import '../scss/main.scss'
import Module from './modules/Module'
import WooCommerce from './modules/WooCommerce'

// Main JavaScript that is provided to Webpack for asset compiling
const module = new Module()
const wc = new WooCommerce()