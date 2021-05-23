'use strict';

var _moment = require('moment');

var _moment2 = _interopRequireDefault(_moment);

var _name = require('./name');

var _name2 = _interopRequireDefault(_name);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

console.log(_name2.default);
console.log(_moment2.default.unix('1500514362').format('DD.MM.YYYY HH:mm:ss'));